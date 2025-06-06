<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'title',
        'details',
        'status',
        'image',
        'category_id'
    ];

    public function category()
{
    return $this->belongsTo(Service::class);
}

}
