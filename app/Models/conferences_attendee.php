<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class conferences_attendee extends Model
{
    use HasFactory;
    protected $fillable=['conference_name','attended_as','from_date','to_date','no_of_days','title','place','sponsored','sponsored_by','amount','weblink','type_of_level','ISSN_NO','validation_status'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
}
