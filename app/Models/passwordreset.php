<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passwordreset extends Model
{
    use HasFactory;
    public $table = 'password_reset_tokens';
    public $timestamp = false;
     protected $fillable = [
        'email',
        'token',
        'created_at',
    
     ];
}
