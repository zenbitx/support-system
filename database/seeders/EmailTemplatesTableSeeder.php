<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('email_templates')->delete();
        
        DB::table('email_templates')->insert(array (
            0 => 
            array (
                'k_word' => 'AFP',
                'grp' => 'Admin',
                'title' => 'Admin or Staff  Forget Password',
                'status' => 'A',
                'subject' => '[{{site_name}}] Password Recovery',
                'content' => '<p>Hi {{user_name}},<br><br>We receive a request to reset your password. To do so, <br>Please click the button below:<br><br>{{recover_button}}<br><br>If you did not request a password reset, please ignore this email<br>or reply to let us know. <br><br>Thanks<br>{{site_name}}<br><br><br></p>',
            ),
            1 => 
            array (
                'k_word' => 'AWE',
                'grp' => 'Admin',
                'title' => 'Admin or Staff  Welcome message-New User',
                'status' => 'A',
                'subject' => 'Welcome to [{{site_name}}]',
                'content' => '<h1>Welcome to {{site_name}},</h1><h3>Dear {{full_name}},</h3><p>Your Login information are given bellow:</p><p>{{login_info}}<br></p><p>Thanks<br>{{site_name}}<br></p><p><br></p>',
            ),
            2 => 
            array (
                'k_word' => 'APC',
                'grp' => 'Admin',
                'title' => 'Admin Password Changed Successfully',
                'status' => 'A',
                'subject' => '[{{site_name}}] Password Changed Successfully',
                'content' => '<p>Hi {{user_name}},<br><br>Your password has been change successfully<br><br>If you did not change the password,&nbsp; please contact with {{site_name}} admin as early as possible<br><br>Thanks<br>{{site_name}}<br><br><br></p>',
            ),
            3 => 
            array (
                'k_word' => 'UOT',
                'grp' => 'Ticket',
                'title' => 'Ticket Open By User',
                'status' => 'A',
                'subject' => '[{{site_name}}]Ticket opend # {{ticket_track_id}}',
                'content' => '<p>Dear {{ticket_user}},<br><br>Thanks for creating a ticket on {{site_name}}<br>Your ticket track id :<b> {{ticket_track_id}}</b><b><br></b>Your ticket link :<b> {{ticket_link}}</b><b><br></b><b><br></b></p><p><b>Ticket Title: </b>{{ticket_title}}<br><b>Ticket Body :<br></b>----------------Start---------------------<b><br></b></p><p>{{ticket_body}}<br>----------------End-----------------------</p><p>We\'ll be in touch shortly.<br></p><p><br>Thanks,<br>{{site_name}}<br></p><p><br></p>',
            ),
            4 => 
            array (
                'k_word' => 'GOT',
                'grp' => 'Ticket',
                'title' => 'Ticket Open By Guest',
                'status' => 'A',
                'subject' => '[{{site_name}}] Guest Ticket opend # {{ticket_track_id}}',
                'content' => '<p>Dear [Guest User]<br><br>Thanks for creating a ticket on {{site_name}}<br>Your ticket track id :<b> {{ticket_track_id}}<br></b>Your ticket link :<b> {{ticket_link}}</b><b><br></b></p><p><b>Ticket Title: </b>{{ticket_title}}<br><b>Ticket Body :<br></b></p><p>{{ticket_body}}</p><p><br></p>We\'ll be in touch shortly.<p><br>Thanks,</p><p>{{site_name}}<br></p>',
            ),
            5 => 
            array (
                'k_word' => 'UWE',
                'grp' => 'Site',
                'title' => 'Site User Welcome Email after opening account',
                'status' => 'A',
                'subject' => 'Welcome to [{{site_name}}]',
                'content' => '<h1>Welcome to {{site_name}},</h1><h3>Dear {{full_name}},</h3><p>Your Login information are given bellow:</p><p>{{login_info}}<br></p><p>Thanks<br>{{site_name}}<br></p><p><br></p>',
            ),
            6 => 
            array (
                'k_word' => 'TRO',
                'grp' => 'Ticket',
                'title' => 'Ticket Reopen',
                'status' => 'A',
                'subject' => '[{{site_name}}]  Ticket Re-Opened # {{ticket_track_id}}',
                'content' => '<p>Dear&nbsp; {{ticket_user}},<br>Your ticket has been re-opened.<br></p><p>Ticket details are given bellow:<br><b>Ticket Title: </b>{{ticket_title}}<br><b>Your ticket track id :</b> {{ticket_track_id}}<b><br>Your ticket link :</b> {{ticket_link}}</p><p><b><br></b>Thanks,<br>{{site_name}}<br></p>',
            ),
            7 => 
            array (
                'k_word' => 'UFP',
                'grp' => 'Site',
                'title' => 'Site User Forget Password',
                'status' => 'A',
                'subject' => '[{{site_name}}] Password Recovery',
                'content' => 'Hi {{user_name}},<br><br>We receive a request to reset your password. To do so, <br>Please click the button below:<br><br>{{recover_button}}<br><br>If you did not request a password reset, please ignore this email<br>or reply to let us know. <br><br>Thanks<br>{{site_name}}<br><br>',
            ),
            8 => 
            array (
                'k_word' => 'UPC',
                'grp' => 'Site',
                'title' => 'Site User Password Changed Successfully',
                'status' => 'A',
                'subject' => '[{{site_name}}] Password Changed Successfully',
                'content' => '<p>Hi {{user_name}},<br><br>Your password has been change successfully<br><br>If you did not change the password , please contact with {{site_name}} admin as early as possible<br><br>Thanks<br>{{site_name}}<br><br><br></p>',
            ),
            9 => 
            array (
                'k_word' => 'TRR',
                'grp' => 'Ticket',
                'title' => 'Ticket Reply Received',
                'status' => 'A',
                'subject' => '[{{site_name}}] Ticket Replied # {{ticket_track_id}}',
            'content' => '<p>Dear {{ticket_user}},<br>Our staff ( {{ticket_replied_user}} ) has replied on your ticket. Ticket details are given bellow:</p><p><b>Ticket Title: </b>{{ticket_title}}<br><b>Your ticket track id :</b> {{ticket_track_id}}<b><br>Your ticket link :</b> {{ticket_link}}<b><br></b></p><p>Thanks,<br>{{site_name}}</p>',
            ),
            10 => 
            array (
                'k_word' => 'TCL',
                'grp' => 'Ticket',
                'title' => 'Ticket Closed or Feedback email',
                'status' => 'A',
                'subject' => '[{{site_name}}]  Ticket has been closed # {{ticket_track_id}}',
                'content' => '<p>Dear {{ticket_user}},<br>Your ticket has been closed .Ticket details are given bellow:</p><p><b>Ticket Title: </b>{{ticket_title}}<br><b>Your ticket track id :</b> {{ticket_track_id}}<b><br>Your ticket link :</b> {{ticket_link}}</p><p>{{ticket_feedback_button}}<b><br></b></p><p><b><br></b>Thanks,<br>{{site_name}}<br></p>',
            ),
            11 => 
            array (
                'k_word' => 'ANT',
                'grp' => 'Admin',
                'title' => 'Admin new ticket notification email',
                'status' => 'A',
                'subject' => '[{{site_name}}] New ticket received# {{ticket_track_id}}',
                'content' => '<h5>Dear Admin,</h5><h5>New ticket has been received. Ticket information is given below:<br></h5><p>Ticket User&nbsp; :&nbsp; <b>{{ticket_user}}</b><br>Ticket track id&nbsp; :<b>&nbsp; {{ticket_track_id}}</b><b><br></b>Ticket title :<b>&nbsp; </b><b>{{ticket_title}}<br></b>Ticket link&nbsp; :<b>&nbsp; {{ticket_link}}</b><b><br></b></p><p><b><br></b></p><p><span style="font-size: 14px;">Thanks</span><b><br></b><span style="font-size: 14px;">{{site_name}}</span><b><br></b></p><p><br></p>',
            ),
            12 => 
            array (
                'k_word' => 'ANR',
                'grp' => 'Admin',
                'title' => 'Admin new ticket reply notification email',
                'status' => 'A',
                'subject' => '[{{site_name}}] New ticket reply received # {{ticket_track_id}}',
                'content' => '<h5>Dear Admin,</h5><h5>New ticket reply has been received. Ticket information is given below:<br></h5><p>Ticket User&nbsp; :&nbsp; <b>{{ticket_user}}<br></b>Replied User&nbsp; :&nbsp; <b>{{ticket_replied_user}}</b><br>Ticket track id&nbsp; :<b>&nbsp; {{ticket_track_id}}</b><b><br></b>Ticket title :<b>&nbsp; </b><b>{{ticket_title}}<br></b>Ticket link&nbsp; :<b>&nbsp; {{ticket_link}}<br><br>Reply Text<br>-------------------------------------<br></b>{{replied_text}}<br>---------------------------------------<br><span style="font-size: 14px;">Thanks</span><b><br></b><span style="font-size: 14px;">{{site_name}}</span><b><br></b></p><p><br></p>',
            ),
            13 => 
            array (
                'k_word' => 'TAC',
                'grp' => 'Ticket',
                'title' => 'Ticket Auto Closing message',
                'status' => 'A',
                'subject' => '[{{site_name}}]  Ticket has been auto closed # {{ticket_track_id}}',
                'content' => '<p>Dear {{ticket_user}},</p><p>{{ticket_closing_msg}}<br></p><p>If the issue is still exist then you can reopen the ticket anytime. </p><p>The ticket information are  given bellow:<br></p><p><b>Ticket Title: </b>{{ticket_title}}<br><b>Your ticket track id :</b> {{ticket_track_id}}<b><br>Your ticket link :</b> {{ticket_link}}</p><p><b><br></b></p><p><b><br></b>Thanks,<br>{{site_name}}<br></p>',
            ),
            14 => 
            array (
                'k_word' => 'AAT',
                'grp' => 'Admin',
                'title' => 'Admin Ticket Assign notification email',
                'status' => 'A',
                'subject' => '[{{site_name}}] New ticket has been assigned to you # {{ticket_track_id}}',
                'content' => '<h5>Dear {{ticket_assigned_user}},</h5><h5>New ticket has been assigned to you. Ticket information is given below:<br></h5><p>Ticket User&nbsp; :&nbsp; <b>{{ticket_user}}</b><br>Ticket track id&nbsp; :<b>&nbsp; {{ticket_track_id}}</b><b><br></b>Ticket title :<b>&nbsp; </b><b>{{ticket_title}}<br></b>Ticket link&nbsp; :<b>&nbsp; {{ticket_link}}</b><b><br></b></p><p><b><br></b></p><p><span style="font-size: 14px;">Thanks</span><b><br></b><span style="font-size: 14px;">{{site_name}}</span><b><br></b></p><p><br></p>',
            ),
        ));
        
        
    }
}