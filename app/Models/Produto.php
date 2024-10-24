<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model {
    use SoftDeletes, Timestamp;
    protected $guarded = ['id'];
    protected $table = 'produto';
}
