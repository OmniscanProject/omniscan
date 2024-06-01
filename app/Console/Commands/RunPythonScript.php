<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunPythonScript extends Command
{
    protected $signature = 'python:run-script {url}';

    protected $description = 'Run a Python script within Laravel';

    public function handle()
    {
        $scriptPath = storage_path('scripts/FreeAnalyze.py');
        $url = $this->argument('url');
        $output = shell_exec('python3 ' . $scriptPath . ' --url ' . $url);
        $this->info($output);
    }
}