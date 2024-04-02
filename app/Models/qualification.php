<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class qualification extends Model
{
    use HasFactory,Sortable;
    protected $fillable=['qual_name','qual_shortname'];
    public $sortable =['qual_name','qual_shortname'];


    
     public function staff(): BelongsToMany
      {
          return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status');
      }

}

