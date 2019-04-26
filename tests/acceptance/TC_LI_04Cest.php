<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_04Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function check_MailNull( AdminStepter $I)
    {
        $I->Mail_Null();
    }
}
