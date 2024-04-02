<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ntdesign_payscale extends Model
{
    use HasFactory;
    protected $fillable=['payscale_id','designlevel_id'];
}
