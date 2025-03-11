<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $table = 'service_categories';
    protected $fillable = [
        'name',
        'parent_id',
        'status',
        'image',
        'details'
    ];

    public function parent(){
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }
}
