<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Apple Watch Series 9',
                'slug' => 'apple-watch-series-9',
                'description' => 'The latest Apple Watch with advanced health tracking, ECG, and a brighter Always-On Retina display.',
                'price' => '125.00',
                'stock' => 100,
                'image' => 'product_images/Ln9slDAJOqSK3PNC9fKemvUXT6rawgS2gVjzPqYD.png',
                'category_id' => 2,
                'brand_id' => 3,
                'created_at' => '2025-04-17 19:16:12',
                'updated_at' => '2025-04-23 14:49:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Xbox Series X',
                'slug' => 'xbox-series-x',
                'description' => '4K gaming at 120fps with 1TB SSD storage.',
                'price' => '300.00',
                'stock' => 300,
                'image' => 'product_images/MV98Vp0TbA2QFOijpdD7OFi2VoJkEI1KdbrUacw4.png',
                'category_id' => 9,
                'brand_id' => 5,
                'created_at' => '2025-04-17 19:25:53',
                'updated_at' => '2025-04-23 15:02:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'GoPro HERO12 Black',
                'slug' => 'gopro-hero12-black',
                'description' => '5.3K action cam with HyperSmooth 6.0 stabilization.',
                'price' => '3000.00',
                'stock' => 200,
                'image' => 'product_images/k7uq0zaRKZjE2TxfmN4cknN2614SnJdDwN44BeO1.png',
                'category_id' => 7,
                'brand_id' => 6,
                'created_at' => '2025-04-17 19:26:55',
                'updated_at' => '2025-04-23 15:18:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ultimate Ears BOOM 3',
                'slug' => 'ultimate-ears-boom-3',
                'description' => '360° sound, waterproof, and customizable EQ via app.',
                'price' => '300.00',
                'stock' => 300,
                'image' => 'product_images/W8n7RMi1DAsfOmflgalqEW4WBNcjfZjT7Iw0ng2E.png',
                'category_id' => 3,
                'brand_id' => 4,
                'created_at' => '2025-04-17 19:28:21',
                'updated_at' => '2025-04-23 15:19:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sony SRS-XB43 Extra Bass Speaker',
                'slug' => 'sony-srs-xb43-extra-bass-speaker',
                'description' => 'Party-ready speaker with strobe lights and 24-hour playtime.',
                'price' => '2303.00',
                'stock' => 500,
                'image' => 'product_images/503J8DseL7n6e5GDLPoTGIEH15OIqd47Rx3qwhDf.png',
                'category_id' => 3,
                'brand_id' => 8,
                'created_at' => '2025-04-17 19:31:42',
                'updated_at' => '2025-04-23 15:19:48',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Canon EOS R6 Mark II',
                'slug' => 'canon-eos-r6-mark-ii',
                'description' => '24MP hybrid camera with 40fps burst shooting.',
                'price' => '4030.00',
                'stock' => 1000,
                'image' => 'product_images/U46hfEe6wZlYlW2I9UM7e0pGZKAPOS8ZPDBHHdTE.png',
                'category_id' => 5,
                'brand_id' => 9,
                'created_at' => '2025-04-17 19:38:46',
                'updated_at' => '2025-04-23 15:20:04',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'TP-Link Archer AX6000',
                'slug' => 'tp-link-archer-ax6000',
                'description' => 'Wi-Fi 6 router with 8 Gigabit ports for lag-free gaming.',
                'price' => '42.00',
                'stock' => 23,
                'image' => 'product_images/Glsm9FDSyhJucgUTFzSgIZc5zPtVSMAaHaNhZvG5.png',
                'category_id' => 4,
                'brand_id' => 6,
                'created_at' => '2025-04-17 19:41:04',
                'updated_at' => '2025-04-23 15:20:19',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Wireless Multiroom Speaker',
                'slug' => 'wireless-multiroom-speaker',
                'description' => 'Samsung’s ring radiator technology',
                'price' => '560.00',
                'stock' => 2222,
                'image' => 'product_images/y3eT3SdBBo1BQxMqAW2uVyn209XPRP4sYM3fzr9p.png',
                'category_id' => 2,
                'brand_id' => 7,
                'created_at' => '2025-04-17 19:42:48',
                'updated_at' => '2025-04-23 15:23:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '3d Glasses',
                'slug' => '3d-glasses',
                'description' => 'Best 3d Glasses',
                'price' => '4530.00',
                'stock' => 200,
                'image' => 'product_images/T0AZT7pMQqHou8OowZnzLzR9AlatLOUjStyj3ZSF.png',
                'category_id' => 10,
                'brand_id' => 2,
                'created_at' => '2025-04-17 19:46:51',
                'updated_at' => '2025-04-23 15:21:10',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'PlayStation 5 Slim',
                'slug' => 'playstation-5-slim',
                'description' => 'Ultra-fast SSD and immersive 3D audio.',
                'price' => '70.00',
                'stock' => 1000,
                'image' => 'product_images/A3zhpH2svzzkynppoUhoFNQvEbFwAsvXk5V5JKnZ.png',
                'category_id' => 9,
                'brand_id' => 10,
                'created_at' => '2025-04-17 19:48:05',
                'updated_at' => '2025-04-23 15:21:31',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'NVIDIA Shield TV Pro',
                'slug' => 'nvidia-shield-tv-pro',
                'description' => '4K streaming and cloud gaming with AI upscaling.',
                'price' => '99.00',
                'stock' => 122,
                'image' => 'product_images/yxSz1RgW0y8xO2JeFAQjINWA69Td1YvmfBx6jEez.png',
                'category_id' => 9,
                'brand_id' => 5,
                'created_at' => '2025-04-17 19:49:33',
                'updated_at' => '2025-04-23 15:22:14',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'JBL Flip 6 Portable Speaker',
                'slug' => 'jbl-flip-6-portable-speaker',
                'description' => 'Waterproof Bluetooth speaker with deep bass and 12-hour battery.',
                'price' => '230.00',
                'stock' => 1212,
                'image' => 'product_images/DgWzDVPMKPZVxqp1fGH3DWl7ut2JcdijWJDEDsCb.png',
                'category_id' => 3,
                'brand_id' => 7,
                'created_at' => '2025-04-17 19:50:44',
                'updated_at' => '2025-04-23 15:22:47',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Wireless Multiroom Speaker',
                'slug' => 'wireless-multiroom-speaker-2',
                'description' => 'Best Wireless',
                'price' => '453.00',
                'stock' => 1000,
                'image' => 'product_images/OYjtvOOOtNIJnoFwJexdcjedsGZP3q2hju0nr1Td.png',
                'category_id' => 3,
                'brand_id' => 3,
                'created_at' => '2025-04-17 19:52:23',
                'updated_at' => '2025-04-23 15:24:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}