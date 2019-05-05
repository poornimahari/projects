<?php

use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\EmployeeWebHistoryController;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


Artisan::command('inspixxre', function () {
    $this->comment(EmployeeWebHistoryController::someStaticMethod());
})->describe('Display an inspiring quote');
