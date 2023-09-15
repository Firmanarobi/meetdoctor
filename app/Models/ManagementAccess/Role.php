<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'role';

    // this field must type date y-m-d h:m:s
    protected $dates = [
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'title',
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function permission_role()
    {
        //2 parameter (path model, field foreign key)
        return $this->hasMany('App\Model\ManagemetAccess\PermissionRole', 'role_id');
    }
    //one to many
    public function role_user()
    {
        //2 parameter (path model, field foreign key)
        return $this->hasMany('App\Model\ManagemetAccess\RoleUser', 'role_id');
    }
}