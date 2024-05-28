<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $fillable = [
        'no',
        'rc',
        'pname',
        'wing',
        'end_user',
        'start_date',
        'end_date',
        'ecost',
        'pexpenditure',
        'allocation',
        'expenditure',
        'commitment',
        'progress',
        'status_lastweek',
        'next_week',
        'remaining_work',
        'issues'
    ];
}
