<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ntpayscale extends Model
{
    use HasFactory;
    protected $fillable=['title','payband','wef','gcr'];
    public function designations(): BelongsToMany
    {
        return $this->belongsToMany(designation::class)->withPivot('start_date','end_date','status','gcr');
    }
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status','gcr','reason');
    }
}
