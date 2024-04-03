<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class consultancy extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','consultancy_title','agency','from_date','to_date','amount','consultancy_type','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
