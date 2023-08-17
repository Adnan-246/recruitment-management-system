<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\User;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
       
        'apply_date',
        'job_id',
        'user_id', 
      'education',
      'experience',
      'experience_descrip',
      'salary_expect',
      'resume',
      'cover_letter',     
        'f_name',
        'l_name',
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'country',
        'state',
        'city',
        'address',
        'status',
        'stage1',
        'stage2',
        'note',
        'interviewers',    
        'created_at',
       
    ];

    public function job()
     {
         return $this->belongsTo(Job::class, 'job_id'); //job_id is a foreign key
     }

     public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); //user_id is a foreign key
    }
}
