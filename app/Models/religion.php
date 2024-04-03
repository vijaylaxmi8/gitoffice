<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class religion extends Model
{
    use HasFactory;
    protected $fillable = ['religion_name', 'created_at'];
    public function castecategory(): HasMany
    {
        return $this->hasMany(castecategory::class);
    }
    public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }

}
