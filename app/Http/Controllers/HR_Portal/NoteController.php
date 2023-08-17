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
use Auth;
use File;
use PDF;
use Load;

class NoteController extends Controller
{
     //__Create Method__//
     public function create($id)
     {
         
       // $interview = Interview::find($id);
 
        $candidate = Candidate::find($id);
 
        //dd($applicant);
 
        return view('hr-portal.hr-note.create',compact('candidate'));
 
     }

     //__Store Store Method__//
   public function store(Request $request)
   {
    
    // $note = new Note;
    // $note->applicant_id = $applicant->id;

       $request->validate([
       'candidate_id' => 'required',
       'note' => 'required',
       'note_by' => 'required',
       'created_at' => 'required',
    
      

        ]);
      
       
        Note::insert([
           
            'candidate_id' => $request->candidate_id,
            'note' => $request->note,
            'note_by' => $request->note_by,
            'created_at' => $request->created_at,
           
       
        ]);
      

        $notification = array('message' => 'Note Added Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

   }

    //__Edit Method__//
    public function edit($id)
    {

       $note = Note::find($id);

       $candidate = Candidate::all();
      

      //dd($note->applicant->id);

      return view('hr-portal.hr-note.edit', compact('note','candidate'));
     
    }

     //__Update Method__//
     public function update(Request $request, $id)
     {
        

         $note = Note::find($id); //get the record

         $candidate = Candidate::find($id);

         $note->update([
          
               'note' => $request->note,
              
            

         ]);

         $notification = array('message' => 'Note Details Successfully Updated!', 'alert-type' => 'success');
         return redirect()->route('applicant.detail', $note->candidate->id)->with($notification);
     }

     //__Delete Method__//
     public function destroy($id)
     {
   
       //$interview = Interview::find($id);
        Note::find($id)->delete();

      $notification = array('message' => 'Note Deleted Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
      
     }
}
