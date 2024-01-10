<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportHistoryTable extends Migration
{
    public function up(): void
    {
        Schema::create('report_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reports_id');
            // Add other columns here
            $table->foreign('reports_id')->references('id')->on('reports');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('report_history');
    }
}