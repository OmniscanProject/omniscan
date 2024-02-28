<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScriptLogsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'script_logs', function (Blueprint $table) {
                $table->id();
                $table->string('status')->nullable();
                $table->text('message')->nullable();
                $table->unsignedBigInteger('script_id');
                // Add other columns here
                $table->foreign('script_id')->references('id')->on('scripts');
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('script_logs');
    }
}
