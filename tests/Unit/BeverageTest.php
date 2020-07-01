<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Beverage;
use App\User;
use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;
use database\factories\BeverageFactory;
class BeverageTest extends TestCase
{
    private $beverage;
    public function setup() :void{
        parent::setup();
        $this->beverage=factory(Beverage::class)->make([
            'type'=>'Alcoholic'
        ]);
        $this->user=factory(User::class)->make([
            'age'=>'Alcoholic'
        ]);
    }
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function beverage_has_name()
    {
        $this->assertNotNull($this->beverage->name);
    }
    /** @test*/
    public function beverage_has_type()
    {
        $this->assertNotNull($this->beverage->type);
    }
        /** @test*/
        public function a_minor_user_can_not_buy_alcoholic_beverage()
        {
            //alcoholic beverage
            $beverage=factory(Beverage::class)->make([
                'type'=>'Alcoholic'
            ]);
            //minor user
            $user=factory(User::class)->make([
                'age'=>'17'
            ]);
            //logged in
            $this->actingAs($user);
            //expect exception
            $this->expectException(MinorCannotBuyAlcoholicBeverageException::class);
            //buy beverage
            $beverage->buy();
        }
}
