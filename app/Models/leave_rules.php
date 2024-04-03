<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave_rules extends Model
{
    use HasFactory;
    protected $fillable=['carry_forwardable',
    'cf_wef',
    'cf_gcr',
    'max_cf',
    'encashable', 
    'enc_wef',
    'enc_gcr',
    'max_enc',
    'gap',
    'gap_wef',
    'gap_gcr',
    'min_gap',
    'max_time_allowed',
    'prior_intimation_days',
    'created_at'];
}
