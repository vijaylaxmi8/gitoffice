<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class allowances extends Model
{
    use HasFactory;
    public function designations():BelongsTo{
        return $this->belongsTo(designation::class);
    }
    
}
