<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I
     * @throws Exception; login with invalid Username or Email and incorrect password
     */
    public function login_incorrectPass(AdminStepter $I)
    {
        $I->LoginIncorrectPass('nguyenngan9198@gmail.com','Thanh@123');
    }

}
