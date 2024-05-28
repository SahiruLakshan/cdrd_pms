<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'no',
        'task',
        'start_month',
        'end_month',
        'weight',
        'completion_lastweek',
        'completion_presentweek',
        'final_percentage'
    ];
}
