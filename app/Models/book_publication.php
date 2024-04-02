<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class book_publication extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','title','book_level','publisher_name','edition','doi','date','issue','type','chapter_title','start_page_no','end_page_no','document','validation_status'];
    public function staff(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
