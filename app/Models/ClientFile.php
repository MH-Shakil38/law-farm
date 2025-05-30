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
        'hearing_id',
        'title',
        'description',
        'client_id',
        'created_by',
        'updated_by',
        'status',
        'date',
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($query){
            $query->created_by = auth()->user()->id;
        });
        static::updating(function ($query){
            $query->updated_by = auth()->user()->id;
        });
    }

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
