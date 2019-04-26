<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_33Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestcheckBrowserLoggedIn(AdminStepter $I)
    {
        $I->checkBrowserLoggedIn();
    }
}
