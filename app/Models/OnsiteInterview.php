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

class OnsiteInterview extends Model
{
    use HasFactory;

    protected $table = 'onsite_interviews';

    protected $fillable = [

        'candidate_id',
        'interview_date',
         'body_lan_eye_contact',
         'resume_presentation',
        'presentation_prior_work',
        'achievement_oriented',
        'enthusiasm',
         'verbal_persuasive',
         'team_skill',
        'education_training',
        'skill_experience',
        'commitment_position',
        'level_interest_position',
        'asked_good_question',
        'potential_to_grow',
        'overall_evaluation',
        'candidate_concern_area',
        'candidate_strength',
        'additional_comment',
        'recommend_to_hire',
        'created_by',
        'updated_by',

    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id'); //candidate_id is a foreign key
    }
}
