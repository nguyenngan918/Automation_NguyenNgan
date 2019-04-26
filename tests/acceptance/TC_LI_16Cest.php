<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function clickOnHyperlink_03(AdminStepter $I)
    {
        $I->clickOnHyperlink_03();
    }
}
