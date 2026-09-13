<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomPageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('custom_page')->delete();
        
        DB::table('custom_page')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slag_title' => 'privacy-terms-condition-conditions',
                'title' => 'Privacy & terms condition conditions',
            'page_body' => 'Update your privacy policy in Page menu ( Admin Settings> Pages> select Page Edit)',
                'added_on' => '2018-09-19 23:27:34',
                'status' => 'A',
            ),
        ));
        
        
    }
}