<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class copyright extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','copyright_title','copyright_date','author_name','status','description','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
