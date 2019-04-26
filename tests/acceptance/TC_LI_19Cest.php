<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_19Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function mouseHoverHyperlink_01(AdminStepter $I)
    {
        $I->mouseHoverHyperlink_01();
    }
}
