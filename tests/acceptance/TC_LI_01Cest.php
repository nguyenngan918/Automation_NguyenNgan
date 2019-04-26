<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests

    /**
     * @param AdminStepter $I
     * @throws Exception : i want to check login with valid Username or Email and correct password
     */
    public function loginAsAdmin(AdminStepter $I)
    {
        $I->loginAsAdmin('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }


}
