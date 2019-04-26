<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_06Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with valid Username or Email and null password
     */
    public function checkLogin_nullPass( AdminStepter $I)
    {
        $I->Login_nullPass('nguyenngan9198@gmail.com');
    }
}
