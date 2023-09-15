<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'appointment';

    // this field must type date y-m-d h:m:s
    protected $dates = [
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'crated_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function doctor()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\Operational\Doctor', 'doctor_id', 'id');
    }
    //one to many
    public function consultation()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\MasterData\Consultation', 'consultation_id', 'id');
    }
    //one to many
    public function user()
    {
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }

    //one to many
    public function transaction()
    {
        //2 parameter (path model, field foreign key)
        return $this->hasOne('App\Model\Operational\Transaction', 'appointment_id');
    }
    
}
