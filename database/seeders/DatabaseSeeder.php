<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(AdminMessageTableSeeder::class);
        $this->call(AdminMessageReplyTableSeeder::class);
        $this->call(AdminNoteTableSeeder::class);
        $this->call(AppLogTableSeeder::class);
        $this->call(AppNotificaitonTableSeeder::class);
        $this->call(AppSettingTableSeeder::class);
        $this->call(AppSettingApiTableSeeder::class);
        $this->call(AppUserTableSeeder::class);
        $this->call(CannedMsgTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ChatTableSeeder::class);
        $this->call(ChatDeniedTableSeeder::class);
        $this->call(ChatMsgTableSeeder::class);
        $this->call(CustomFieldTableSeeder::class);
        $this->call(CustomPageTableSeeder::class);
        $this->call(DebugLogTableSeeder::class);
        $this->call(EmailTemplatesTableSeeder::class);
        $this->call(ExpiredInfoTableSeeder::class);
        $this->call(FaqCategoryTableSeeder::class);
        $this->call(FaqListTableSeeder::class);
        $this->call(GuestUserTableSeeder::class);
        $this->call(HistoryMissloginTableSeeder::class);
        $this->call(IplistTableSeeder::class);
        $this->call(KnowledgeTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NoticeTableSeeder::class);
        $this->call(PageListTableSeeder::class);
        $this->call(PaymentLogTableSeeder::class);
        $this->call(RemoteServerTableSeeder::class);
        $this->call(RoleAccessTableSeeder::class);
        $this->call(RoleListTableSeeder::class);
        $this->call(SaleFileTableSeeder::class);
        $this->call(SaleFilePaymentLogTableSeeder::class);
        $this->call(SaleUserFileTableSeeder::class);
        $this->call(SiteUserTableSeeder::class);
        $this->call(SiteUserCustomFieldTableSeeder::class);
        $this->call(SystemMsgTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(TicketAssignRuleTableSeeder::class);
        $this->call(TicketCustomFieldTableSeeder::class);
        $this->call(TicketFeedbackTableSeeder::class);
        $this->call(TicketLogTableSeeder::class);
        $this->call(TicketMetaTableSeeder::class);
        $this->call(TicketPaymentTableSeeder::class);
        $this->call(TicketReplyTableSeeder::class);
        $this->call(TopbarIconTableSeeder::class);
        $this->call(UserOnlineLogTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(WorkLogTableSeeder::class);
    }
}
