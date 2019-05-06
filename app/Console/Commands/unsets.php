<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
use App\Http\Controllers\EmployeeWebHistoryController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;

class unsets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';

    protected $signature = 'UNSET {table} {ip_address}';

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
        if($this->argument('table')=='empdata'){
            EmployeesController::empdelete($this->argument('ip_address'));
        }else if($this->argument('table')=='empwebhistory'){
          EmployeeWebHistoryController::webhistorydel($this->argument('ip_address'));  
        }else{
            echo "NULL";
        }
        
    }
}
