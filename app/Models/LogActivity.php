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
use App\Models\Employee;
use App\Models\OnsiteInterview;
use App\Models\Role;
use App\Models\LogActivity;

class LogActivity extends Model
{
    use HasFactory;
    use LogActivity;

    protected $table = 'log_activities';

    protected $fillable = [

        'candidate_id',
        'user_id',
        'date',
        'name',
        'subject',
        'url',
        'method',
        'can_status',
        'stage1',
        'stage2',
        'note',
        'interviewers',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id'); //candidate_id is a foreign key
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); //user_id is a foreign key
    }
}
