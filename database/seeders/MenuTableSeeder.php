<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('menu')->delete();
        
        DB::table('menu')->insert(array (
            0 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'title' => 'Our App',
                'href_type' => 'L',
                'href' => 'http://appsbd.com',
                'text_icon' => 'fa-external-link',
                'view_counter' => 0,
                'is_new_window' => 'Y',
                'status' => 'I',
            ),
        ));
        
        
    }
}