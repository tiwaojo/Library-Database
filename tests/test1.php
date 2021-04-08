<?php
require 'vendor/autoload.php';
// Run "composer require" to set up
// Might need to run "composer dump-autoload -o"
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\Firefox\FirefoxDriver;
use Facebook\WebDriver\Firefox\FirefoxProfile;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
 
class GoogleSearchChromeTest extends TestCase
{
 
  protected $webDriver;
  
  public function build_chrome_capabilities(){
    $capabilities = DesiredCapabilities::chrome();
    return $capabilities;
  }
  
  public function setUp(): void
  {
    $capabilities = $this->build_chrome_capabilities();
    /* Download the Selenium Server 3.141.59 from 
    https://selenium-release.storage.googleapis.com/3.141/selenium-server-standalone-3.141.59.jar
    */
    $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
  }
 
  public function tearDown(): void
  {
    $this->webDriver->quit();
  }
  /*
  * @test
  */ 
  public function test_searchTextOnGoogle()
  {
    $this->webDriver->get("https://www.google.com/ncr");
    $this->webDriver->manage()->window()->maximize();
    
    sleep(5);
    
    $element = $this->webDriver->findElement(WebDriverBy::name("q"));
    if($element) {
      $element->sendKeys("LambdaTest");
      $element->submit();
    }
    
    print $this->webDriver->getTitle();
    $this->assertEquals('LambdaTest - Google Search', $this->webDriver->getTitle());
  }
}
