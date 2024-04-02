<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class castecategory extends Model
{
    use HasFactory,sortable;
    protected $fillable=['caste_name','religion_id','subcastes_name','category','category_no'];
    public $sortable =['caste_name','religion_id','subcastes_name','category','category_no'];
    public function religion(): BelongsTo
    {
        return $this->belongsTo(religion::class);
    }
}
