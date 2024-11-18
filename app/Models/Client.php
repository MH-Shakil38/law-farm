<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\search;

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

    public function caseType(){
        return $this->belongsTo(CaseType::class,'case_type');
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function files(){
        return $this->hasMany(ClientFile::class,'client_id')->orderBy('created_at','DESC');
    }

    static function getAll($paginate = null){
        $request = request();
        $query = self::query();
        if ($request->has('search')) {
            $query = self::search($query, $request->search);
        }
        $query = ($paginate ? $query->paginate($request->perPage ?? 15) : $query->get());
        return $query;
    }


    static function search($query,$search){
          return  $query->where('name', 'like', '%'.$search.'%')
                  ->orWhere('email', 'like', '%'.$search.'%')
                  ->orWhere('phone', 'like', '%'.$search.'%')
                  ->orWhere('address', 'like', '%'.$search.'%')
                  ->orWhere('city', 'like', '%'.$search.'%')
                  ->orWhere('state', 'like', '%'.$search.'%')
                  ->orWhere('postal_code', 'like', '%'.$search.'%')
                  ->orWhere('country', 'like', '%'.$search.'%')
                  ->orWhere('case_type', 'like', '%'.$search.'%')
                  ->orWhere('case_number', 'like', '%'.$search.'%')
                  ->orWhere('case_details', 'like', '%'.$search.'%')
                  ->orWhere('short_details', 'like', '%'.$search.'%')
                  ->orWhere('date_of_birth', 'like', '%'.$search.'%')
                  ->orWhere('nationality', 'like', '%'.$search.'%')
                  ->orWhere('passport_number', 'like', '%'.$search.'%')
                  ->orWhere('status', 'like', '%'.$search.'%')
                  ->orWhere('created_by', 'like', '%'.$search.'%')
                  ->orWhere('updated_by', 'like', '%'.$search.'%')
                  ->orWhere('image', 'like', '%'.$search.'%');
    }

}
