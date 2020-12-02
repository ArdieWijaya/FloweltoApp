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
                'id' => 1,
                'flowerCategoriesName' => 'Hand Bouquet',
                'flowerCategoriesImage' => 'https://cdn.idntimes.com/content-images/community/2018/08/6a54ae54ed4e147630452465ffc047f2.jpg'
            ],
            [
                'id' => 2,
                'flowerCategoriesName' => 'Wedding Bouquet',
                'flowerCategoriesImage' => 'https://i.pinimg.com/originals/97/70/c1/9770c1d5347796222f4c615281ea43bc.jpg'
            ]
        ]);
    }
}
