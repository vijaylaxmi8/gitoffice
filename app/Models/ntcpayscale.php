<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class ntcpayscale extends Model
{
    use HasFactory;

    protected $fillable=['basepay','allowance','year', 'wef','gcr'];
    public function designations(): BelongsToMany
    {
        return $this->belongsToMany(designation::class)->withPivot('start_date','end_date','status');
    }
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status','reason');
    }
}