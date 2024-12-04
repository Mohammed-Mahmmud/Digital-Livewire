<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = true;
    protected $primaryKey  = 'id';
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
