<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
use App\Http\Controllers\EmployeeWebHistoryController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;

class set extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';

    protected $signature = 'SET:command {table} {ip_address} {optional}';

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

        if($this->argument('table') =='empdata'){
          EmployeesController::setempdata($this->argument('ip_address'),$this->argument('optional'));  
        }else{
           EmployeeWebHistoryController::setWebhistory($this->argument('ip_address'),$this->argument('optional'));  
        }
        
       
    }
}
