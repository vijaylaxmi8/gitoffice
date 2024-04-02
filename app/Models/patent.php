<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class patent extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','appl_no','appl_date','title','stream_domain','status','patent_no','publication_no','publication_date','document','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
