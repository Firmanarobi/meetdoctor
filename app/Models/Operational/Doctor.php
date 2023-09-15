<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'doctor';

    // this field must type date y-m-d h:m:s
    protected $dates = [
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function specialist()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\MasterData\Specialist', 'specialist_id', 'id');
    }
    //one to many
    public function appointment()
    {
        //2 parameter (path model, field foreign key)
        return $this->hasMany('App\Model\Operational\Appointment', 'doctor_id');
    }
}
