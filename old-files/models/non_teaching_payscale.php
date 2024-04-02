<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class non_teaching_payscale extends Model
{
    use HasFactory;
    protected $fillable=['title','payband','wef'];

}
