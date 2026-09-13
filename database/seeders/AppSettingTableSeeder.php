<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('app_setting')->delete();
        
        DB::table('app_setting')->insert(array (
            0 => 
            array (
                's_key' => 'app_email',
                's_title' => 'App Email',
                's_val' => 'admin@gmail.com',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            1 => 
            array (
                's_key' => 'app_title',
                's_title' => 'App Title',
                's_val' => 'Pixizen Support',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            2 => 
            array (
                's_key' => 'app_theme',
                's_title' => 'APP Theme',
                's_val' => 'bss2020',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            3 => 
            array (
                's_key' => 'app_hmp',
                's_title' => 'APP Homepage',
                's_val' => '1',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            4 => 
            array (
                's_key' => 'isonly_logo',
                's_title' => 'Show Only Logo',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            5 => 
            array (
                's_key' => 'app_date_format',
                's_title' => 'Date Format',
                's_val' => 'M d, Y',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            6 => 
            array (
                's_key' => 'app_time_format',
                's_title' => 'Time Format',
                's_val' => 'H:i',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            7 => 
            array (
                's_key' => 'regi_enable',
                's_title' => 'Registration',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            8 => 
            array (
                's_key' => 'app_captcha',
                's_title' => 'Captcha Settings',
                's_val' => 'D',
                's_type' => 'R',
                's_option' => 'eyJEIjoiRGVmYXVsdCIsIkciOiJHb29nbGUgUmUtY2FwdGNoYSJ9',
                's_auto_load' => 'Y',
            ),
            9 => 
            array (
                's_key' => 'ap_dc_length',
                's_title' => 'Captcha length',
                's_val' => '6',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            10 => 
            array (
                's_key' => 'ap_dc_str_type',
                's_title' => 'Captcha String Type',
                's_val' => 'AN',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            11 => 
            array (
                's_key' => 'app_gc_secret',
                's_title' => 'Re-Captcha Secret Key',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            12 => 
            array (
                's_key' => 'app_gc_site_key',
                's_title' => 'Re-Captcha Site Key',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            13 => 
            array (
                's_key' => 'app_main_color',
                's_title' => 'Main Color',
                's_val' => '#0B8EC2',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            14 => 
            array (
                's_key' => 'app_text_color',
                's_title' => 'Link and Heading Color',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            15 => 
            array (
                's_key' => 'app_welcome_bg',
                's_title' => 'Welcome Background',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            16 => 
            array (
                's_key' => 'app_welcome_text',
                's_title' => 'Welcome Text',
                's_val' => '#ffffff',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            17 => 
            array (
                's_key' => 'app_header_bg',
                's_title' => 'Header background Color',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            18 => 
            array (
                's_key' => 'app_c_auto',
                's_title' => 'Auto Others Color',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            19 => 
            array (
                's_key' => 'app_navbar_bg',
                's_title' => 'Menu Background',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            20 => 
            array (
                's_key' => 'app_nav_acive_text',
                's_title' => 'Menu Active Text color',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            21 => 
            array (
                's_key' => 'footer_bg_color',
                's_title' => 'Footer Background',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            22 => 
            array (
                's_key' => 'footer_text_color',
                's_title' => 'Footer Text Color',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            23 => 
            array (
                's_key' => 'app_header_isg',
                's_title' => 'Header Gradient',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            24 => 
            array (
                's_key' => 'is_cptcha_client_login',
                's_title' => 'Client Captcha Login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            25 => 
            array (
                's_key' => 'is_cptcha_guest_ticket',
                's_title' => 'On Guest Ticket',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            26 => 
            array (
                's_key' => 'is_cptcha_client_regi',
                's_title' => 'Client Registration Captcha',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            27 => 
            array (
                's_key' => 'is_cptcha_admin_login',
                's_title' => 'Admin Login Captcha',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => 'eyJZIjoiWWVzIiwiTiI6Ik5vIn0=',
                's_auto_load' => 'Y',
            ),
            28 => 
            array (
                's_key' => 'max_file_upload_size',
                's_title' => 'Max Upload File Size',
                's_val' => '2',
                's_type' => 'N',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            29 => 
            array (
                's_key' => 'allowed_file_type',
                's_title' => 'Allowed file type',
                's_val' => 'jpg|png|zip',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            30 => 
            array (
                's_key' => 'allow_profile_upload',
                's_title' => 'Profile Upload',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            31 => 
            array (
                's_key' => 'allow_ticket_file_upload',
                's_title' => 'Allow Ticket File Upload',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            32 => 
            array (
                's_key' => 'is_guest_ticket',
                's_title' => 'Enable Guest Ticket',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            33 => 
            array (
                's_key' => 'is_public_ticket',
                's_title' => 'Enable Guest Ticket',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            34 => 
            array (
                's_key' => 'ticket_htmleditor',
                's_title' => 'Ticket HTML Editor',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            35 => 
            array (
                's_key' => 'app_html_editor',
                's_title' => 'Choose HTML Editor',
                's_val' => 'S',
                's_type' => 'R',
                's_option' => 'eyJTIjoiU3VtbWVybm90ZSIsIkMiOiJDSyBFZGl0b3IifQ==',
                's_auto_load' => 'Y',
            ),
            36 => 
            array (
                's_key' => 'app_layout',
                's_title' => 'Application Layout',
                's_val' => 'B',
                's_type' => 'R',
                's_option' => 'eyJGIjoiRnVsbCBXaWR0aCIsIkIiOiJCb3ggU2l6ZSJ9',
                's_auto_load' => 'Y',
            ),
            37 => 
            array (
                's_key' => 'is_check_online',
                's_title' => 'User Online Status Check',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            38 => 
            array (
                's_key' => 'ticket_email_str',
                's_title' => 'Ticket Email String',
                's_val' => '##Ticket ID:',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            39 => 
            array (
                's_key' => 'ticket_email_rp_str',
                's_title' => 'Ticket Email Reply Line',
                's_val' => '##- Please type your reply above this line -##',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            40 => 
            array (
                's_key' => 'any_can_assign',
                's_title' => 'Is any staff can reply',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            41 => 
            array (
                's_key' => 'is_imap_ticket',
                's_title' => 'Email to Ticket',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            42 => 
            array (
                's_key' => 'imap_host',
                's_title' => 'IMAP Host',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            43 => 
            array (
                's_key' => 'imap_port',
                's_title' => 'IMAP Host',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            44 => 
            array (
                's_key' => 'imap_is_secure',
                's_title' => 'IMAP Secure Protocol',
                's_val' => '',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            45 => 
            array (
                's_key' => 'imap_user',
                's_title' => 'IMAP User',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            46 => 
            array (
                's_key' => 'imap_pass',
                's_title' => 'IMAP Password',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            47 => 
            array (
                's_key' => 'out_email_name',
                's_title' => 'From Name',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            48 => 
            array (
                's_key' => 'out_email_from',
                's_title' => 'From Email',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            49 => 
            array (
                's_key' => 'out_email_protocol',
                's_title' => 'Email Protocol',
                's_val' => 'sendmail',
                's_type' => 'R',
                's_option' => 'eyJzZW5kbWFpbCI6IlNlbmRtYWlsIiwic210cCI6IlNNVFAifQ==',
                's_auto_load' => 'Y',
            ),
            50 => 
            array (
                's_key' => 'mailpath',
                's_title' => 'Sendmail Path',
                's_val' => '/usr/sbin/sendmail',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            51 => 
            array (
                's_key' => 'smtp_host',
                's_title' => 'SMTP Host',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            52 => 
            array (
                's_key' => 'smtp_port',
                's_title' => 'SMTP Host',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            53 => 
            array (
                's_key' => 'smtp_is_secure',
                's_title' => 'SMTP Secure Protocol',
                's_val' => '',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            54 => 
            array (
                's_key' => 'smtp_user',
                's_title' => 'SMTP User',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            55 => 
            array (
                's_key' => 'smtp_pass',
                's_title' => 'SMTP Password',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            56 => 
            array (
                's_key' => 'app_dos_atk',
                's_title' => 'Enable DoS Attack',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            57 => 
            array (
                's_key' => 'app_dos_req',
                's_title' => 'DoS Attack Request Count',
                's_val' => '30',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            58 => 
            array (
                's_key' => 'app_dos_sec',
                's_title' => 'DoS Attack Request Seconds',
                's_val' => '10',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            59 => 
            array (
                's_key' => 'app_dos_action',
                's_title' => 'DoS Attack Action',
                's_val' => 'C',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            60 => 
            array (
                's_key' => 'app_user_scq',
                's_title' => 'Enable Admin User Security',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            61 => 
            array (
                's_key' => 'appuser_sec_tried',
                's_title' => 'Loing Miss Attempts',
                's_val' => '5',
                's_type' => 'N',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            62 => 
            array (
                's_key' => 'appuser_sec_min',
                's_title' => 'Miss Attempts Interval',
                's_val' => '30',
                's_type' => 'N',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            63 => 
            array (
                's_key' => 'fb_enable',
                's_title' => 'Feedback Enable',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            64 => 
            array (
                's_key' => 'fb_e_msg',
                's_title' => 'Feedback message email title',
                's_val' => 'How do you rate the support you received?',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            65 => 
            array (
                's_key' => 'fb_n_msg',
                's_title' => 'Nagative Feedback Message',
                's_val' => 'We are very sorry, we will try our best in future',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            66 => 
            array (
                's_key' => 'fb_p_msg',
                's_title' => 'Positive Feedback Message',
                's_val' => 'We are very happy that we were able to satisfy you.',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            67 => 
            array (
                's_key' => 'msg_last_tried',
                's_title' => '_mt',
                's_val' => '1531905713',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            68 => 
            array (
                's_key' => 'is_app_forcessl',
                's_title' => 'Enable Force SSL',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            69 => 
            array (
                's_key' => 'imap_secure_type',
                's_title' => 'IMAP Protocol Type',
                's_val' => 'ssl',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            70 => 
            array (
                's_key' => '_uprcs',
                's_title' => 'UProcs',
                's_val' => '4.1.7',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            71 => 
            array (
                's_key' => 'dlogin_enable',
                's_title' => 'Default Login',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            72 => 
            array (
                's_key' => 'dgustpopup',
                's_title' => 'Disable Guest Popup',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            73 => 
            array (
                's_key' => 'is_alpguest_ticket',
                's_title' => 'Show All Priroty',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            74 => 
            array (
                's_key' => 'app_lang',
                's_title' => 'App Language',
                's_val' => '',
                's_type' => 'Y',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            75 => 
            array (
                's_key' => 'app_clang',
                's_title' => 'App Site Language',
                's_val' => '',
                's_type' => 'Y',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            76 => 
            array (
                's_key' => 'app_noti_email',
                's_title' => 'Notification Email',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            77 => 
            array (
                's_key' => 'is_netkt_open',
                's_title' => 'On Ticket Open',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            78 => 
            array (
                's_key' => 'is_netktu_reply',
                's_title' => 'On ticket User Notification',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            79 => 
            array (
                's_key' => 'is_netkta_reply',
                's_title' => 'On Admin User Reply Notification',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            80 => 
            array (
                's_key' => 'is_aetkt_open',
                's_title' => 'Email On ticket User Assign',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            81 => 
            array (
                's_key' => 'is_astkt_open',
                's_title' => 'icket User Assign Notification',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            82 => 
            array (
                's_key' => 'is_nstkt_open',
                's_title' => 'On Ticket Open',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            83 => 
            array (
                's_key' => 'is_nstktu_reply',
                's_title' => 'On ticket User Notification',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            84 => 
            array (
                's_key' => 'is_nstkta_reply',
                's_title' => 'On Admin User Reply Notification',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            85 => 
            array (
                's_key' => 'is_nstone',
                's_title' => 'Is Admin Notification Tone',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            86 => 
            array (
                's_key' => 'enable_aclose',
                's_title' => 'Enable Ticket Auto close',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            87 => 
            array (
                's_key' => 'aclosing_rule',
                's_title' => 'Auto closing rule',
                's_val' => 'N',
                's_type' => 'N',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            88 => 
            array (
                's_key' => 'aclosing_msg',
                's_title' => 'Auto closing message',
                's_val' => 'As the ticket has been inactive for a long time, we are considering the issue to be resolved. Our support system is closing this ticket automatically.',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            89 => 
            array (
                's_key' => 'up_last_tried',
                's_title' => '_tt',
                's_val' => '1789279042',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            90 => 
            array (
                's_key' => 'is_state_kn',
                's_title' => 'Disable Knowledge Stat In Homepage',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            91 => 
            array (
                's_key' => 'is_first_run',
                's_title' => '',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'N',
            ),
            92 => 
            array (
                's_key' => 'out_reply_to_email',
                's_title' => 'Reply To Email',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            93 => 
            array (
                's_key' => 'app_ctry_block',
                's_title' => 'Is Country block Status',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            94 => 
            array (
                's_key' => 'app_ctry_brule',
                's_title' => 'Country Block Rule',
                's_val' => 'B',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            95 => 
            array (
                's_key' => 'app_ctry_list',
                's_title' => 'Country List',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            96 => 
            array (
                's_key' => 'is_kn_like_dlike',
                's_title' => 'knowledge Like Dislike',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            97 => 
            array (
                's_key' => 'is_kn_l_upd',
                's_title' => 'last update show',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            98 => 
            array (
                's_key' => 'is_kn_iconc',
                's_title' => 'Counter Icon',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            99 => 
            array (
                's_key' => 'smtp_secure_type',
                's_title' => 'Counter Icon',
                's_val' => 'ssl',
                's_type' => 'R',
                's_option' => 'eyJzc2wiOiJTU0wiLCJ0bHMiOiJUTFMifQ==',
                's_auto_load' => 'Y',
            ),
            100 => 
            array (
                's_key' => 'is_rtl_client',
                's_title' => 'RTL Client',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            101 => 
            array (
                's_key' => 'is_rtl_admin',
                's_title' => 'RTL Admin',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            102 => 
            array (
                's_key' => 'app_spam_emails',
                's_title' => 'SPAM Email',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            103 => 
            array (
                's_key' => 'is_del_spam_email',
                's_title' => 'DeleteSPAMEmail',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            104 => 
            array (
                's_key' => 'is_dis_googlefont',
                's_title' => 'Disable Google Font',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            105 => 
            array (
                's_key' => 'is_hide_knowledge',
                's_title' => 'Hide Knowledge Menu',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            106 => 
            array (
                's_key' => 'is_priority_hide',
                's_title' => 'Priority Hide',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            107 => 
            array (
                's_key' => 'is_priority_ad_hide',
                's_title' => 'Admin Priority Hide',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            108 => 
            array (
                's_key' => 'is_user_can_reopen',
                's_title' => 'Is User Can ReOpen',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            109 => 
            array (
                's_key' => 'per_user_max_ticket',
                's_title' => 'Per max user ticket',
                's_val' => '0',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            110 => 
            array (
                's_key' => 'reopen_time',
                's_title' => 'reopen time',
                's_val' => '0',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            111 => 
            array (
                's_key' => 'is_show_app_ttl',
                's_title' => 'Show Title',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            112 => 
            array (
                's_key' => 'is_powered_by',
                's_title' => 'Enable Powered By',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            113 => 
            array (
                's_key' => 'use_direct_file',
                's_title' => 'Direct file',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            114 => 
            array (
                's_key' => '_css_cpl_req',
                's_title' => 'CSS Compile Require',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            115 => 
            array (
                's_key' => 'up_css_tried',
                's_title' => '_tt',
                's_val' => '1789279040',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
        ));
        
        
    }
}