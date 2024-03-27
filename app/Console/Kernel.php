<?php

namespace App\Console;

use App\Jobs\TestJob;
use App\Models\Category;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->everySecond();

        $schedule->call(function () {
           Category::create([
               'name_uz' => 'Test category',
               'name_en' => 'Test category',
           ]) ;
        })->everyMinute();

        // $schedule->job(new TestJob)->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
