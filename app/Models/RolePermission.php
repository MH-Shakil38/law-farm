<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    // Optionally specify the table name if it's different from the default
    protected $table = 'role_permission';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Disable timestamps if not needed in the pivot table
    public $timestamps = false;

    // You can specify which columns can be mass assigned
    protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
