<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTConsolidated_payscale extends Model
{
    use HasFactory;
    protected $fillable=['basepay','allowance','wef','year'];
}
