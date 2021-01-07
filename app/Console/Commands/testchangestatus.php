<?php

namespace App\Console\Commands;

use App\Customer;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class testchangestatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:change_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Da thay doi stats cua customer';

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
        $test = Customer::where("static",6)->get();
        foreach ($test as $item) {
            if (strtotime($item->payment_term) < strtotime(Carbon::now()))
                try {
                    DB::beginTransaction();
                    $item->update([
                        "status" => 7,
                    ]);
                    DB::commit();
                } catch (\Exception $exception) {
                    DB::rollBack();
                }
        }
        Log::info("Dang Chay Roi Khong Phai Test!");
    }
}
