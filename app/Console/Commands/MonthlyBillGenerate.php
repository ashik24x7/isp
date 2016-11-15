<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;
use \App\Bill;

class MonthlyBillGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bill:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will generate monthly bill sheet';

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $data = DB::table('bills')->delete();

        if($data){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::statement('INSERT INTO `bills` (`user_id`,`fk_user_id`,`created_at`) SELECT `user_id`,`fk_user_id`,`created_at` FROM `customers`');
        }
        $this->info('The monthly bill has generated successfully!');
    }
}
