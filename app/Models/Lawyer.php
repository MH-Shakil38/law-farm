<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $table = 'lawyers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'description',
        'image',
        'case_type',
        'status',
        'created_by',
        'updated_by',
    ];


    public function caseType(){
        return $this->belongsTo(CaseType::class,'case_type','id');
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
