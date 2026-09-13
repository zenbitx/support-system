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
        Schema::create('site_user', function (Blueprint $table) {
            $table->comment('client');
            $table->increments('id');
            $table->char('first_name', 100)->default('');
            $table->char('last_name', 100)->default('');
            $table->char('username', 50)->default('');
            $table->char('email', 100)->default('')->unique('email');
            $table->char('pass', 32);
            $table->char('is_verified_email', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('gender', 6)->default('');
            $table->char('phone', 20)->default('');
            $table->char('address')->default('');
            $table->char('region', 100)->default('');
            $table->char('city', 100)->default('');
            $table->char('zip', 20)->default('');
            $table->char('country', 2)->default('');
            $table->char('dob', 20)->default('')->comment('date of birth');
            $table->char('profile_url', 150);
            $table->char('photo_url', 150)->default('');
            $table->decimal('age', 2, 0)->default(0);
            $table->char('login_type', 1)->default('N')->comment('radio(N=Normal,F=Facebook,T=Twitter,G=Google,L=Linked In)');
            $table->timestamp('join_date')->useCurrent();
            $table->char('tzone', 50);
            $table->timestamp('last_login_time')->nullable();
            $table->char('status', 1)->default('A')->comment('drop(A=Active,I=Inactive,L=Locked)');
            $table->char('user_type', 1)->default('U')->comment('radio(G=Guest,U=User)');
            $table->text('user_social_session_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_user');
    }
};
