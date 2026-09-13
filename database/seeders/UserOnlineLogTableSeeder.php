<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserOnlineLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('user_online_log')->delete();
        
        DB::table('user_online_log')->insert(array (
            0 => 
            array (
                'user_id' => 'AA',
                'u_type' => 'A',
                'last_time' => '2026-09-13 08:06:22',
            ),
        ));
        
        
    }
}