<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = true;
    protected $primaryKey  = 'id';
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
