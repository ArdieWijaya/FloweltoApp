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
                'flowerName' => 'Pink Rose',
                'flowerPrice' => 120000,
                'description' => "Looking for something romantic? This pink rose hand bouquet is the perfect choice for you! Go get her a bouquet of this, you'll see how the magic of pink roses works.",
                'flowerImage' => 'https://ae01.alicdn.com/kf/HTB1XIYEaE_rK1Rjy0Fcq6zEvVXaR/Romantis-Ulang-Tahun-Pacar-Pacar-Rose-Sabun-Bunga-Hadiah-Sabun-Buket-Bunga-Kreatif-Terima-Kasih-Hari.jpg_q50.jpg',
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
                'flowerName' => 'Single Flower Hand Bouquet',
                'flowerPrice' => 70000,
                'description' => "Looking for a simple yet sweet and lovely gift? This single flower hand bouquet is the special gift you're looking for!",
                'flowerImage' => 'https://cf.shopee.co.id/file/d473f9a776d07ce8cf66d633766f8417',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Mixed Flowers (Regular)',
                'flowerPrice' => 120000,
                'description' => "Pick 2 flowers that suits you the most and we'll turn them into a beautifully made hand bouquet. Oops, not only beautiful, but also special!",
                'flowerImage' => 'https://stembystemflowers.co.uk/wp-content/uploads/2012/02/p-3218-lily-and-rose-hand-tied-bouquet.jpg',
                'flower_category_id' => 1
            ],
            [
                'flowerName' => 'Mixed Flowers (Large)',
                'flowerPrice' => 150000,
                'description' => 'This extraordinary hand bouquet is the most fantastic and romantic bouquet you can give to your loved ones. You can also pick 2-3 choices of flowers you want to include in the bouquet.',
                'flowerImage' => 'https://www.amadeusflorist.co.uk/Image.aspx?websiteid=46&filename=product/1867508580large.jpg&newheight=384&newWidth=384&ver=0&cache=1',
                'flower_category_id' => 1
            ],
            
            //Category 2 --> Dried Flowers Bouquet
            
            [
                'flowerName' => 'Corn Flower',
                'flowerPrice' => 130000,
                'description' => 'A dried flower bouquet made up of dried corn flowers.',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/2/21/38446492/38446492_68c60066-b53c-40e9-baa5-3f54dd6fff49_2048_2048',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Mixed Dried Flowers',
                'flowerPrice' => 150000,
                'description' => "Can't pick one of our dried flowers bouquet collection? You can mix them up according to your taste!",
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/3/11/38446492/38446492_898c8fb4-fbae-4f6f-8219-634732729c93_1080_1080',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Pampas Grass',
                'flowerPrice' => 140000,
                'description' => 'A dried flower bouquet made up of Pampas Grass, the perfect choice for you who wants a bouquet of antimainstream flowers.',
                'flowerImage' => 'https://i.pinimg.com/originals/08/f7/df/08f7dfbcb08810d794eeecc2cf178d1f.png',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Cotton Flowers',
                'flowerPrice' => 130000,
                'description' => 'This dried flower bouquet is made up of cotton flowers.',
                'flowerImage' => 'https://cf.shopee.co.id/file/0757aae57451686263d593588d6f2157',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Mixed Cotton Flowers',
                'flowerPrice' => 160000,
                'description' => "Bored with white cotton flowers? You can request some other colors or even mix them up with the other dried flowers as well! Brilliant, isn't it?",
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/11/12/1957238/1957238_fd3cb227-b686-4a64-b915-83adb2e882fb_640_640.jpg.webp',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Rustic Baby Edelweiss',
                'flowerPrice' => 140000,
                'description' => 'Been loving edelweiss since forever? This Rustic Baby Edelweiss bouquet must be your favorite bouquet of all time.',
                'flowerImage' => 'https://ecs7-p.tokopedia.net/img/cache/200-square/VqbcmM/2020/9/19/fd5e21bf-4e58-44e1-9650-cf29cf8307cc.jpg',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Rustic Rose Bouquet',
                'flowerPrice' => 135000,
                'description' => 'Feeling so done with ordinary roses? This Rustic Rose bouquet might be your savior!',
                'flowerImage' => 'https://m.media-amazon.com/images/I/614ph36cOvL.jpg',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Rustic Grass Bouquet',
                'flowerPrice' => 135000,
                'description' => 'Rustic Grass Bouquet, another option for you who are looking for a unique and antimainstream love expression.',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/0748/9875/products/Botanique-29.5.203846_800x.jpg?v=1591105023',
                'flower_category_id' => 2
            ],
            [
                'flowerName' => 'Mini Dried Flowers',
                'flowerPrice' => 80000,
                'description' => "Been loving petite and miniature since forever? C'mon add this mini dried flowers bouquet to your collection right away!",
                'flowerImage' => 'https://ecs7-p.tokopedia.net/img/cache/250-square/VqbcmM/2020/9/11/64f9a475-7cd5-4edf-bff8-a2aa7d7e9340.jpg',
                'flower_category_id' => 2
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
            
            //Category 3 --> Flower Box
            
            [
                'flowerName' => 'Envelope Box',
                'flowerPrice' => 140000,
                'description' => 'Wanna give a unique gift of love yet still practical? You might wanna try giving this Evelope Flower Box! A unique, practical, and cute gift in a wrap.',
                'flowerImage' => 'https://images-na.ssl-images-amazon.com/images/I/61G%2BTEyW%2BbL._AC_SX466_.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Cotton Flower Box',
                'flowerPrice' => 160000,
                'description' => "Not only offering a unique packaging, this Cotton Flower Box also offers a unique type of flower to express your love! Go get 'em right now!",
                'flowerImage' => 'https://flowers2gifts.com/wp-content/uploads/2020/08/M001_1-300x300.png',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Flower Box Set',
                'flowerPrice' => 250000,
                'description' => "Not satisfied with flowers 'only'? Keep calm! We've got you covered with this Flower Box Set! Pick your gifts, pick your flowers, and we'll get them ready for you!",
                'flowerImage' => 'https://ae01.alicdn.com/kf/Hc0cd890ed9f24f719689a43348fb06bbu.jpg_q50.jpg',
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
                'flowerName' => 'Letter-shaped',
                'flowerPrice' => 155000,
                'description' => "A lovely letter-shaped flower box, available for you whose name starts with A-Z. Just request the letter you want to our admin, and we'll get them ready for you!",
                'flowerImage' => 'https://www.clicknflowers.com/wp-content/uploads/2019/08/boite-a-fleurs-lettre-s2-700x700.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Rounded Bloom Box',
                'flowerPrice' => 180000,
                'description' => "Thinking flower box is still too ordinary? Chill, this rounded bloom box must've stolen your heart!",
                'flowerImage' => 'https://www.juneflowers.ae/pub/media/catalog/product/cache/cf3f2243ef4940fd5c66f2ff035145ac/e/l/elegant_flowers_in_a_box.jpg',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Mini Rounded Bloom Box',
                'flowerPrice' => 100000,
                'description' => 'A bloom box placed in a rounded box, in a petite and portable version.',
                'flowerImage' => 'https://cf.shopee.com.my/file/67fffa6954fe5e8c816b5f64c751b21c',
                'flower_category_id' => 3
            ],
            [
                'flowerName' => 'Mini Bloom Box',
                'flowerPrice' => 100000,
                'description' => 'A bloom box placed in a square box, in a petite and portable version.',
                'flowerImage' => 'https://www.enchantedfiore.com/uploads/3/6/5/0/3650399/s963966644253692923_p313_i45_w971.jpeg',
                'flower_category_id' => 3
            ],
            
            //Category 4 --> Balloon Flower Box
            
            [
                'flowerName' => 'Regular Balloon Box',
                'flowerPrice' => 200000,
                'description' => "Who doesn't love balloons? Get a more extraordinary bouquet for your loved one just by adding some balloons to your flowers!",
                'flowerImage' => 'https://www.theaislemarket.com/wp-content/uploads/2020/07/Fly-Me-to-The-Moon-1.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Small Balloon Box',
                'flowerPrice' => 160000,
                'description' => 'A portable and practical flower box for your loved ones, surely comes with some cute and colorful balloons!',
                'flowerImage' => 'https://20degrees.com.my/image/20degrees/image/cache/data/all_product_images/product-354/hot%20air%20balloon%20pink-960x960.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Mini Balloon Box',
                'flowerPrice' => 140000,
                'description' => 'Love something petite and cute? Get this mini balloon box right now to celebrate your special day!',
                'flowerImage' => 'https://iiflorist.com/wp-content/uploads/2019/09/Mini-Balloon-baby-breath-Flower-Box.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Large Balloon Box',
                'flowerPrice' => 220000,
                'description' => 'Who says large balloons are only for kids? This large balloon box comes not only with a huge flower box, but also with the huge balloons!',
                'flowerImage' => 'https://cdn.shopify.com/s/files/1/0271/5533/3229/files/Screen_Shot_2019-12-02_at_00.24.54_370x230@2x.jpg?v=1575249016',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Choco Balloon Box 1',
                'flowerPrice' => 200000,
                'description' => 'A chocolate bar a day keeps the bad mood away! Be even sweeter by giving your significant other not only flowers, but also tons of chocolate bar!',
                'flowerImage' => 'https://shop.thebgd.com/image/beautyballoon/image/data/all_product_images/product-5844/grand%20opening%20rose%20gold%203.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Choco Balloon Box 2',
                'flowerPrice' => 160000,
                'description' => "Not really into the other chocolate balloon box? Worry not, we've got you covered with another choco balloon box variant!",
                'flowerImage' => 'https://shop.thebgd.com/image/beautyballoon/image/cache/data/all_product_images/product-5738/giant%20hot%20air-800x800.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Mini Choco Balloon Box',
                'flowerPrice' => 140000,
                'description' => "Just a few treat of sweets won't hurt! Grab this mini choco balloon box to keep your good mood without feeling too much guilt!",
                'flowerImage' => 'https://cf.shopee.sg/file/1c172d81b0c06d7b30620437ea877447',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Snack Balloon Box',
                'flowerPrice' => 160000,
                'description' => "Loving snacks more than chocolate bars? We've got you covered too with this mixed snack balloon box! You might also request your preferred snacks to our admin.",
                'flowerImage' => 'https://lh3.googleusercontent.com/p/AF1QipOPqfifU-df_P1g5IJxDcFcZbb6OGty_uCtIeRq=s1280-p-no-v1',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Doll Balloon Box',
                'flowerPrice' => 200000,
                'description' => "A balloon box that comes with cute dolls for those who wants to give a gift that can last forever. Check the dolls' availability through our admin.",
                'flowerImage' => 'https://bearloonsg.com/wp-content/uploads/2019/03/10-2.jpg',
                'flower_category_id' => 4
            ],
            [
                'flowerName' => 'Customized Balloon Box',
                'flowerPrice' => 220000,
                'description' => 'Wanting to give something unique like no other in the world? You can customize your desired balloon box by requesting it to our admin!',
                'flowerImage' => 'https://bearloonsg.com/wp-content/uploads/2019/10/1-min-1.jpg',
                'flower_category_id' => 4
            ],
            
            //Category 5 --> Doll Bouquet
            
            [
                'flowerName' => 'Regular Doll Bouquet',
                'flowerPrice' => 280000,
                'description' => 'A regular-sized bouquet that comes with additional doll(s) that can be customized according to your order. Pick your desired flowers and match it with our lovely doll collections.',
                'flowerImage' => 'https://img.alicdn.com/imgextra/i3/2445977191/TB2.P1ul8fH8KJjy1XbXXbLdXXa_!!2445977191.jpg',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Mini Doll Bouquet 1',
                'flowerPrice' => 200000,
                'description' => 'A bouquet that also comes with additional doll(s), just in a more petite size for you to carry anywhere you want.',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/10/29/4124941/4124941_2ba185db-ea87-4387-90ee-b931bfec1a4e_1080_1080.jpg',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Mini Doll Bouquet 2',
                'flowerPrice' => 220000,
                'description' => 'Another option of mini doll bouquet, giving you other variants to celebrate your special day.',
                'flowerImage' => 'https://images-na.ssl-images-amazon.com/images/I/61lwy-Ih70L._AC_SL1000_.jpg',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Single Doll Bouquet',
                'flowerPrice' => 250000,
                'description' => 'akdjfa',
                'flowerImage' => 'https://img.floweradvisor.com/p/bouquet-of-20-pink-roses-with-babyas-with-fa17423',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Graduation Doll Bouquet',
                'flowerPrice' => 250000,
                'description' => 'Celebrating graduation? Our dolls are ready to congraduate you too! Get this graduation doll bouquet right now to add more fun to your celebration!',
                'flowerImage' => 'https://cf.shopee.co.id/file/1eb5d0fb4cb2fba86da05fcbe43fafb4',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Choco Doll Bouquet',
                'flowerPrice' => 250000,
                'description' => "A bouquet that's not made up only of flowers, but also chocolate and doll! What could be more romantic than the 3 most universal love statements combined in 1 package?",
                'flowerImage' => 'https://cf.shopee.co.id/file/9698f97ab9b4c5c11d50d157eb6fdd6f',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Snack Doll Bouquet',
                'flowerPrice' => 250000,
                'description' => 'This bouquet is the most suitable one for those who loves snacking 24/7! Who says chocolate is the only food that can express your love?',
                'flowerImage' => 'https://cf.shopee.co.id/file/157b7d0c14512d4939d514967d92e72d',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Flanel Doll Bouquet',
                'flowerPrice' => 200000,
                'description' => 'Another longlasting gift for you to keep forever, a flannel doll bouquet to mark your special day.',
                'flowerImage' => 'https://cf.shopee.co.id/file/76de4ba1409aef9c99cb97237a9c82cb',
                'flower_category_id' => 5
            ],
            [
                'flowerName' => 'Doll Flower Box',
                'flowerPrice' => 220000,
                'description' => "Not the sweet tooth kind of person? That's totally fine! You can replace the sweet treats with flowers and doll only! Nice idea, right?",
                'flowerImage' => 'https://onemarketindo.com/wp-content/uploads/2018/09/F002D.jpg',
                'flower_category_id' => 5
            ],
            
            //Category 6 --> Snack Bouquet
            
            [
                'flowerName' => 'Mini Snack Bouquet',
                'flowerPrice' => 150000,
                'description' => "A little snack won't hurt, isn't it? And to make it even more acceptable, we present it with a bouquet wrap!",
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/attachment/2019/12/15/157641338710762/157641338710762_59f53808-3d84-4373-9a6c-56b773e4d05e.png',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Jumbo Snack Bouquet',
                'flowerPrice' => 280000,
                'description' => "This bouquet is only suitable for those whose life motto is 'Snack is love, Snack is life'. Is it yours? If yes, then grab this Jumbo Snack Bouquet right now!",
                'flowerImage' => 'https://cdn1.npcdn.net/images/155655489600794fb13ef4cebac5067732465f5e05.jpeg?md5id=eb32c69f88aa347dcb335d47f0c075e7&new_width=800&new_height=800&size=max&1466647023',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Brown Snack Bouquet',
                'flowerPrice' => 220000,
                'description' => 'A not-so-chocolatey snack bouquet for everyone who has a love-hate relationship with chocolate.',
                'flowerImage' => 'https://i.pinimg.com/originals/79/f6/2f/79f62feabe884f17760aa3ee89c72df3.jpg',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Red & Black Bouquet',
                'flowerPrice' => 180000,
                'description' => 'An elegant-looking red bouquet with the accent of black, and definitely edible!',
                'flowerImage' => 'https://cf.shopee.co.id/file/9893852b13178a0b9a69f62dff66400c',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Green Snack Bouquet',
                'flowerPrice' => 180000,
                'description' => 'A bouquet full of greens. Nope, not grass, but snacks instead!',
                'flowerImage' => 'https://cf.shopee.co.id/file/3ccadd7668e033b72cedd338c02c72fd',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Pink Snack Bouquet',
                'flowerPrice' => 200000,
                'description' => 'Pink is not always about flowers or ribbons or balloons, but it could be also about snacks! Love pink and love snack? Why not grab this Pink Snack Bouquet immediately?',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/9/23/1172324/1172324_356a671d-8006-40bc-bcdc-753a7e3cb8e6_1560_1560.jpg',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Blue Snack Bouquet',
                'flowerPrice' => 200000,
                'description' => "Blue can never go wrong, isn't it? This Blue Snack Bouquet is perfect to accompany your special day by the blue sea!",
                'flowerImage' => 'https://cf.shopee.co.id/file/cc118bfa029ad7c2f3a64570ecedd30a',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Yellow Snack Bouquet',
                'flowerPrice' => 220000,
                'description' => 'Grab this bright-colored snack bouquet to brighten up your special day!',
                'flowerImage' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/2/24/5102146/5102146_5fdb76b9-7ffc-41f1-bae3-eadb2e7aa22c_1728_1728.jpg',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Yupi Bouquet',
                'flowerPrice' => 150000,
                'description' => 'A modern, unique, and aesthetic bouquet for you to throwback to your childhood memories. Yupi is the perfect choice for anyone, anytime, anywhere!',
                'flowerImage' => 'https://s1.bukalapak.com/img/62963586202/large/1e46e3c2039f0b73a584fe18e2b8ba465_unik_buket_snack_permen_mi.png',
                'flower_category_id' => 6
            ],
            [
                'flowerName' => 'Pocky Bouquet',
                'flowerPrice' => 120000,
                'description' => 'Been loving this stick-shaped snack since forever? Then this bouquet must be the love of your life! Feel free to request any Pocky flavor by contacting our admins.',
                'flowerImage' => 'https://cf.shopee.co.id/file/2ef30143493cc1b7c8ea2acd9e3cd070',
                'flower_category_id' => 6
            ]
        ]);
    }
}
