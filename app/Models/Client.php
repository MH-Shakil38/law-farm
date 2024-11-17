<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'case_type',
        'case_number',
        'case_details',
        'short_details',
        'date_of_birth',
        'nationality',
        'passport_number',
        'status',
        'created_by',
        'updated_by',
        'image',
    ];

    public function case(){
        return $this->belongsTo(CaseType::class,'case_type');
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    static function getAll(){
        return self::query()->latest()->get();
    }

}
