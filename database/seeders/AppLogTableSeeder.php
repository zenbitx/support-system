<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('app_log')->delete();
        
        DB::table('app_log')->insert(array (
            0 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html?_ru=http%3A%2F%2Fsupport-system.test%2Fadmin.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 05:57:32',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            1 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:25:34',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            2 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html?_ru=http%3A%2F%2Fsupport-system.test%2Fadmin%2Fdashboard.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:31:15',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            3 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:34:51',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            4 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:40:56',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            5 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:41:52',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            6 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:44:57',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            7 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:50:10',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
            8 => 
            array (
                'user_id' => 'admin',
                'user_type' => 'AD',
                'user_role' => 'R1',
                'changed_page' => 'http://support-system.test/admin/user/login.html',
                'changed_type' => 'A',
                'changed_value' => '',
                'msg_code' => 'l001',
                'msg_param' => 'Login',
                'ip' => '127.0.0.1',
                'date_time' => '2026-09-13 06:52:22',
                'tag' => '',
                'member_id' => '',
                'agent_id' => '',
            ),
        ));
        
        
    }
}