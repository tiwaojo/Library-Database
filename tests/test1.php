<?php
//Run composer require to set up
require 'vendor/autoload.php';
 
// selenium-server-standalone-#.jar (version 3.x)
$host = 'http://localhost:4444/wd/hub';
// selenium-server-standalone-#.jar (version 4.x)
// $host = 'http://localhost:4444';

//For testing on chrome
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Chrome\ChromeDriver;
 
protected $webDriver;
 
$capabilities = DesiredCapabilities::chrome();
$this->webDriver = RemoteWebDriver::create($host, $capabilities);

 
class ClassNameTest extends TestCase
{
    public function setUp(): void
    {
        /* Setup (or initialization) method goes here */
    }
 
    public function tearDown(): void
    {
        /* tearDown (or de-initialization) method goes here */
    }
 
    /*
     * test
    */
    public function test_scenario_1()
    {
        /* Test Method implementation goes here */
        echo "Test scenario 1";
    }
}
?>