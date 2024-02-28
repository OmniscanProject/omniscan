<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'admin_users', function (Blueprint $table) {
                $table->id();
                $table->string('firstname')->nullable();
                $table->string('lastname')->nullable();
                $table->string('username')->nullable();
                $table->string('email')->nullable()->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password')->nullable();
                $table->unsignedBigInteger('role_id');
                $table->string('uuid')->nullable();
                $table->rememberToken();
                $table->foreign('role_id')->references('id')->on('roles');
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
}
