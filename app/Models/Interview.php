<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;


class Interview extends Model
{
    use HasFactory;

    protected $table = 'interviews';

    protected $fillable = [
        'candidate_id',
       // 'applicant_id',
        'interview_date',
        'interview_time',
        'interviewer',
        'interview_status',
        'reason',
        'comment',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id'); //candidate_id is a foreign key
    }
}
