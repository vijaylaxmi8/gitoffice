<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class reviewer_editor extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','title','journal_name','publisher_name','reviewed_date','level','other_level','category','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
