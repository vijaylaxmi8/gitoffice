<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Realtions\BelongsTo;

class ticket extends Model
{
    use HasFactory;
    protected $fillable =['id','title','description','attachment','user_id','status'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
