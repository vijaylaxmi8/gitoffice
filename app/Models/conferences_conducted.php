<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class conferences_conducted extends Model
{
    use HasFactory;
    protected $fillable=['conference_name','co_organizer','no_of_participants','sponsored','sponsoring_agency','from_date','to_date','no_of_days','place','publisher','role','weblink','type_of_level','ISSN_NO','validation_status'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
}
