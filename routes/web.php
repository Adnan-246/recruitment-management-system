<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Role_type\HRController;
use App\Http\Controllers\Role_type\EmployeeController;
use App\Http\Controllers\Role_type\HMController;
use App\Http\Controllers\HR_Portal\ChangePasswordController;
use App\Http\Controllers\HR_Portal\JobController;
use App\Http\Controllers\Public_View\PublicController;
use App\Http\Controllers\HR_Portal\ApplicantController;
use App\Http\Controllers\HR_Portal\InterviewController;
use App\Http\Controllers\HR_Portal\NoteController;
use App\Http\Controllers\HM_Portal\OnsiteInterviewController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return redirect('login');
});

//_-Email Verification method__//
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//__User_Type Routes__//
Route::get('/hr',[App\Http\Controllers\Role_type\HRController::class, 'index'])->name('hr')->middleware('HR');
Route::get('/hm',[App\Http\Controllers\Role_type\HMController::class, 'index'])->name('hm')->middleware('HM');
Route::get('/employee',[App\Http\Controllers\Role_type\EmployeeController::class, 'index'])->name('employee')->middleware('Employee');


//__Start HR Portal Routes__//

//__HR Change Password Routes__//
Route::get('hr/change/password', [App\Http\Controllers\HR_Portal\ChangePasswordController::class, 'changepass'])->name('hr.change.password');
Route::post('hr/change/password/update',  [App\Http\Controllers\HR_Portal\ChangePasswordController::class, 'updatePassword'])->name('hr.update.password');

//__HR Profile Routes__//
Route::get('hr/profile', [App\Http\Controllers\HR_Portal\HRProfileController::class, 'index'])->name('hr.profile');
Route::post('hr/profile/update/{id}', [App\Http\Controllers\HR_Portal\HRProfileController::class, 'update']);

//__HR Job Routes __//
Route::get('hr/manage/job',[App\Http\Controllers\HR_Portal\JobController::class, 'index'])->name('hr.job.index');
Route::get('hr/add/job/',[App\Http\Controllers\HR_Portal\JobController::class, 'create'])->name('job.create');
Route::post('hr/job/store',[App\Http\Controllers\HR_Portal\JobController::class, 'store'])->name('job.store');
Route::get('hr/job/show/{id}',[App\Http\Controllers\HR_Portal\JobController::class, 'show'])->name('hr.job.show');
Route::get('hr/job/edit/{id}',[App\Http\Controllers\HR_Portal\JobController::class, 'edit'])->name('job.edit');
Route::post('hr/job/update/{id}',[App\Http\Controllers\HR_Portal\JobController::class, 'update'])->name('job.update');

//__Public View Routes__//
Route::get('career',[App\Http\Controllers\Public_View\PublicController::class, 'index'])->name('public.index');
Route::get('job/details/{id}',[App\Http\Controllers\Public_View\PublicController::class, 'detail'])->name('job.detail');
Route::get('apply/job/{id}',[App\Http\Controllers\Public_View\PublicController::class, 'apply'])->name('job.apply');
Route::post('public/applicant/store',[App\Http\Controllers\Public_View\PublicController::class, 'store']);


//__HR Applicant Routes__//
Route::get('manage/candidate',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'index'])->name('applicant.index');
Route::get('add/candidate',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'create'])->name('applicant.create');
Route::post('applicant/store',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'store'])->name('applicant.store');
Route::get('hr/applicant/details/{id}',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'show'])->name('applicant.detail');
Route::post('applicant/details/update/{id}',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'update'])->name('applicant.detail.update');
Route::get('candidate/resume/download/{resume}',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'download'])->name('applicant.resume.download');
Route::get('candidate/resume/view/{id}',[App\Http\Controllers\HR_Portal\ApplicantController::class, 'view'])->name('applicant.resume.view');

//__HR Interview Route__//

