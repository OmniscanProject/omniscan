<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'reports', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('path')->nullable();
                $table->unsignedBigInteger('admin_user_id');
                // Add other columns here
                $table->foreign('admin_user_id')->references('id')->on('admin_users');
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
}
