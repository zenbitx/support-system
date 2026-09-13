<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketAssignRuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('ticket_assign_rule')->delete();
        
        DB::table('ticket_assign_rule')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cat_ids' => '*',
                'rule_type' => 'N',
                'rule_id' => 'AA',
                'status' => 'A',
            ),
        ));
        
        
    }
}