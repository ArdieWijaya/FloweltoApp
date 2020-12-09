<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'flowerName' => 'Hand Bouquet 1',
                'flowerPrice' => 1000000,
                'description' => 'This is Hand Bouquet number one.',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/0049/9718/5639/products/F2_1024x1024.jpg?v=1565588537',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Wedding Bouquet 1',
                'flowerPrice' => 2000000,
                'description' => 'This is Wedding Bouquet number one.',
                'flowerImage' => 'https://baliflowerdecor.com/wp-content/uploads/2019/04/vintage-wedding-bouquet-bali.jpg',
                'flower_category_id' => 2
            ],
            //Category 1 --> Hand Bouquet

            [
                'flowerName' => 'White Baby Breath',
                'flowerPrice' => 120000,
                'description' => 'This hand bouquet is made from fresh baby breath flowers, looking beautiful and elegant in white.',
                'flowerImage' => 'https://biorona.com/wp-content/uploads/2020/02/BR00023-1.jpeg',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Sunflower',
                'flowerPrice' => 100000,
                'description' => 'This sunflower hand bouquet is perfect to cheer up your loved ones. The cheerful colors of sunflower is the perfect choice to brighten up your day.',
                'flowerImage' => 'https://cdn.thefloristmarket.com/cdn/images/vendoritem/thefloristmarket-lilacflorist-28272-29562_1080x1080.jpg',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Petite Yellow Rose',
                'flowerPrice' => 85000,
                'description' => 'A petite yellow rose hand bouquet for the love of your life can never go wrong! Go get this beautiful bouquet for your special day!',
                'flowerImage' => 'https://onni.co.id/userdata/product/tomo-peach2227621272040862970.jpg',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Rustic Flowers',
                'flowerPrice' => 130000,
                'description' => 'Into old-fashioned style lately? Then this Rustic Flowers hand bouquet might fit you!',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/5/8/50018619/50018619_82d32336-c7af-417b-b541-eabfc1817e66_1054_1054',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'White Lily',
                'flowerPrice' => 90000,
                'description' => 'Have always been in love with Lillies? Or you just wanna go antimainstream? No need to look further anymore! This White Lily bouquet must suits you best!',
                'flowerImage' => 'https://bungapedia.com/wp-content/uploads/2018/03/Lily-Hand-Bouquet-06-65.png',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Chrysanthemum',
                'flowerPrice' => 130000,
                'description' => 'Known as the flower of happiness, love, longevity, and joy, Chrysanthemums are the unique way to show your unending love to your soulmate.',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/900/product-1/2019/5/22/65213636/65213636_0cbf44c6-0522-43ab-9ce2-9ceff8748437_700_700',
                'flower_category_id' => 1
            ],
                [
                'flowerName' => 'Blue Manhattan',
                'flowerPrice' => 200000,
                'description' => 'Blue Manhattan with a touch of rustic bouquet, the perfect choice for someone who loves blue with a touch of vintage style.',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/1869/4505/products/TravellingBasket-productimage-IMG_4495_800x.jpg?v=1590332468',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Blue Caspea',
                'flowerPrice' => 140000,
                'description' => 'This rustic Blue Caspea bouquet could be a choice for someone who loves blue and vintage styles.',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/9/2/44731884/44731884_95ff6c48-be2c-4b92-bd44-6857706b1d12_1032_1032',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Envelope Box',
                'flowerPrice' => 140000,
                'description' => 'Wanna give a unique gift of love yet still practical? You might wanna try giving this Evelope Flower Box! A unique, practical, and cute gift in a wrap.',
                'flowerImage' => 'https://images-na.ssl-images-amazon.com/images/I/61G%2BTEyW%2BbL._AC_SX466_.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Rounded Box Set',
                'flowerPrice' => 250000,
                'description' => 'A complete set of gift, but with rounded flower box.',
                'flowerImage' => 'https://www.dhresource.com/0x0/f2/albu/g10/M01/35/FF/rBVaVl3qxz6AE1y4AAJiPDpMj8I710.jpg/valentine-day-diy-soap-flower-elegant-gift.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Heart Box',
                'flowerPrice' => 140000,
                'description' => 'A flower box that comes with a heart-shaped box? You can never express your love clearer than this!',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/1428/2106/products/Sweet_Roses_with_Tulips_Flower_Box_1024x1024.png?v=1509367083',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Mini Flower Box',
                'flowerPrice' => 140000,
                'description' => 'Looking for a sweet, unique, yet portable gift for your significant other? This mini flower box might be the perfect choice for you!',
                'flowerImage' => 'https://www.flowerstudio.co.id/images/product/20190426101347_connie.450x450.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Regular Balloon Box',
                'flowerPrice' => 200000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://www.theaislemarket.com/wp-content/uploads/2020/07/Fly-Me-to-The-Moon-1.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Small Balloon Box',
                'flowerPrice' => 160000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://20degrees.com.my/image/20degrees/image/cache/data/all_product_images/product-354/hot%20air%20balloon%20pink-960x960.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Mini Balloon Box',
                'flowerPrice' => 140000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://iiflorist.com/wp-content/uploads/2019/09/Mini-Balloon-baby-breath-Flower-Box.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Large Balloon Box',
                'flowerPrice' => 220000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/0271/5533/3229/files/Screen_Shot_2019-12-02_at_00.24.54_370x230@2x.jpg?v=1575249016',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Choco Balloon Box 1',
                'flowerPrice' => 200000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://shop.thebgd.com/image/beautyballoon/image/data/all_product_images/product-5844/grand%20opening%20rose%20gold%203.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Choco Balloon Box 2',
                'flowerPrice' => 160000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://shop.thebgd.com/image/beautyballoon/image/cache/data/all_product_images/product-5738/giant%20hot%20air-800x800.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Mini Choco Balloon Box',
                'flowerPrice' => 140000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://cf.shopee.sg/file/1c172d81b0c06d7b30620437ea877447',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Snack Balloon Box',
                'flowerPrice' => 160000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://shop.thebgd.com/image/beautyballoon/image/cache/data/all_product_images/product-4832/HBD%20Kawei-800x800.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Doll Balloon Box',
                'flowerPrice' => 200000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://bearloonsg.com/wp-content/uploads/2019/03/10-2.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Customized Balloon Box',
                'flowerPrice' => 220000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://bearloonsg.com/wp-content/uploads/2019/10/1-min-1.jpg',
                'flower_category_id' => 4
            ]
        ]);
    }
}
