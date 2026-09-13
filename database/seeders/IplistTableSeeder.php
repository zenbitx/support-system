<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IplistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('iplist')->delete();
        
        DB::table('iplist')->insert(array (
            0 => 
            array (
                'ip' => '127.0.0.1',
                'added_on' => '2026-09-13 05:57:21',
                'start_count_time' => '2026-09-13 08:06:22',
                'req_counter' => '2',
                'entry_type' => 'A',
                'country_code' => '',
                'status' => 'N',
                'h_at_count' => '0',
            ),
        ));
        
        
    }
}