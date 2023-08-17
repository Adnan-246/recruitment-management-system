<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'job_id_no',
        'ref_code',
        'position_name',
        'description',
        'post_date',
        'start_date',
        'end_date',
        'vacancy',
        'requirement',
        'salary',
        'position_type',
        'location',
        'experience',
        'education',
        'file',
        'f_name',
        'l_name',
        'name',
        'email',
        'phone',
        'cover_letter',
        'status',
        

    ];

    
}
