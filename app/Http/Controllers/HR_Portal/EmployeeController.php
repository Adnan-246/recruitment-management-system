<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Note;
use App\Models\Role;
use App\Models\Employee;
use Auth;
use File;
use PDF;
use Load;

class EmployeeController extends Controller
{
        public function create(){

            return view('hr-portal.hr-employee.create');
        }

        public function store(Request $request){

            $request->validate([
              
                'name' => 'required',
                'email' => 'required|unique:employees|max:255',
                'phone' => 'required|unique:employees|max:15',
                'department' => 'required',
                'position_name' => 'required',
                'role_id' => 'required',
             
         
                 ]);
         
               
                 Employee::insert([
                    
                    
                     'name' => $request->name,
                     'email' => $request->email,
                     'phone' => $request->phone,
                     'department' => $request->department,
                     'position_name' => $request->position_name,
                     'role_id' => $request->role_id,
                
                 ]);
         
                 $notification = array('message' => 'New Employee added Successfully!', 'alert-type' => 'success');
                 return redirect()->back()->with($notification);
        }

        public function index(){

            $employee = Employee::all();

           // dd($employee);
            return view('hr-portal.hr-employee.index', compact('employee'));
        }

        public function edit($id){

            $employee = Employee::find($id);

           // dd($employee);
            return view('hr-portal.hr-employee.edit', compact('employee'));
        }

         //__Update Method__//
    public function update(Request $request,$id)
    {
        $employee = Employee::find($id);
         //get the record

        

       

        $employee->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'position_name' => $request->position_name,
            'role_id' => $request->role_id,
         

        ]);
        $notification = array('message' => 'Employee Details Successfully Updated!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

}
