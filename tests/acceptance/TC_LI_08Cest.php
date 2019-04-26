<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_08Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with valid username or email and empty password

     */
    public function checkLoginEmptyPassword(AdminStepter $I)
    {
        $I->LoginIncorrectPass('nguyenngan9198@gmail.com','');
    }
}
