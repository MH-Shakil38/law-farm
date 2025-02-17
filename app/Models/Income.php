<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'note',
        'file',
        'amount',
        'reffer',
        'type',
        'client_id',
        'income_type',
        'status',
        'created_by',
        'updated_by',
    ];

}
