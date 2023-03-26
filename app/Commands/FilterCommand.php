<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class FilterCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = "filter {filter : 'ew' for equal width and 'ef' for equal frequency} {value : enter comma seperated positive numeric values}";

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Lumps numeric input into 3 discrete categories';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
