<?php

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartTableSeeder extends Seeder{
    public function run()
    {
        $cart1 = new Cart();
        $cart1->name = 'Product 1';
        $cart1->count = 1;
        $cart1->price = 10.00;

        $cart1->save();

        $cart2 = new Cart();
        $cart2->name = 'Product 2';
        $cart2->count = 2;
        $cart2->price = 5.00;

        $cart2->save();
    }
} 