<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    use HasFactory;
    protected $table = 'case_types';
    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
        'updated_by'
    ];

    static function getAll()
    {
        return self::all();
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
