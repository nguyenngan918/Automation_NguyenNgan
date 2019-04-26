<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_37Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminStepter $I)
    {
        $I->check_eyePassword('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }
}
