<?php
use Step\Acceptance\AdminStep As AdminStepter;

class TC_LI_31Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function enterOnHyperlink_03(AdminStepter $I)
    {
        $I->enterOnHyperlink_03();
    }
}
