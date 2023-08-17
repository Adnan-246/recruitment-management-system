<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;
use App\Models\Interview;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = [
       
        'candidate_id',
        'note',
        'note_by',
      
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id','id'); //candidate_id is a foreign key
    }
}
