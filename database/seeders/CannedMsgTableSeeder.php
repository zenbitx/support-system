<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CannedMsgTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('canned_msg')->delete();
        
        DB::table('canned_msg')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => '',
                'title' => 'Thanks for patient',
                'canned_msg' => '<',
                'entry_date' => '2017-12-21 18:56:05',
                'added_by' => 'AA',
                'canned_type' => 'T',
                'status' => 'A',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => '',
                'title' => 'Test Reply',
                'canned_msg' => 'Its test reply',
                'entry_date' => '2017-12-21 19:14:18',
                'added_by' => 'AA',
                'canned_type' => 'T',
                'status' => 'A',
            ),
        ));
        
        
    }
}