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
                'image' => 'product_images/CQyGMPU3jzTQbX8J2lAp2deE9MmmDCqb70tOw4QG.png',
                'category_id' => 2,
                'brand_id' => 3,
                'created_at' => '2025-04-17 19:16:12',
                'updated_at' => '2025-04-17 19:17:05',
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
                'image' => 'product_images/Nj7Hddlz0pONTRDzwAh7ALBnAGPB19nzB08BUlFt.png',
                'category_id' => 9,
                'brand_id' => 5,
                'created_at' => '2025-04-17 19:25:53',
                'updated_at' => '2025-04-17 19:25:53',
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
                'image' => 'product_images/16zVYvV0ksr88ER4hh3qJJHGOXjF4Dnr5hjfTO1d.png',
                'category_id' => 7,
                'brand_id' => 6,
                'created_at' => '2025-04-17 19:26:55',
                'updated_at' => '2025-04-17 19:26:55',
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
                'image' => 'product_images/FwiuIKptgCNglqZ2BxElBsSDal5YbcDKvOGs6gBw.png',
                'category_id' => 3,
                'brand_id' => 4,
                'created_at' => '2025-04-17 19:28:21',
                'updated_at' => '2025-04-17 19:32:46',
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
                'image' => 'product_images/NGYbR6bcHpuIqWXNsM2BnKOPMjkUmcdbt8NEDKih.png',
                'category_id' => 3,
                'brand_id' => 8,
                'created_at' => '2025-04-17 19:31:42',
                'updated_at' => '2025-04-17 19:31:57',
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
                'image' => 'product_images/zkBkydIBKVZgAQq6Gd2c2qEcYtVKMoj6IZmjHEzH.png',
                'category_id' => 5,
                'brand_id' => 9,
                'created_at' => '2025-04-17 19:38:46',
                'updated_at' => '2025-04-17 19:38:46',
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
                'image' => 'product_images/m0nujn32EBZXKPYmxLPCFc0oAIeeQ0w8zRAUZSDo.png',
                'category_id' => 4,
                'brand_id' => 6,
                'created_at' => '2025-04-17 19:41:04',
                'updated_at' => '2025-04-17 19:41:04',
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
                'image' => 'product_images/caPFSmGIfOugSX6d9Z5fhgI3QKbdNMSvbB1kjAj3.png',
                'category_id' => 2,
                'brand_id' => 7,
                'created_at' => '2025-04-17 19:42:48',
                'updated_at' => '2025-04-17 19:44:58',
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
                'image' => 'product_images/s1LOrRBUOqB0YjZn6EuMEXhGq6HP6a5Sskehx2mw.png',
                'category_id' => 10,
                'brand_id' => 2,
                'created_at' => '2025-04-17 19:46:51',
                'updated_at' => '2025-04-17 19:46:51',
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
                'image' => 'product_images/QOAhw0zaJjf9m84CIv5wGgJHODjwdcjgJ8kjjFQ1.png',
                'category_id' => 9,
                'brand_id' => 10,
                'created_at' => '2025-04-17 19:48:05',
                'updated_at' => '2025-04-17 19:48:05',
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
                'image' => 'product_images/Q1GnC0VYeXIdsOq1FlAjnc5vd9X7FYAvE66ITvhN.png',
                'category_id' => 9,
                'brand_id' => 5,
                'created_at' => '2025-04-17 19:49:33',
                'updated_at' => '2025-04-17 19:49:33',
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
                'image' => 'product_images/0pycMgN229WrkKyMr9WeOEybm50m2GrNLbXYglpy.png',
                'category_id' => 3,
                'brand_id' => 7,
                'created_at' => '2025-04-17 19:50:44',
                'updated_at' => '2025-04-17 19:50:44',
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
                'image' => 'product_images/TZ8oafTh1mUa1TXqhp4ywwkxGVKzBUAujp0YKiZb.png',
                'category_id' => 3,
                'brand_id' => 3,
                'created_at' => '2025-04-17 19:52:23',
                'updated_at' => '2025-04-17 19:52:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}