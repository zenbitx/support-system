<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemMsgTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('system_msg')->delete();
        
        DB::table('system_msg')->insert(array (
            0 => 
            array (
                'id' => 11,
                'tag' => 'SERVER',
                'title' => 'This is title',
                'msg' => 'This Is test',
                'is_sup' => 'N',
                'added_on' => '2017-12-07 10:56:30',
                'added_by' => '',
                'msg_type' => 'W',
                'status' => 'D',
            ),
            1 => 
            array (
                'id' => 12,
                'tag' => 'SERVER',
                'title' => 'This is title',
                'msg' => 'This Is test',
                'is_sup' => 'N',
                'added_on' => '2017-12-07 10:58:05',
                'added_by' => '',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            2 => 
            array (
                'id' => 13,
                'tag' => 'SERVER',
                'title' => 'This is title',
                'msg' => 'This Is test',
                'is_sup' => 'O',
                'added_on' => '2017-12-07 11:00:45',
                'added_by' => '',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            3 => 
            array (
                'id' => 55,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:48:37',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            4 => 
            array (
                'id' => 32,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:47:38',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            5 => 
            array (
                'id' => 33,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 22:39:23',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            6 => 
            array (
                'id' => 34,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 22:44:21',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            7 => 
            array (
                'id' => 35,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:00:22',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            8 => 
            array (
                'id' => 36,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:26:26',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            9 => 
            array (
                'id' => 37,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:28:11',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            10 => 
            array (
                'id' => 38,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:30:01',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            11 => 
            array (
                'id' => 39,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:30:50',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            12 => 
            array (
                'id' => 40,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:32:06',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            13 => 
            array (
                'id' => 41,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:35:56',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            14 => 
            array (
                'id' => 42,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-08 23:36:43',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            15 => 
            array (
                'id' => 43,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-09 00:40:28',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            16 => 
            array (
                'id' => 49,
                'tag' => 'SSM7',
                'title' => 'New Feature Release',
                'msg' => 'Hosd kfjad fldkjfa ksdal ldkjf kjdlfjalsdjf ldjf jdfdsk fjdkjf ldjlf jsadf',
                'is_sup' => 'O',
                'added_on' => '2017-12-09 18:11:23',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            17 => 
            array (
                'id' => 47,
                'tag' => 'SSM8',
                'title' => 'New Feature Release',
                'msg' => 'this is a test Anal, thsiis si a adult. kjdsjflasd jlkum dslfjlsdfjldsf sd',
                'is_sup' => 'O',
                'added_on' => '2017-12-09 18:07:22',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            18 => 
            array (
                'id' => 51,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:38:25',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            19 => 
            array (
                'id' => 52,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:41:22',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            20 => 
            array (
                'id' => 53,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:44:23',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            21 => 
            array (
                'id' => 54,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:46:14',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            22 => 
            array (
                'id' => 56,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-10 09:48:49',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            23 => 
            array (
                'id' => 57,
                'tag' => 'UPDATE',
                'title' => 'App Update',
                'msg' => 'New app update available, version :1.2, Please update this app. <a href="http://192.168.10.71/Projects/support-system/admin/system-update.html" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> View Update Details</a>',
                'is_sup' => 'O',
                'added_on' => '2017-12-13 10:05:55',
                'added_by' => 'AA',
                'msg_type' => 'S',
                'status' => 'D',
            ),
            24 => 
            array (
                'id' => 58,
                'tag' => 'imapc',
                'title' => 'Cron Job',
            'msg' => 'Did you added this command (<b>wget --quiet -O /dev/null http://192.168.10.71/Projects/support-system/autoscript/cron/email-to-ticket.html</b>) into your server cron job list in a short interval?',
                'is_sup' => 'Y',
                'added_on' => '2017-12-13 21:08:16',
                'added_by' => 'AA',
                'msg_type' => 'W',
                'status' => 'D',
            ),
        ));
        
        
    }
}