<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\staff;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class publication extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','level','title','date','journal','publication_type','doi','link','role','other_level','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
