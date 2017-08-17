<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

    /**
     * Run the Products table seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name'          => 'Batman T-Shirt',
                'slug'          => 'playera-1',
                'description'   => 'Batman logo shirt, save the city with this cool and original shirt.',
                'extract'       => 'Available in all sizes.',
                'price'         => 275.00,
                'image'         => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'SuperMan T-Shirt',
                'slug'          => 'playera-2',
                'description'   => 'SuperMan Logo shirt, you will feel stronger with this shirt for sure.',
                'extract'       => 'Available in all sizes.'
                'price'         => 255.00,
                'image'         => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Bruce Lee Shirt',
                'slug'          => 'playera-3',
                'description'   => 'Feel like Bruce Lee with this shirt, be fast, be strong.',
                'extract'       => 'Available in all sizes.'
                'price'         => 300.00,
                'image'         => 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Grey T-Shirt',
                'slug'          => 'playera-4',
                'description'   => 'This is a very special shirt even if it looks simple, it is really comfortable and fresh.',
                'extract'       => 'Available sizes: M, S, X.',
                'price'         => 475.00,
                'image'         => 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Lit Grey T-Shirt',
                'slug'          => 'playera-5',
                'description'   => 'Very cool shirt to enjoy your day and feel fresh.',
                'extract'       => 'Available in all sizes.',
                'price'         => 280.00,
                'image'         => 'http://pngimg.com/uploads/tshirt/tshirt_PNG5448.png',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'White T-Shirt',
                'slug'          => 'playera-6',
                'description'   => 'Feel the cotton giving you a hug, love this shirt because it loves you, try it..',
                'extract'       => 'Available in all sizes.',
                'price'         => 275.00,
                'image'         => 'http://pngimg.com/uploads/polo_shirt/polo_shirt_PNG8166.png',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Red T-Shirt',
                'slug'          => 'playera-7',
                'description'   => 'This is an original red shirt, nothing special.',
                'extract'       => 'Available in all sizes.',
                'price'         => 275.00,
                'image'         => 'http://pngimg.com/uploads/tshirt/tshirt_PNG5449.png',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Green Ah! T-Shirt',
                'slug'          => 'playera-8',
                'description'   => 'Enjoy this shirt, the elemnt of surprise, it will actually surprise you.',
                'extract'       => 'Available in all sizes.',
                'price'         => 275.00,
                'image'         => 'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            
        );

        Product::insert($data);

    }

}