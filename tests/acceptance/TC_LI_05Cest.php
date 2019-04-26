<?php
use Step\Acceptance\AdminStep As AdminStepter;
class TC_LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with invalid Username
     */
    public function login_invalidMail(AdminStepter $I)
    {
        $I->login_invalidMail('nnguyenhgh@gmail.com');
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with invalid Username ( Email or Username has space head and tail)
     */
    public function login_invalidMail_02(AdminStepter $I)
    {
        $I->login_invalidMail('  nguyenngan9198@gmail.com  ');
    }
    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with invalid Username ( Email or Username has space between words )
     */
    public function login_invalidMail_03(AdminStepter $I)
    {
        $I->login_invalidMail('nguyen  ngan9198@gmail.com');
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with invalid Username ( Email or Username miss @ )
     */
    public function login_invalidMail_04(AdminStepter $I)
    {
        $I->login_invalidMail('nguyenngan9198gmail.com');
    }

    /**
     * @param AdminStepter $I
     * @throws Exception: I want to check login with invalid Username ( Email or Username has more than 1 point )
     */
    public function login_invalidMail_05(AdminStepter $I)
    {
        $I->login_invalidMail('nguyenngan9198@gmail...com');
    }
}
