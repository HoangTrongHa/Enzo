<?php

namespace App\Console\Commands;

use App\Customer;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateDelayToDark extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:update-delay-dark';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $change = Customer::where("static",8)->get();

        foreach ($change as $item) {
            if (strtotime($item->payment_term) < strtotime(Carbon::now())) {

                $change->update([

                ]);
            }
        }
        $this->info('status:update Command Run successfully!');
    }
}
