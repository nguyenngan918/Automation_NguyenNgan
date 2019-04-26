<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_23Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkSaveAccounthh(AdminStepter $I)
    {
       $I->checkSaveAccount('nguyenngan9198@gmail.com','Thanh@Ngan123');
    }
}
