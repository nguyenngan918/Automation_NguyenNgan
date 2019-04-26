<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_41Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function mouseHoverHyperlink_02(AdminStepter $I)
    {
        $I->mouseHoverHyperlink_02();
    }
}
