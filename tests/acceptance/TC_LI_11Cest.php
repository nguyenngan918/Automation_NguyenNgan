<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_11Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function loginWithMultipleTab(AdminStepter $I)
    {
        $I->loginWithMultipleTab('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }
}
