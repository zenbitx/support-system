<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('role_list')->delete();
        
        DB::table('role_list')->insert(array (
            0 => 
            array (
                'pv_id' => 'AA',
                'role_id' => 'R1',
                'title' => 'Super Admin',
                'display_as' => '',
                'grade' => '0',
            ),
            1 => 
            array (
                'pv_id' => 'AA',
                'role_id' => 'R3',
                'title' => 'Supervisor',
                'display_as' => '',
                'grade' => '5',
            ),
            2 => 
            array (
                'pv_id' => 'AA',
                'role_id' => 'R4',
                'title' => 'Agent',
                'display_as' => '',
                'grade' => '5',
            ),
        ));
        
        
    }
}