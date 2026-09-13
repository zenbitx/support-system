<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopbarIconTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('topbar_icon')->delete();
        
        DB::table('topbar_icon')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '24/7 Support',
            'sub_title' => 'Call (347) XXX-XXXX',
                'icon_class' => 'fa-phone',
                'icon_order' => 1,
                'status' => 'Y',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Best Support',
                'sub_title' => 'We are always best',
                'icon_class' => 'fa-star-o',
                'icon_order' => 2,
                'status' => 'Y',
            ),
        ));
        
        
    }
}