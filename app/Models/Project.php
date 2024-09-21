<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'name','description','list','cover'
    ];
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'project_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
