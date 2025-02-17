<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $table = 'agreements';
    protected $fillable = [
        'title',
        'total_amount',
        'details',
        'client_id',
        'description',
        'client_signature',
        'sijs',
        'data',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
}
