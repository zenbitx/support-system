<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AppUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('app_user')->delete();
        
        DB::table('app_user')->insert(array (
            0 => 
            array (
                'pvid' => 'AA',
                'id' => 'AA',
                'user' => 'admin',
                'title' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'pass' => '9be9fb074cde0250341dea127d38334a',
                'role' => 'R1',
                'panel' => 'A',
                'status' => 'A',
                'add_date' => '2026-09-13 05:55:28',
                'contact_number' => '',
                'img_url' => '',
                'tzone' => 'Asia/Dhaka',
                'gender' => 'M',
                'address' => 'test',
                'region' => '',
                'city' => 'Dhaka',
                'zip' => '1217',
                'country' => 'BD',
                'dob' => '0000-00-00',
                'is_enable_chat' => 'Y',
            ),
        ));
        
        
    }
}