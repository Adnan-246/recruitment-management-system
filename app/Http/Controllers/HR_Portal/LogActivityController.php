<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

class LogActivityController extends Controller
{
    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        
        return view('hr-portal.hr-applicant.history.logActivity',compact('logs'));
    }
}
