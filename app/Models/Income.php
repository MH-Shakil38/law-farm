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

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');
    }

    protected static function boot(){
        parent::boot();
        static::creating(function ($query){
            $query->created_by = auth()->user()->id;
        });
        static::updating(function ($query){
            $query->updated_by = auth()->user()->id;
        });
    }

}
