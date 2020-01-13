<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';
    //retira a utilidade do timestamps do banco de dados.
    //public $timestamps = false;
    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
