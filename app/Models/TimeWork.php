<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeWork extends Model
{
    use HasFactory;

    protected $table = 'time_work';

    protected $fillable = ['admission_time','time_out'];
}
