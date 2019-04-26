<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_45Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function loginWithMultipleTab_close(AdminStepter $I)
    {
        $I->loginWithMultipleTab_close('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }
}
