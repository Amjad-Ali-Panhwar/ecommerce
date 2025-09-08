<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');                            // Hashed password
            $table->string('phone')->nullable();                    // Phone number
            $table->date('dob')->nullable();                        // date of birth
            $table->string('gender')->nullable();                   // male/female/other                  
            $table->string('image')->nullable();                    // Profile picture path
            $table->enum('status', ['active', 'inactive'])->default('active'); // Account status
            $table->timestamp('email_verified_at')->nullable();    // Email verification
            $table->timestamp('last_seen_at')->nullable();         // Last seen timestamp
            $table->timestamp('last_login_at')->nullable();         // Last login timestamp
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
