<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class general_achievements extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','award','year','details','awarding_body','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
