<?php

namespace App\Http\Controllers\egov;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reviewer_editor;
use App\Models\general_achievements;
use App\Models\copyright;
use App\Models\patent;
use App\Models\funded_project;
use App\Models\consultancy;
use App\Models\book_publication;
use App\Models\publication;
use App\Models\conferences_attendee;
use App\Models\conferences_conducted;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;




class EgovUpdateValidationStatusController extends Controller
{
    //
    public function reviewer_editor(Request $request , reviewer_editor $reviewer_editor)
    {
        //dd($reviewer_editor);
        
        $id = $request->route('id');
        $reviewer_editor = reviewer_editor::findOrFail($id);
      //  dd($request);
        $reviewer_editor->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $reviewer_editor->reason = $request->reason;
        }
    
        $update_status = $reviewer_editor->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/reviewer_editor')->with('status', $status);

    }

    public function general_achievements(Request $request , general_achievements $general_achievements)
    {
       
        $id = $request->route('id');
        $general_achievements = general_achievements::findOrFail($id);
      //  dd($request);
        $general_achievements->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $general_achievements->reason = $request->reason;
        }
    
        $update_status = $general_achievements->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/achivements')->with('status', $status);

    }

    public function copyrights(Request $request,copyright $copyright)
    {
       
        $id = $request->route('id');
        $copyright = copyright::findOrFail($id);
      //  dd($request);
        $copyright->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $copyright->reason = $request->reason;
        }
    
        $update_status = $copyright->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/copyrights')->with('status', $status);

    }


    public function patents(Request $request,patent $patent)
    {
       
        $id = $request->route('id');
        $patent = patent::findOrFail($id);
      //  dd($request);
        $patent->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $patent->reason = $request->reason;
        }
    
        $update_status = $patent->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/patents')->with('status', $status);

    }

    public function funded_project(Request $request,funded_project $funded_project)
    {
       
        $id = $request->route('id');
        $funded_project = funded_project::findOrFail($id);
      //  dd($request);
        $funded_project->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $funded_project->reason = $request->reason;
        }
    
        $update_status = $funded_project->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/fundedproject')->with('status', $status);

    }


    public function consultancy(Request $request, consultancy $consultancy)
    {
       
        $id = $request->route('id');
        $consultancy = consultancy::findOrFail($id);
      //  dd($request);
        $consultancy->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $consultancy->reason = $request->reason;
        }
    
        $update_status = $consultancy->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/egov_consultancy')->with('status', $status);

    }


    public function books_chapt(Request $request, book_publication $book_publication)
    {
       
        $id = $request->route('id');
        $book_publication = book_publication::findOrFail($id);
      //  dd($request);
        $book_publication->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $book_publication->reason = $request->reason;
        }
    
        $update_status = $book_publication->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/book_chapter')->with('status', $status);

    }

    public function publications(Request $request,  publication $publication)
    {
       
        $id = $request->route('id');
        $publication = publication::findOrFail($id);
      //  dd($request);
        $publication->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $publication->reason = $request->reason;
        }
    
        $update_status = $publication->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/publication')->with('status', $status);

    }

    public function conferences_attendee(Request $request,conferences_attendee $conferences_attendee)
    {
       
        $id = $request->route('id');
        $conferences_attendee = conferences_attendee::findOrFail($id);
      //  dd($request);
        $conferences_attendee->validation_status = $request->validation_status;
        //dd($request->validation_status);
        if($request->validation_status == "invalid") 
        {
            //dd('inside if');
            $conferences_attendee->reason = $request->reason;
        }
    
        $update_status = $conferences_attendee->update();
        //dd($reviewer_editor);
        if($update_status)
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        //dd($status);
       return redirect('/egov/Teaching/research/conferenceattended')->with('status', $status);
    }
    
    public function conferences_conducted(Request $request,conferences_conducted $conferences_conducted)
    {
          
           $id = $request->route('id');
           $conferences_conducted = conferences_conducted::findOrFail($id);
         //  dd($request);
           $conferences_conducted->validation_status = $request->validation_status;
           //dd($request->validation_status);
           if($request->validation_status == "invalid") 
           {
               //dd('inside if');
               $conferences_conducted->reason = $request->reason;
           }
       
           $update_status = $conferences_conducted->update();
           //dd($reviewer_editor);
           if($update_status)
           {
               $status = 1;
           }
           else
           {
               $status = 0;
           }
           //dd($status);
          return redirect('/egov/Teaching/research/conferenceconducted')->with('status', $status);

    }

        
    public function professional_activity_attendee(Request $request,professional_activity_attendee $professional_activity_attendee)
    {
          
           $id = $request->route('id');
           $professional_activity_attendee = professional_activity_attendee::findOrFail($id);
         //  dd($request);
           $professional_activity_attendee->validation_status = $request->validation_status;
           //dd($request->validation_status);
           if($request->validation_status == "invalid") 
           {
               //dd('inside if');
               $professional_activity_attendee->reason = $request->reason;
           }
       
           $update_status = $professional_activity_attendee->update();
           //dd($reviewer_editor);
           if($update_status)
           {
               $status = 1;
           }
           else
           {
               $status = 0;
           }
           //dd($status);
          return redirect('/egov/Teaching/activityattended')->with('status', $status);

    }

    public function professional_activity_conducted(Request $request, professional_activity_conducted $professional_activity_conducted)
    {
          
           $id = $request->route('id');
           $professional_activity_conducted = professional_activity_conducted::findOrFail($id);
         //  dd($request);
           $professional_activity_conducted->validation_status = $request->validation_status;
           //dd($request->validation_status);
           if($request->validation_status == "invalid") 
           {
               //dd('inside if');
               $professional_activity_conducted->reason = $request->reason;
           }
       
           $update_status = $professional_activity_conducted->update();
           //dd($reviewer_editor);
           if($update_status)
           {
               $status = 1;
           }
           else
           {
               $status = 0;
           }
           //dd($status);
          return redirect('/egov/Teaching/activityconducted')->with('status', $status);

    }

        // non teaching professional activity attended
        public function professional_activity_attendee_nt(Request $request, professional_activity_attendee $professional_activity_attendee)
        {
              
               $id = $request->route('id');
               $professional_activity_attendee = professional_activity_attendee::findOrFail($id);
             //  dd($request);
               $professional_activity_attendee->validation_status = $request->validation_status;
               //dd($request->validation_status);
               if($request->validation_status == "invalid") 
               {
                   //dd('inside if');
                   $professional_activity_attendee->reason = $request->reason;
               }
           
               $update_status = $professional_activity_attendee->update();
               //dd($reviewer_editor);
               if($update_status)
               {
                   $status = 1;
               }
               else
               {
                   $status = 0;
               }
               //dd($status);
              return redirect('/egov/NonTeaching/attended')->with('status', $status);
    
        }

        public function professional_activity_conducted_nt(Request $request, professional_activity_conducted $professional_activity_conducted)
        {
              
               $id = $request->route('id');
               $professional_activity_conducted = professional_activity_conducted::findOrFail($id);
             //  dd($request);
               $professional_activity_conducted->validation_status = $request->validation_status;
               //dd($request->validation_status);
               if($request->validation_status == "invalid") 
               {
                   //dd('inside if');
                   $professional_activity_conducted->reason = $request->reason;
               }
           
               $update_status = $professional_activity_conducted->update();
               //dd($reviewer_editor);
               if($update_status)
               {
                   $status = 1;
               }
               else
               {
                   $status = 0;
               }
               //dd($status);
              return redirect('/egov/NonTeaching/conducted')->with('status', $status);
    
        }






}
