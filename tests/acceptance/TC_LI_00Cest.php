<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_00Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I: check username exist on login page
     */
    public function checkUsernameExist(AdminStepter $I)
    {
        $I->checkUsernameExist();
    }
}
