<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $fillable = [
        'emp_id','ip_address', 'emp_name', 'date', 'delete_status',
    ];
}
