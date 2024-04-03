<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class qualification_staff extends Model
{
    use HasFactory;
    protected $fillable=['qualification_id ','staff_id','qualification_name','board_university','grade','yop','status'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(qualification::class)->withPivot('board_university','yop','status');
    }
}
