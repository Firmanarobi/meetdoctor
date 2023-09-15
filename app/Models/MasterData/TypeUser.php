<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'type_user';

    // this field must type date y-m-d h:m:s
    protected $dates = [
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function detail_user()
    {
        //2 parameter (path model, field foreign key)
        return $this->hasMany('App\Model\ManagementAccsess\DetailUser', 'type_user_id');
    }
}
