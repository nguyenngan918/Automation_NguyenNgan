<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I: I want to check login with empty Username or Email
     */
    public function loginMailEmpty(AdminStepter $I)
    {
        $I->Mail_Empty();
    }
}
