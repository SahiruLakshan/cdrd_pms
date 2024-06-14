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
        'ext_time',
        'ecost',
        'pexpenditure',
        'allocation',
        'expenditure',
        'commitment',
        'progress',
        'total_re_funds',
        'current_re_funds',
        'status_lastweek',
        'next_week',
        'remaining_work',
        'issues'
    ];
}
