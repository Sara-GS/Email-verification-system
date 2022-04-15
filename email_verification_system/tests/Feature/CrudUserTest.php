<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudUserTest extends TestCase
{
    use RefreshDatabase;
     
   
    public function test_user_entity_name()
    {
        $user = new User([
            'name' => 'Sara González' 
        ]);

        $this->assertEquals('Sara González', $user->getName());    
    }

    public function test_user_entity_email()
    {
        $user = new User([
            'email' => 'sara@gmail.com' 
        ]);

        $this->assertEquals('sara@gmail.com', $user->getEmail());    
    }

    public function test_user_entity_password()
    {
        $user = new User([
            'password' => '11111111' 
        ]);

        $this->assertEquals('11111111', $user->getPassword()); 
 }

}