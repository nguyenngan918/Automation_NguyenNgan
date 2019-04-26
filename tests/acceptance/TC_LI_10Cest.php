<?php
use Step\Acceptance\AdminStep As AdminStepter;

class TC_LI_10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function check_pressEnterKey(AdminStepter $I)
    {
        $I->check_pressEnterKey('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }
}
