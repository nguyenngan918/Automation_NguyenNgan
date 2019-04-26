<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_44Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function clickTermsOfService(AdminStepter $I)
    {
        $I->clickTermsOfService();
    }
}
