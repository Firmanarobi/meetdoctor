<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'role_user';

    // this field must type date y-m-d h:m:s
    protected $dates = [
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function user()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }
    //one to many
    public function role()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\ManagementAccess\Role', 'role_id', 'id');
    }
}
