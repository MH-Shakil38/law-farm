<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;
    protected $table = 'activity_logs';
    protected $fillable = [
        'user_name',
        'user_id',
        'url',
        'description',
        'old_properties',
        'new_properties',
        'action',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
