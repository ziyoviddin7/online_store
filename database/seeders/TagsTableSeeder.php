<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Bestseller',
                'slug' => 'bestseller',
                'created_at' => '2025-04-17 17:42:33',
                'updated_at' => '2025-04-17 17:42:33',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Featured',
                'slug' => 'featured',
                'created_at' => '2025-04-17 17:42:52',
                'updated_at' => '2025-04-17 17:42:52',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'On Sale',
                'slug' => 'on-sale',
                'created_at' => '2025-04-17 17:43:00',
                'updated_at' => '2025-04-17 17:43:00',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'New',
                'slug' => 'new',
                'created_at' => '2025-04-17 19:39:17',
                'updated_at' => '2025-04-17 19:39:17',
            ),
        ));
        
        
    }
}