<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Dentifricio',
                'price' => 2.56,
            ],
            [
                'title' => 'Spazzolino',
                'price' => 1.33,
            ],
            [
                'title' => 'Colluttorio',
                'price' => 5.99,
            ],
        ];

        foreach ($products as $item) {
            $newProduct = new Product();
            $newProduct->title = $item['title'];
            $newProduct->price = $item['price'];

            $newProduct->save();
        }
    }
}
