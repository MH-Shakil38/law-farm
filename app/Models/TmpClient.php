<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpClient extends Model
{
    use HasFactory;
    protected $table = 'tmp_clients';
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'phone2',
        'address',
        'alien_number',
        'city',
        'state',
        'zip_code',
        'country',
        'case_details',
        'case_type',
        'date_of_birth',
        'nationality',
        'status',
        'image',
        'ref_by',
        'direction',
        'gender',
        'marrital_status',
    ];

    public function caseType(){
        return $this->belongsTo(CaseType::class,'case_type');
    }
}
