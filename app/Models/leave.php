<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class leave extends Model
{
    use HasFactory;
    protected $fillable=['longname','shortname','vacation_type','max_entitlement','min','max'];
    public function combine_leave():BelongsToMany
    {
        return $this->belongsToMany(leave::class,'combine_leaves','leave_id','combined_id')->wherePivot('status','active')->withPivot('id','combined_id','sandwitchable','status','wef');
    }
    public function latest_combine_leave(): BelongsToMany
    {
        return $this->belongsToMany(leave::class,'combine_leaves','leave_id','combined_id')->withPivot('id','combined_id','sandwitchable','status','wef');
    
    }
    public function leave_rules():HasMany
    {
        return $this->hasMany(leave_rules::class);
    }
    //function to fetch all the active leave_rules that are have the max_time_allowed as null. 
    //Null Max_time_allowed are considered as general leaves
    public function general_leaves():HasMany
    {
        return $this->hasMany(leave_rules::class)->where('status','active')->whereNull('max_time_allowed');
    }
    public function leave_staff_entitlements():BelongsToMany
    {
        return $this->belongsToMany(staff::class,'leave_staff_entitlements')->withPivot('id','year','entitled_curr_year','accumulated','consumed_curr_year','encashed_curr_year','total_encashed');
    }
    public function leave_staff_application():BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
}
