<?php

use Illuminate\Database\Seeder;

class FlowerCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower_categories')->insert([
            [
                'flowerCategoriesName' => 'Hand Bouquet',
                'flowerCategoriesImage' => 'https://onni.co.id/userdata/product/tomo-peach2227621272040862970.jpg'
            ],
            [
                'flowerCategoriesName' => 'Dried Flowers Bouquet',
                'flowerCategoriesImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/1/31/50277487/50277487_60693dd8-ccf1-404a-aaac-5ba622f155c9_1080_1080'
            ],
            [
                'flowerCategoriesName' => 'Flower Box',
                'flowerCategoriesImage' => 'https://i1.fnp.com/images/pr/l/v20190506175857/the-dainty-floral-box-arrangement_1.jpg'
            ],
            [
                'flowerCategoriesName' => 'Balloon Flower Box',
                'flowerCategoriesImage' => 'https://cdn.shopify.com/s/files/1/0781/4423/products/bloomthis-balloon-ellen-1080x1080-01_800x.jpg?v=1604136275'
            ],
            [
                'flowerCategoriesName' => 'Doll Bouquet',
                'flowerCategoriesImage' => 'https://cf.shopee.co.id/file/4eeb1c7eea89a731df04ecaaa8e21592'
            ],
            [
                'flowerCategoriesName' => 'Chocolate Bouquet',
                'flowerCategoriesImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/12/6/158469/158469_3e988823-b107-40bf-bfe9-448b517f0190_1079_1079.jpg'
            ]
        ]);
    }
}
