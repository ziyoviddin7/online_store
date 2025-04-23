<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Microsoft',
                'slug' => 'microsoft',
                'created_at' => '2025-04-17 17:41:44',
                'updated_at' => '2025-04-17 17:41:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Apple',
                'slug' => 'apple',
                'created_at' => '2025-04-17 17:41:54',
                'updated_at' => '2025-04-17 17:41:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Google',
                'slug' => 'google',
                'created_at' => '2025-04-17 17:41:59',
                'updated_at' => '2025-04-17 17:41:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Nvidia',
                'slug' => 'nvidia',
                'created_at' => '2025-04-17 17:42:06',
                'updated_at' => '2025-04-17 17:42:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'created_at' => '2025-04-17 17:42:11',
                'updated_at' => '2025-04-17 17:42:11',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Samsung',
                'slug' => 'samsung',
                'created_at' => '2025-04-17 17:42:18',
                'updated_at' => '2025-04-17 17:42:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Sony',
                'slug' => 'sony',
                'created_at' => '2025-04-17 19:29:15',
                'updated_at' => '2025-04-17 19:29:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Canon',
                'slug' => 'canon',
                'created_at' => '2025-04-17 19:37:45',
                'updated_at' => '2025-04-17 19:37:45',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Playstation',
                'slug' => 'playstation',
                'created_at' => '2025-04-17 19:47:34',
                'updated_at' => '2025-04-17 19:47:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}