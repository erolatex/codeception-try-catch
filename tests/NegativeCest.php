<?php

namespace Tests;

use Tests\Support\AcceptanceTester;

class NegativeCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl('https://google.com');
    }

    public function loginSuccessfully(AcceptanceTester $I)
    {
        $I->wait(1);
        $I->fail('Test one fail message');
    }
    
    public function loginWithInvalidPassword(AcceptanceTester $I)
    {
        try {
            $I->waitForElementVisible('//membercat') | RuntimeException;
        } catch (\Exception){}
    }       
}