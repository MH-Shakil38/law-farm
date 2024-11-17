<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFile extends Model
{
    use HasFactory;
    protected $table = 'client_files';
    protected $fillable = [
        'file',
        'title',
        'description',
        'client_id',
        'created_by',
        'updated_by',
        'status',
    ];

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
