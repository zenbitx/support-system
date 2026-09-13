<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('knowledge')->delete();
        
        DB::table('knowledge')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug_id' => 'sample',
                'cat_id' => 0,
                'title' => 'sample',
                'k_body' => '<p>It\'s sample&nbsp; knowledge<br></p>',
                'v_count' => 0,
                'l_count' => 0,
                'd_count' => 0,
                'is_stickey' => 'N',
                'added_by' => 'AA',
                'k_tag' => 'sample',
                'k_soundex' => 'S514',
                'entry_time' => '2018-01-05 17:03:39',
                'featured_video_link' => '',
                'last_update_time' => '2018-01-05 17:03:39',
                'status' => 'P',
            ),
        ));
        
        
    }
}