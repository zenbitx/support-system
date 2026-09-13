<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSettingApiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('app_setting_api')->delete();
        
        DB::table('app_setting_api')->insert(array (
            0 => 
            array (
                's_api_name' => 'EliteLicenser',
                's_key' => 'api_server',
                's_title' => 'Server End Point',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'N',
            ),
            1 => 
            array (
                's_api_name' => 'Envato',
                's_key' => 'ischeck_expiry_date',
                's_title' => 'Check Support Expiry',
                's_val' => 'N',
                's_type' => 'O',
                's_option' => '',
                's_auto_load' => 'N',
            ),
            2 => 
            array (
                's_api_name' => 'paypal',
                's_key' => 'is_enable_paypal',
                's_title' => 'is_enable_paypal',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            3 => 
            array (
                's_api_name' => 'paypal',
                's_key' => 'is_test_mode',
                's_title' => 'is_test_mode',
                's_val' => 'Y',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            4 => 
            array (
                's_api_name' => 'paypal',
                's_key' => 'client_id',
                's_title' => 'client_id',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            5 => 
            array (
                's_api_name' => 'paypal',
                's_key' => 'secret',
                's_title' => 'secret',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            6 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_g_login',
                's_title' => 'is_enable_g_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            7 => 
            array (
                's_api_name' => 'social',
                's_key' => 'login_g_client_id',
                's_title' => 'login_g_client_id',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            8 => 
            array (
                's_api_name' => 'social',
                's_key' => 'login_g_secret',
                's_title' => 'login_g_secret',
                's_val' => '',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            9 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_f_login',
                's_title' => 'is_enable_f_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            10 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_t_login',
                's_title' => 'is_enable_t_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            11 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_l_login',
                's_title' => 'is_enable_l_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            12 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_gh_login',
                's_title' => 'is_enable_gh_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            13 => 
            array (
                's_api_name' => 'social',
                's_key' => 'is_enable_y_login',
                's_title' => 'is_enable_y_login',
                's_val' => 'N',
                's_type' => 'B',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            14 => 
            array (
                's_api_name' => 'system',
                's_key' => 'footer_text',
                's_title' => 'footer_text',
                's_val' => '<p>This a support system of for our client. We will try our best for you. Please feel free to contact with us</p>',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            15 => 
            array (
                's_api_name' => 'system',
                's_key' => 'welcome_msg',
                's_title' => 'welcome_msg',
                's_val' => '<h2 id="page-header-title" align="center">Support Desk</h2><h3 id="page-header-tagline" align="center">Its a support application for our product. We normally response within 24 hours<br></h3>',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            16 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_is_active',
                's_title' => 'gdpr_is_active',
                's_val' => 'N',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            17 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_ua_active',
                's_title' => 'gdpr_ua_active',
                's_val' => 'Y',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            18 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_cnb',
                's_title' => 'gdpr_cnb',
                's_val' => 'Y',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            19 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_cnb_bg',
                's_title' => 'gdpr_cnb_bg',
                's_val' => '#38c0b1',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            20 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_cnb_tc',
                's_title' => 'gdpr_cnb_tc',
                's_val' => '#000000',
                's_type' => 'T',
                's_option' => '',
                's_auto_load' => 'Y',
            ),
            21 => 
            array (
                's_api_name' => 'gdpr',
                's_key' => 'gdpr_cookie_msg',
                's_title' => 'gdpr_cookie_msg',
                's_val' => '<p>This website uses 
cookies. Continued use of this website indicates you have read and 
understood our Privacy & Cookies policy and agree to its terms. <span style="color: rgb(206, 0, 0);"><span style="font-weight: bold;">{{PolicyLink}}</span></span><br></p>',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                22 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gdpr_is_popsh',
                    's_title' => 'gdpr_is_popsh',
                    's_val' => 'Y',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                23 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gpbr_bg_op',
                    's_title' => 'gpbr_bg_op',
                    's_val' => '95',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                24 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gdpr_bar_ani',
                    's_title' => 'gdpr_bar_ani',
                    's_val' => 'slideInUp',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                25 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gdpr_bar_cani',
                    's_title' => 'gdpr_bar_cani',
                    's_val' => 'slideOutDown',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                26 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gpbr_dis_event',
                    's_title' => 'gpbr_dis_event',
                    's_val' => 'S',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                27 => 
                array (
                    's_api_name' => 'gdpr',
                    's_key' => 'gdpr_ud_active',
                    's_title' => 'gdpr_ud_active',
                    's_val' => 'Y',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'Y',
                ),
                28 => 
                array (
                    's_api_name' => 'paypal',
                    's_key' => '_settings',
                    's_title' => 'paypal-settings',
                    's_val' => 'YTo2OntzOjE0OiJpc191cF9wcmV2aW91cyI7czoxOiJZIjtzOjk6ImNsaWVudF9pZCI7czowOiIiO3M6Njoic2VjcmV0IjtzOjA6IiI7czoxNjoiaXNfZW5hYmxlX3BheXBhbCI7czoxOiJOIjtzOjEyOiJpc190ZXN0X21vZGUiO3M6MToiWSI7czoxMDoicF9jdXJyZW5jeSI7Tjt9',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                29 => 
                array (
                    's_api_name' => 'Envato',
                    's_key' => 'api_type',
                    's_title' => 'API Type',
                    's_val' => 'P',
                    's_type' => 'R',
                    's_option' => 'eyJQIjoiUGVyc29uYWwiLCJPIjoiT2xkIFRva2VuIn0=',
                    's_auto_load' => 'N',
                ),
                30 => 
                array (
                    's_api_name' => 'Envato',
                    's_key' => 'api_username',
                    's_title' => 'Envato Username',
                    's_val' => '',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                31 => 
                array (
                    's_api_name' => 'Envato',
                    's_key' => 'api_token',
                    's_title' => 'API Token',
                    's_val' => '',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                32 => 
                array (
                    's_api_name' => 'MailChimp',
                    's_key' => 'is_mailchimp',
                    's_title' => 'Enable MailChimp',
                    's_val' => 'N',
                    's_type' => 'O',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                33 => 
                array (
                    's_api_name' => 'MailChimp',
                    's_key' => 'api_key',
                    's_title' => 'API Key',
                    's_val' => '',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                34 => 
                array (
                    's_api_name' => 'EliteLicenser',
                    's_key' => 'api_key',
                    's_title' => 'API Key',
                    's_val' => '',
                    's_type' => 'T',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
                35 => 
                array (
                    's_api_name' => 'EliteLicenser',
                    's_key' => 'ischeck_expiry_date',
                    's_title' => 'Check Support Expiry',
                    's_val' => 'N',
                    's_type' => 'O',
                    's_option' => '',
                    's_auto_load' => 'N',
                ),
            ));
        
        
    }
}