Route::get('add/candidate/interview/{id}',[App\Http\Controllers\HR_Portal\InterviewController::class, 'create'])->name('interview.create');
Route::post('store/applicant/interview',[App\Http\Controllers\HR_Portal\InterviewController::class, 'store'])->name('interview.store');
Route::get('edit/candidate/interview/{id}',[App\Http\Controllers\HR_Portal\InterviewController::class, 'edit'])->name('interview.edit');
Route::post('update/candidate/interview/{id}',[App\Http\Controllers\HR_Portal\InterviewController::class, 'update'])->name('interview.update');
Route::post('delete/candidate/interview/{id}',[App\Http\Controllers\HR_Portal\InterviewController::class, 'destroy'])->name('interview.delete');

//__HR Candidate Note Route__//

Route::get('add/candidate/note/{id}',[App\Http\Controllers\HR_Portal\NoteController::class, 'create'])->name('note.create');
Route::post('store/candidate/note',[App\Http\Controllers\HR_Portal\NoteController::class, 'store'])->name('note.store');
Route::get('edit/candidate/note/{id}',[App\Http\Controllers\HR_Portal\NoteController::class, 'edit'])->name('note.edit');
Route::post('update/candidate/note/{id}',[App\Http\Controllers\HR_Portal\NoteController::class, 'update'])->name('note.update');
Route::post('delete/candidate/note/{id}',[App\Http\Controllers\HR_Portal\NoteController::class, 'destroy'])->name('note.delete');

//__HR Employee Route__//
Route::get('hr/add/employee',[App\Http\Controllers\HR_Portal\EmployeeController::class, 'create'])->name('hr.employee.create');
Route::post('hr/add/employee/store',[App\Http\Controllers\HR_Portal\EmployeeController::class, 'store'])->name('hr.employee.store');
Route::get('hr/manage/employee',[App\Http\Controllers\HR_Portal\EmployeeController::class, 'index'])->name('hr.employee.index');
Route::get('hr/employee/edit/{id}',[App\Http\Controllers\HR_Portal\EmployeeController::class, 'edit'])->name('hr.employee.edit');
Route::post('hr/employee/update/{id}',[App\Http\Controllers\HR_Portal\EmployeeController::class, 'update'])->name('hr.employee.update');

//__End HR Portal Routes__//


//__Start HM Portal Routes__//
//__HM Profile Routes__//
Route::get('hm/profile', [App\Http\Controllers\HM_Portal\HMProfileController::class, 'index'])->name('hm.profile');
Route::post('hm/profile/update/{id}', [App\Http\Controllers\HM_Portal\HMProfileController::class, 'update'])->name('hm.update.profile');

//__HM Change Password Routes__//
Route::get('hm/change/password', [App\Http\Controllers\HM_Portal\ChangePasswordController::class, 'changePass'])->name('hm.change.password');
Route::post('hm/change/password/update',  [App\Http\Controllers\HM_Portal\ChangePasswordController::class, 'updatePassword'])->name('hm.update.password');

//__HM Job Routes __//
Route::get('hm/manage/job',[App\Http\Controllers\HM_Portal\HMJobController::class, 'index'])->name('hm.job.index');
Route::get('hm/job/show/{id}',[App\Http\Controllers\HM_Portal\HMJobController::class, 'show'])->name('hm.job.show');

//__HM Applicant Routes__//
Route::get('hm/manage/candidate',[App\Http\Controllers\HM_Portal\HMApplicantController::class, 'index'])->name('hm.applicant.index');
Route::get('hm/applicant/details/{id}',[App\Http\Controllers\HM_Portal\HMApplicantController::class, 'show'])->name('hm.applicant.detail');
Route::post('hm/applicant/details/update/{id}',[App\Http\Controllers\HM_Portal\HMApplicantController::class, 'update'])->name('hm.applicant.detail.update');

//__HM Interview Routes__//
Route::get('hm/my_open_interview',[App\Http\Controllers\HM_Portal\HMInterviewController::class, 'index'])->name('hm.open.interview.index');

