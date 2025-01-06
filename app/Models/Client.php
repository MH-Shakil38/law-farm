<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use function Laravel\Prompts\search;

class Client extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'name',
        'email',
        'phone',
        'phone2',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'case_type',
        'case_number',
        'case_details',
        'short_details',
        'lawyer_id',
        'date_of_birth',
        'nationality',
        'passport_number',
        'status',
        'image',
        'ref_by',
        'direction',
        'gender',
        'marrital_status',
        'hearing_date',
        'hearing_time',
        'last_update',
        'created_by',
        'updated_by'
    ];

    public function lawyer(){
        return $this->belongsTo(User::class,'lawyer_id');
    }

    public function caseType(){
        return $this->belongsTo(CaseType::class,'case_type');
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function files(){
        return $this->hasMany(ClientFile::class,'client_id')->orderBy('created_at','DESC');
    }

    public function hearing(){
        return $this->hasMany(Hearing::class,'client_id');
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

    static function getAll($paginate = null){
        $request = request();
        $query = self::query();
        if ($request->has('search')) {
            $query = self::search($query, $request->search);
        }
        $query = ($paginate ? $query->paginate($request->perPage ?? 15) : $query->get());
        return $query;
    }

}
