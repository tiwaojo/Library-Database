<?php

// Run "composer require" to set up
// Run "composer dump-autoload -o"
/* Download the Selenium Server 3.141.59 from 
    https://selenium-release.storage.googleapis.com/3.141/selenium-server-standalone-3.141.59.jar
    */
// Download the 
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\Firefox\FirefoxDriver;
use Facebook\WebDriver\Firefox\FirefoxProfile;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\Net\URLChecker;
use Facebook\WebDriver\WebDriver;

class test1 extends TestCase
{

    protected $webDriver;
    public function seleniumSetup()
    {
        putenv('WEBDRIVER_CHROME_DRIVER=./selenium\chromedriver.exe');
        $capabilities = DesiredCapabilities::chrome();
        // $capabilities->setCapability('acceptSslCerts', false);
        $this->webDriver = RemoteWebDriver::createBySessionID('http://localhost:4444/wd/hub', $capabilities);
    }
    public function setUp(): void
    {

        putenv('WEBDRIVER_CHROME_DRIVER=./selenium\chromedriver.exe');
        $options = new ChromeOptions();
        $options->setBinary('/Library-Database\selenium\chromedriver.exe');

        $capabilities = DesiredCapabilities::chrome();

        $this->webDriver = ChromeDriver::start($capabilities);
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/', $capabilities);

        // To use selenium server comment above
        // Run ` java -jar ./selenium\selenium-server-standalone-3.141.59.jar` in a new terminal and  uncomment below to use selenium server
    //    $this-> seleniumSetup();
    }

    

    public function tearDown(): void
    {
        //quits the application after test run
        $this->webDriver->quit();
    }
    /*
  * @test
  */
    public function testPageServed()
    {
        //Retrieves and loads the url, maximizes the window and asserts if its the correct page has bee ndelivered
        $this->webDriver->get("http://localhost/Library-Database/views/signin.php");
        $this->webDriver->manage()->window()->maximize();
        sleep(5);

        $this->assertEquals('Sign up', $this->webDriver->getTitle());
    }

    /**
     * @dataProvider signinProvider
     */
    public function testSignin(array $inputs)
    {
        //retrieves data from signinProvider as a parameter before test execution
        //retrieves the webpage and runs the test
        $this->webDriver->get("http://localhost/Library-Database/views/signin.php");
        $this->checkSignin($inputs);

        // waits for webpage to load till a markup/styling condition
        // $this->webDriver->wait()->until(WebDriverExpectedCondition::elementTextContains($this->webDriver->WebDriverBy::name('email'), 'fasdf@mail.com'));

        //Checks if the title of the webpage matches
        $this->assertEquals('Library Database', $this->webDriver->getTitle());
    }

    public function signinProvider()
    {
        //provides the test data required
        $inputs[] = [
            [
                'email' => 'fasdf@mail.com',
                'password' => '456',
            ]
        ];

        return $inputs;
    }

    public function checkSignin(array $inputs)
    {
        // waits until the page has loaded
        // $this->webDriver->wait()->until(1000,"http://localhost/Library-Database/views/signin.php");

        //for each html element that matches the requested element, set its value to the corresponding value.
        foreach ($inputs as $name => $value) {
            $this->webDriver->findElement(WebDriverBy::name($name))->sendKeys($value);
        }
        $this->webDriver->wait();
        $this->webDriver->findElement(WebDriverBy::tagName("button"))->click();
    }

    /**
     * @dataProvider signupProvider
     */
    public function testSignup(array $signupinputs)
    {
        //retrieves data from signupProvider as a parameter before test execution
        //retrieves the webpage for testing        
        $this->webDriver->get("http://localhost/Library-Database/views/signup.php");
        $this->webDriver->manage()->window()->maximize();

        // $this->webDriver->wait(30,1000)->until(WebDriverExpectedCondition::titleIs('Sign up'));
        print $this->webDriver->getTitle();
        $this->checkSignUp($signupinputs);

        // if the title of the webpage is same as expected
        $this->assertEquals('Library Database', $this->webDriver->getTitle());
    }
    public function checkSignUp(array $signupinputs)
    {
        //for each html element that matches the requested element, set its value to the corresponding value.
        foreach ($signupinputs as $name => $value) {
            $this->webDriver->findElement(WebDriverBy::name($name))->sendKeys($value);
        }
        $this->webDriver->findElement(WebDriverBy::tagName("button"))->click();
        // $this->webDriver->wait(30, 20)->until(WebDriverExpectedCondition::elementTextContains(WebDriverBy::name('country'), 'Canada'));
    }

    public function signupProvider()
    {
        //provides the test data required
        $signupinputs[] = [
            [
                'fname' => 'nyfirstname',
                'lname' => 'mylastname',
                'email' => 'mymail@gmail.com',
                'bdate' => '2000-01-01',
                'phone' => '123-456-7890',
                'sex' => 'F',
                'streetAddone' => '2000 Simcoe St N',
                'city' => 'Oshawa',
                'stateorProv' => 'Ontario',
                'postCode' => 'L1G 0C5',
                'country' => 'Canada',
                'username' => 'myUsername',
                'password' => 'myPassword',

            ]
        ];

        return $signupinputs;
    }
}