//__HM Phone Interview Routes__//
Route::get('hm/phone_interview/{id}',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'create'])->name('hm.phone.interview.create');
Route::post('hm/phone_interview/store',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'store'])->name('hm.phone.interview.store');
Route::post('hm/phone_interview/delete/{id}',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'destroy'])->name('phone.interview.delete');
Route::get('phone_interview/edit/{id}',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'edit'])->name('phone.interview.edit');
Route::post('hr/phone_interview/update/{id}',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'update'])->name('hm.phone.interview.update');
Route::get('hm/phone_interview/details/{id}',[App\Http\Controllers\HM_Portal\PhoneInterviewController::class, 'show'])->name('hm.phone.interview.show');

//__HM Onsite Interview Routes__//
Route::get('hm/onsite_interview/{id}',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'create'])->name('hm.onsite.interview.create');
Route::post('hm/onsite_interview/store',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'store'])->name('hm.onsite.interview.store');
Route::post('onsite_interview/delete/{id}',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'destroy'])->name('onsite.interview.delete');
Route::get('hr/onsite_interview/edit/{id}',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'edit'])->name('hr.onsite.interview.edit');
Route::post('hr/onsite_interview/update/{id}',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'update'])->name('hr.onsite.interview.update');
Route::get('hm/onsite_interview/details/{id}',[App\Http\Controllers\HM_Portal\OnsiteInterviewController::class, 'show'])->name('hm.onsite.interview.show');


//__Start Employee Portal Routes__//

//__Employee Profile Routes__//
Route::get('employee/profile', [App\Http\Controllers\Employee_Portal\EmployeeProfileController::class, 'index'])->name('employee.profile');
Route::post('employee/profile/update/{id}', [App\Http\Controllers\Employee_Portal\EmployeeProfileController::class, 'update'])->name('employee.update.profile');

//__Employee Change Password Routes__//
Route::get('employee/change/password', [App\Http\Controllers\Employee_Portal\ChangePasswordController::class, 'changePass'])->name('employee.change.password');
Route::post('employee/change/password/update',  [App\Http\Controllers\Employee_Portal\ChangePasswordController::class, 'updatePassword'])->name('employee.update.password');

//__Employee Applicant Routes__//
Route::get('employee/manage/candidates',[App\Http\Controllers\Employee_Portal\EmployeeApplicantController::class, 'index'])->name('employee.applicant.index');
Route::get('employee/applicant/details/{id}',[App\Http\Controllers\Employee_Portal\EmployeeApplicantController::class, 'show'])->name('employee.applicant.detail');
Route::post('employee/interview/details/update/{id}',[App\Http\Controllers\Employee_Portal\EmployeeApplicantController::class, 'update'])->name('employee.interview.update');

//__Employee Phone Interview Routes__//
Route::get('employee/phone_interview/{id}',[App\Http\Controllers\Employee_Portal\PhoneInterviewController::class, 'create'])->name('employee.phone.interview.create');
Route::post('employee/phone_interview/store',[App\Http\Controllers\Employee_Portal\PhoneInterviewController::class, 'store'])->name('employee.phone.interview.store');
Route::get('employee/phone_interview/details/{id}',[App\Http\Controllers\Employee_Portal\PhoneInterviewController::class, 'show'])->name('employee.phone.interview.show');


//__Employee Onsite Interview Routes__//
Route::get('employee/onsite_interview/{id}',[App\Http\Controllers\Employee_Portal\OnsiteInterviewController::class, 'create'])->name('employee.onsite.interview.create');
Route::post('employee/onsite_interview/store',[App\Http\Controllers\Employee_Portal\OnsiteInterviewController::class, 'store'])->name('employee.onsite.interview.store');
Route::get('employee/onsite_interview/details/{id}',[App\Http\Controllers\Employee_Portal\OnsiteInterviewController::class, 'show'])->name('employee.onsite.interview.show');

//__Employee Interview Routes__//
Route::get('employee/my_open_interview',[App\Http\Controllers\Employee_Portal\EmployeeInterviewController::class, 'index'])->name('employee.open.interview.index');