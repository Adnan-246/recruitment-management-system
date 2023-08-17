<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;
use App\Models\Interview;
use App\Models\Note;

class PhoneInterview extends Model
{
    use HasFactory;

    protected $table = 'phone_interviews';

    protected $fillable = [
       
        'candidate_id',
        'interview_date',
        'assertive_outgoing',
        'achievement_oriented',
        'enthusiasm',
        'verbal_persuasive',
        'ability_to_learn',
        'ability_manage_stress',
        'confidence',
        'education_training',
        'skill_experience',
        'job_stability',
        'reason_interest_field',
        'commitment_position',
        'realistic_job',
        'level_interest_position',
        'potential_grow',
        'overall_evaluation',
        'candidate_concern_area',
        'candidate_strength',
        'additional_comment',
        'recommend_onsite',
        'created_by',
        'updated_by',

    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id'); //candidate_id is a foreign key
    }
}
