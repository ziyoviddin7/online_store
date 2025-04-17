<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Smart Watches',
                'slug' => 'smart-watches',
                'created_at' => '2025-04-17 16:47:02',
                'updated_at' => '2025-04-17 16:47:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Portable Speaker',
                'slug' => 'portable-speaker',
                'created_at' => '2025-04-17 16:47:20',
                'updated_at' => '2025-04-17 16:47:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Routers',
                'slug' => 'routers',
                'created_at' => '2025-04-17 16:48:02',
                'updated_at' => '2025-04-17 16:48:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Digital cameras',
                'slug' => 'digital-cameras',
                'created_at' => '2025-04-17 16:48:36',
                'updated_at' => '2025-04-17 16:48:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Video Cameras',
                'slug' => 'video-cameras',
                'created_at' => '2025-04-17 16:49:01',
                'updated_at' => '2025-04-17 16:49:01',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Action Cameras',
                'slug' => 'action-cameras',
                'created_at' => '2025-04-17 16:49:16',
                'updated_at' => '2025-04-17 16:49:16',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Game Consoles',
                'slug' => 'game-consoles',
                'created_at' => '2025-04-17 16:49:56',
                'updated_at' => '2025-04-17 16:49:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'name' => '3d Glasses',
                'slug' => '3d-glasses',
                'created_at' => '2025-04-17 19:22:58',
                'updated_at' => '2025-04-17 19:22:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}