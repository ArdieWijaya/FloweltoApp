<?php

use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'id' => 1,
                'flowerName' => 'Hand Bouquet 1',
                'flowerPrice' => 1000000,
                'description' => 'This is Hand Bouquet number one.',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/0049/9718/5639/products/F2_1024x1024.jpg?v=1565588537',
                'flower_category_id' => 1
            ],
            [
                'id' => 2,
                'flowerName' => 'Wedding Bouquet 1',
                'flowerPrice' => 2000000,
                'description' => 'This is Wedding Bouquet number one.',
                'flowerImage' => 'https://baliflowerdecor.com/wp-content/uploads/2019/04/vintage-wedding-bouquet-bali.jpg',
                'flower_category_id' => 2
            ],
        ]);
    }
}
