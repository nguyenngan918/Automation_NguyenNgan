<?php
namespace Step\Acceptance;
use Page\Acceptance\Login As FirstPage;

class AdminStep extends \AcceptanceTester
{
    /**
     * check user name exist on log in page
     */
    public function checkUsernameExist()
    {
        $I = $this;
        $I->wantToTest('Go to Login Page'); // cho biet dc dang lm buoc nao
        $I->amOnPage(FirstPage::$URL);
        $I->wantToTest('I want to check username exist');
        $I->waitForElementVisible(FirstPage::$usernameField,'3');

    }

    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception: I want to login with valid Username or Email and correct password
     */
    public function loginAsAdmin($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForText('Reader','10');

    }

    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception: I want to login with valid Username or Email and incorrect password
     */
    public function LoginIncorrectPass($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        //$I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForElement('Reader','5');
        $I->waitForText('Reader','10');
    }

    /**
     * @param $userName
     * @throws \Exception: I want to login with valid Username or Email and null password

     */
    public function Login_nullPass($userName)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForElement('Reader','5');
        $I->waitForText('Reader','10');
    }

    /**
     * I want to check don't enter username and just click Continue button
     *
     */
    public function Mail_Empty()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,'');
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
    }

    /**
     * I want to check null username or email and just click Continue button
     */
    public function Mail_Null()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElement(FirstPage::$passwordField,'5');

    }

    /**
     * @param $userName
     * @throws \Exception: I want to check login with invalid Username
     */
    public function login_invalidMail($userName)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElement(FirstPage::$passwordField,'5');
    }

    /**
     * @throws \Exception: I want check press Tab key
     */
    public function check_press_Tabkey()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->pressKey(FirstPage::$usernameField, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->waitForElement(FirstPage::$btnContinue,'5');
        $I->pressKey(FirstPage::$btnContinue, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->waitForElementVisible(FirstPage::$link1,'5');
        $I->pressKey(FirstPage::$btnGoogle,'\Facebook\WebDriver\WebDriverKeys::TAB');
        $I->pressKey(FirstPage::$link1, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->waitForElementVisible(FirstPage::$link2,'5');
        $I->pressKey(FirstPage::$link2, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->waitForElementVisible(FirstPage::$link3,'5');
        $I->pressKey(FirstPage::$link3, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->waitForElementVisible(FirstPage::$link4,'5');


    }

    public function check_pressEnterKey($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->pressKey(FirstPage::$btnContinue, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->pressKey(FirstPage::$btnLogin, \Facebook\WebDriver\WebDriverKeys::ENTER);
        //$I->waitForElement('Reader','10');
        $I->waitForText('Reader','10');
    }
    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception:  I want to check type of [Password] input (show text or dot)
     */
    public function check_eyePassword($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$eye,'10');
        $I->click(FirstPage::$eye);
        $I->waitForElementVisible(FirstPage::$typeTextPass,'10');
        //$I->wait('2');
        $I->click(FirstPage::$eye);
        $I->waitForElementVisible(FirstPage::$typePassword,'10');
        //$I->wait('2');
    }

    /**
     * @throws \Codeception\Exception\ModuleException
     *  I want to check Login with Google Account
     */
    public function loginWithGoogleAccount()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$btnGoogle,'10');
        $I->click(FirstPage::$btnGoogle);
        $I->seeInPopup('Google');

    }

    /**
     * @throws \Exception:
     * I want to check Click on  hyperlink creat a new account go to "creat a new account" page
     */
    public function clickOnHyperlink_01()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->click(FirstPage::$link1);
        $I->waitForText('Let\'s get started.');
    }

    /**
     * @throws \Exception
     * I want to check Click hyperlink email me a login link go to "email me a login" page
     */
    public function clickOnHyperlink_02()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link2,'10');
        $I->click(FirstPage::$link2);
        $I->waitForText('Email me a login link.');
    }

    /**
     * @throws \Exception
     * I want to check Click hyperlink loss your passwork? link go to loss your passwork? page
     */
    public function clickOnHyperlink_03()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link3,'10');
        $I->click(FirstPage::$link3);
        $I->waitForText('Lost Password');
    }

    /**
     * @throws \Exception
     * I want to check Click hyperlink Back to WordPress.com go to WordPress.com page
     */
    public function clickOnHyperlink_04()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link4,'10');
        $I->click(FirstPage::$link4);
        $I->waitForText('Build a website,');
    }

    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception
     * I want to check if a user will be able to Login successfully and exit browser, Account has been saved yet.
     */
    public function checkSaveAccount($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->wait('2');
        //$I->waitForElement('Reader','10');
        $I->waitForText('Reader','10');
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$usernameField);

    }

    /**
     * @throws \Exception
     * I want to check Enter on  hyperlink creat a new account go to "creat a new account" page
     */
    public function enterOnHyperlink_01()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->pressKey(FirstPage::$link1, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Let\'s get started.');
    }

    /**
     * @throws \Exception
     * I want to check Enter hyperlink email me a login link go to "email me a login" page
     */
    public function enterOnHyperlink_02()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->pressKey(FirstPage::$link2, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Email me a login link.');
    }

    /**
     * @throws \Exception
     * I want to check Enter hyperlink loss your passwork? link go to loss your passwork? page
     */
    public function enterOnHyperlink_03()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->pressKey(FirstPage::$link3, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Lost Password');
    }

    /**
     * @throws \Exception
     * I want to check Enter hyperlink Back to WordPress.com go to WordPress.com page
     */
    public function enterOnHyperlink_04()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->pressKey(FirstPage::$link4, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Build a website,');
    }

    /**
     * @throws \Codeception\Exception\ModuleException
     * I want to check pop up when click Continue with Google button
     */
    public function checkBrowserLoggedIn()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$btnGoogle,'10');
        $I->click(FirstPage::$btnGoogle);
        $I->canSeeInPopup('Đăng nhập bằng Google');

    }

    /**
     * @throws \Exception
     * I want to mouseHover on creat a new account Hyperlink
     */
    public function mouseHoverHyperlink_01()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1,'10');
        $I->moveMouseOver(FirstPage::$link1);


    }
    /**
     * @throws \Exception
     * I want to mouseHover on email me a login Hyperlink
     */
    public function mouseHoverHyperlink_02()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link2,'10');
        $I->moveMouseOver(FirstPage::$link2);
    }
    /**
     * @throws \Exception
     * I want to mouseHover on loss your passwork? Hyperlink
     */
    public function mouseHoverHyperlink_03()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link3,'10');
        $I->moveMouseOver(FirstPage::$link3);
    }
    /**
     * @throws \Exception
     * I want to mouseHover on Back to WordPress.com Hyperlink
     */
    public function mouseHoverHyperlink_04()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link4,'10');
        $I->moveMouseOver(FirstPage::$link4);
    }

    /**
     * @throws \Exception
     * I want to click on Terms Of Service go to Terms Of Service page
     */
    public function clickTermsOfService()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$termsOfService,'10');
        $I->click(FirstPage::$termsOfService);
        $I->waitForText('Terms of Service');

    }

    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception
     * I want to check if a user should be able to login with multiple tabs
     */
    public function loginWithMultipleTab($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForText('Reader','10');

        $I->openNewTab();
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForText('Reader','10');
    }

    /**
     * @param $userName
     * @param $passWord
     * @throws \Exception
     * I want to check if a user should be able to login with multiple tabs and close tab
     */
    public function loginWithMultipleTab_close($userName,$passWord)
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForText('Reader','10');
        $I->closeTab();
        $I->openNewTab();
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameField,'10');
        $I->fillField(FirstPage::$usernameField,$userName);
        $I->waitForElementVisible(FirstPage::$btnContinue,'10');
        $I->click(FirstPage::$btnContinue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$passWord);
        $I->waitForElementVisible(FirstPage::$btnLogin,'10');
        $I->click(FirstPage::$btnLogin);
        $I->waitForText('Reader','10');
        $I->closeTab();
    }

}