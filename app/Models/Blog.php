<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'excerpt',
    ];

    protected $with =  ['photos'];

    public function photos(){
        return $this->hasMany(Media::class, 'blog_id');
    }
}
