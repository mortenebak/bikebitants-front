<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_find_brand_at_home()
    {
        $this->visit('/')
            ->see('Simple Brand')
            ->click('Simple Brand')
            ->seePageIs($this->link('brand/simple-brand'))
            ->seeRouteIs('shop.brand', ['slug' => 'simple-brand']);
    }
}
