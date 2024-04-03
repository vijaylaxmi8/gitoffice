<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fixed_nt_pay extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','pay','start_date','reason','end_date','gcr'];
    public function staff() :BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
