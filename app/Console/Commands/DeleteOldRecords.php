<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;

class DeleteOldRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteOldRecords';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Delete records older than 30 days';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $oldDate = now()->subDays(30);
        Student::where('created_at', '<', $oldDate)->delete();
        $this->info('Old records deleted successfully.');
    }
}
