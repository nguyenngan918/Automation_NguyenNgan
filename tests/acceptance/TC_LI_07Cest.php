<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I
     * @throws Exception; I want to check login with valid Username or Email and incorrect password
     */
    public function check_LI_incorrectPass(AdminStepter $I)
    {
        $I->LoginIncorrectPass('nguyenngan9198@gmail.com','hjhjj');

    }

    /**
     * @param AdminStepter $I
     * @throws Exception; I want to check login with valid Username or Email and space password
     */
    public function check_LI_incorrectPass_02(AdminStepter $I)
    {
        $I->LoginIncorrectPass('nguyenngan9198@gmail.com','  Thanh@Ngan123');

    }

    /**
     * @param AdminStepter $I
     * @throws Exception; I want to check login with valid Username or Email and space password
     */
    public function check_LI_incorrectPass_03(AdminStepter $I)
    {
        $I->LoginIncorrectPass('nguyenngan9198@gmail.com','Thanh@N  gan123');

    }
}
