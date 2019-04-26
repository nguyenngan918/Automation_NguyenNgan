<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_42Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function mouseHoverHyperlink_03(AdminStepter $I)
    {
        $I->mouseHoverHyperlink_03();
    }
}
