<?php

namespace App\Console\Commands;

use App\Providers\CreateFakeDatasServiceProvider;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CreateFakeUserTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-fake-user-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Executing CreateFakeUserTask";
        CreateFakeDatasServiceProvider::createTaskUsers();
    }
}
