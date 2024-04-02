<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class consolidated_teaching_pay extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','pay','start_date','reason','end_date','gcr','status'];
    public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
