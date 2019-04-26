<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_43Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function mouseHoverHyperlink_04(AdminStepter $I)
    {
        $I->mouseHoverHyperlink_04();
    }
}
