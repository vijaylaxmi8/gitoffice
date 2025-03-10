<?php

namespace App\Models\Ticketing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ticket extends Model
{
    use HasFactory;
    protected $fillable =['id','title','description','attachment','user_id','status'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
