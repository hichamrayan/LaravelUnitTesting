<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserModelTest extends TestCase
{
   use DatabaseMigrations;
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user=User::create(['firstname'=>'Rayan1','lastname'=>'bouzkraoui1','email'=>'hicham@gmail.com','password'=>'pass']);
        $this->assertEquals('Rayan1 bouzkraoui1',$user->fullname);
    }
}
