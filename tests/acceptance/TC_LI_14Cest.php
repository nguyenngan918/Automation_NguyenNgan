<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function clickOnHyperlink_01(AdminStepter $I)
    {
        $I->clickOnHyperlink_01();
    }
}
