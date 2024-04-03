<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
       // $schedule->command('inspire')->everyMinute();
     
        //for running scheduled job of adding the leave entitlements yearly once for (teaching vacational and teaching non vacational)
        
        $schedule->call('\App\Http\Controllers\ScheduledJobs@yearly_leave_entitlements')->yearlyOn(3,11,'15:08')->timezone('Asia/Kolkata');   
        $schedule->call('\App\Http\Controllers\ScheduledJobs@monthly_leave_entitlements')->monthlyOn(29,'12:31')->timezone('Asia/Kolkata');
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
