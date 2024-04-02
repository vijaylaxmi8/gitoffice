<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association extends Model
{
    use HasFactory;
    protected $fillable=['asso_name'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status');
    }
}
