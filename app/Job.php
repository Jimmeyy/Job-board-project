<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $attributes = [
        'aplication_amount' => 0,
        'workload' => 'full time',
    ];
}