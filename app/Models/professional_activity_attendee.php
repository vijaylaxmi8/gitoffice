<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \Illuminate\Database\Eloquent\Relations\BelongsToMany;



class professional_activity_attendee extends Model
{
    use HasFactory;
    protected $fillable=['title','organizer','role','level','category','sponsored','sponsored_by','from_date','to_date','no_of_days','document','validation_status'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
}
