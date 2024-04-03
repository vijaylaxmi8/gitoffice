<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\general_achievements;

use App\Http\Requests\Storegeneral_achievementsRequest;
use App\Http\Requests\Updategeneral_achievementsRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\File; 
use Auth;
use App\Models\staff;


class GeneralAchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    

    //////
   
    public function gen_egov_id(Carbon $date)
    {
        
        return 'egovid_' . $date->format('Ymd_His');
    }
    public function store(Storegeneral_achievementsRequest $request)
{
    $user = Auth::user();
    $staff = Staff::where('user_id', $user->id)->first();
    $achivement = new general_achievements();
    $achivement->staff_id = $staff->id;
    $achivement->award = $request->ga_award;
    $achivement->year = $request->ga_year;
    $achivement->details = $request->ga_details;
    $achivement->awarding_body = $request->ga_awarding_body;
    // if($request->validation_status=="invalid")
    // {
    //    $achivement->validation_status = $request->validation_status;
    //     $achivement->reason=$request->reason;       
    // }
    // else{
    //     $achivement->validation_status=$request->validation_status;       
    // }

    // File upload

    $file=$request->file("document");

  //  $final_file_upload_name = $this->gen_egov_id(Carbon::now()) . '.' . $file->getClientOriginalExtension();

  

    $file_size = $file->getSize();
    $file_upload_status = 0;
    $achievementId = 0; 
    $file_size_status = 0;

    if ($file_size <= 500000) {
        $file_size_status = 1;
        if($file->store('public/Uploads/Research/Achievement/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $achivement->document= $file->hashName();
               $achievementId =  $achivement->save(); // insert the row and upload the file only when all the conditions are met.
            
            } 
        else {
            $file_upload_status = 0;
        }
    }

    if ($achievementId && $file_upload_status && $file_size_status) {
        $status = 1;
    } else {
        $status = 0;
    }

    $return_data = [
        'status' => $status,
        'file_size_status' => $file_size_status
    ];

    return redirect('/Teaching/research/achievement')->with('return_data', $return_data);
}



   
    

   

    /**
     * Display the specified resource.
     */
    public function show(general_achievements $general_achievements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(general_achievements $general_achievements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updategeneral_achievementsRequest $request, general_achievements $general_achievements)
    {
        //dd($request);
        //dd($request->all());
        
        //$general_achievements->staff_id=$staff->id;
        $general_achievements->award=$request->gae_award;
        $general_achievements->year=$request->gae_year; 
        $general_achievements->details=$request->gae_details;
        $general_achievements->awarding_body = $request->gae_awarding_body;

        // Update validation status
        $general_achievements->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;
       


         //file upload
         $file=$request->file("document");
        
 
         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;
 
         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/Achievement/'.$general_achievements->document);
 
                 if($file->store('public/Uploads/Research/Achievement/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $general_achievements->document= $file->hashName();
               $result=  $general_achievements->update(); // insert the row and upload the file only when all the conditions are met.
            
            } 
                  else{
                     //dd( "Failed to upload file");
                     $file_upload_status = 0;
                 }
 
         }else{
             $file_size_status = 0;
         }


        
 
 
         if($result && $file_upload_status == 1 &&  $file_size_status == 1){
             $status = 1;
         }else{
             $status = 0;
         }
 
         $return_data = [
             'status' => $status,
             'file_size_status' => $file_size_status
         ];



        // $result = $general_achievements->update();
        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }
        return redirect('/Teaching/research/achievement')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(general_achievements $general_achievements)
    {
        //
        $result =$general_achievements->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/achievement')->with('status', $status);
    }
}
