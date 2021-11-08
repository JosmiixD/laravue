<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url_clean',
        'content',
        'category_id',
        'posted'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function image() {
        return $this->hasOne('App/Models/PostImage');
    }
}
