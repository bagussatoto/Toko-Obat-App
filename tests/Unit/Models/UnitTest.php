<?php

namespace Tests\Unit\Models;

use App\Product;
use App\Unit;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_unit_has_many_products_relation()
    {
        $unit = factory(Unit::class)->create();
        $product = factory(Product::class)->create(['unit_id' => $unit->id]);

        $this->assertInstanceOf(Collection::class, $unit->products);
        $this->assertInstanceOf(Product::class, $unit->products->first());
    }
}
