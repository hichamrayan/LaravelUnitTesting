<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Beverage;
use database\factories\BeverageFactory;
class BeverageTest extends TestCase
{
    private $beverage;
    public function setup() :void{
        parent::setup();
        $this->beverage=factory(Beverage::class)->make();
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
}
