<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_13Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function check_ContinueWithGoogleAccount(AdminStepter $I)
    {
        $I->loginWithGoogleAccount();
    }
}
