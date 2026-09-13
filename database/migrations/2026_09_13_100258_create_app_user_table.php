<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('app_user', function (Blueprint $table) {
            $table->char('pvid', 4)->default('');
            $table->char('id', 2)->default('');
            $table->char('user', 25)->default('')->primary();
            $table->char('title', 50)->default('');
            $table->char('email', 100)->default('');
            $table->char('pass', 32)->default('');
            $table->char('role', 2)->default('')->comment('FK(role_list,role_id,title)');
            $table->char('panel', 1)->default('');
            $table->char('status', 1)->default('A')->comment('A=Active, I=Inactive');
            $table->timestamp('add_date')->useCurrent();
            $table->char('contact_number', 25)->default('');
            $table->string('img_url');
            $table->char('tzone', 50)->comment('drop(Asia/Dhaka=Dhaka Bangladesh)');
            $table->char('gender', 6)->default('')->comment('radio(M=Male,F=Female)');
            $table->char('address')->default('');
            $table->char('region', 100)->default('');
            $table->char('city', 100)->default('');
            $table->char('zip', 20)->default('');
            $table->char('country', 2)->default('')->comment('drop(US=United States)');
            $table->char('dob', 25)->default('0000-00-00')->comment('date of birth');
            $table->char('is_enable_chat', 1)->default('Y')->comment('bool(Y=Yes,N=No)');

            $table->unique(['pvid', 'email'], 'email');
            $table->unique(['pvid', 'user'], 'user');
            $table->index(['pvid', 'user', 'status'], 'user_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_user');
    }
};
