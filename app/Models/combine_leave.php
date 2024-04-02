<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combine_leave extends Model
{
    use HasFactory;
    public function leave():BelongsToMany
    {
        return $this->belongsToMany(leave::class,'combine_leave','leave_id','combined_id')->withPivot('combined_id','sandwichable','status','wef');
    }
}
