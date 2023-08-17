<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;
use App\Models\Interview;
use App\Models\Note;
use App\Models\PhoneInterview;
use App\Models\OnsiteInterview;
use App\Models\Employee;
use App\Models\Role;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'role_id',
        'user_id',
        'candidate_id', 
       // 'applicant_id',
       'employee_id_no',
       'f_name',
       'l_name',
       'name',     
      'education',
      'department',
      'position_name',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'zip_code',
        'address',
        'about',
       
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id'); 
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id'); 
    }
}
