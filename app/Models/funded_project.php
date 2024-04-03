<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class funded_project extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','proposal_title','role','type','amount','proposal_status','application_date','fund_received','project_status','completion_year','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
