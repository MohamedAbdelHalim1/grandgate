<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
    'name','description','list','cover'
    ];
    public function projects()
    {
    return $this->hasMany('App\Models\Project')->orderBy('order','ASC');
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'category_id');
    }

}
