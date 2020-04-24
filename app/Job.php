<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Job extends Model {
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $attributes = [
        'aplication_amount' => 0,
        'workload' => 'full time',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}