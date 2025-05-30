<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'published',
        'service_id',
        'category_id',
        'keyword'
    ];

    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
