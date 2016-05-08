<?php

class AuthTest extends TestCase 
{
    public function testGuestGetLogin()
    {
        $this->visit('/login')
            ->seePageIs('/login')
            ->seeStatusCode(200)
            ->see('Login');
    }
    
    public function testGuestGetRegister()
    {
        $this->visit('/register')
            ->seePageIs('/register')
            ->seeStatusCode(200)
            ->see('Register');
    }    
    
    public function testGuestGetLogout()
    {
        $this->visit('/logout')
            ->seePageIs('/login')
            ->seeStatusCode(200)
            ->see('Login');
    }
}
