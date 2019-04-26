<?php
use Step\Acceptance\AdminStep As AdminStepter;

class TC_LI_09Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function check_pressTabKey(AdminStepter $I)
    {
        $I->check_press_Tabkey();
    }
}
