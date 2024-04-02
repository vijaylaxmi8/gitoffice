<?php

namespace App\Models\grievience;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\department;

class grievience_category extends Model
{
    use HasFactory;
    protected $fillable=['category_name'];
    public function grievience_category():BelongsTo
    {
        return $this->belongsTo(grievience_category::class);
    }
    public function department():BelongsToMany
    {
        return $this->belongsToMany(department::class);
    }
    
}