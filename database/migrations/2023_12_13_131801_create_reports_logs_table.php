<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsLogsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'reports_logs', function (Blueprint $table) {
                $table->id();
                $table->string('status')->nullable();
                $table->text('message')->nullable();
                $table->unsignedBigInteger('reports_id');
                // Add other columns here
                $table->foreign('reports_id')->references('id')->on('reports');
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('reports_logs');
    }
}
