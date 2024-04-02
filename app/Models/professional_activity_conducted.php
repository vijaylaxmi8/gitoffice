<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \Illuminate\Database\Eloquent\Relations\BelongsToMany;


class professional_activity_conducted extends Model
{
    use HasFactory;
    protected $fillable =['level','title',',organizer','co_organizer','category','sponsored','sponsoring_agency_name_address','from_date','to_date','place','no_of_days','role','validation_status'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
}
