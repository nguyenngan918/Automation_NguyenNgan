<?php
namespace Page\Acceptance;

class Login
{
    // include url of current page

    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static $usernameField = '(//input[@class="form-text-input"])[1]';

    public static $passwordField = '(//input[@class="form-text-input"])[2]';

    public static $btnContinue = '//div[@class="login__form-action"]//button[text()="Continue"]';

    public static $btnLogin = '//div[@class="login__form-action"]//button[text()="Log In"]';

    public static $btnGoogle = '//button[@class="social-buttons__button button"]';

    public static $link1= '//div[@class="wp-login__links"]/a[1]';

    public static $link2= '//div[@class="wp-login__links"]/a[2]';

    public static $link3= '//div[@class="wp-login__links"]/a[3]';

    public static $link4= '//div[@class="wp-login__links"]/a[4]';

    public static $eye ='//span[@class="form-password-input__toggle form-password-input__toggle-visibility"]';

    public static $typePassword ='//input[@type="password"][@class="form-text-input"]';

    public static $typeTextPass='(//input[@type="text"][@class="form-text-input"])[2]';

    public static $termsOfService = '//a[text()="Terms of Service"]';

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
