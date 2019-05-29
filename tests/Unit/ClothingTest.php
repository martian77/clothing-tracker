<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClothingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $clothing = factory(App\Clothing::class)->make();
        $clothing->save();
        $this->assertTrue( $clothing->id > 0 );
    }
}
