<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('type', ['billing', 'shipping'])->default('shipping');
            $table->string('full_name')->nullable();                  // Recipient name
            $table->string('phone')->nullable();                      // Contact number
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('Pakistan');
            $table->string('address'); 
            $table->string('postal_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('is_default')->default(false); // Default address flag
            $table->enum('status', ['active', 'inactive'])->default('active'); // Account status
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
        Schema::dropIfExists('user_addresses');
    }
}
