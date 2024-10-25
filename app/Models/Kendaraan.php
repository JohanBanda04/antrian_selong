<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Kendaraan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "kendaraan";
    protected $primaryKey = "id";

//    protected $fillable = [
//
//        'nama_user',
//        'email_user',
//        'password',
//        'no_hp',
//        'roles',
//
//    ];
    protected $guarded = [
        "id"
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pinjamkendaraan(){ // tidak boleh beda dgn nama model relasinya DataMahasiswa dataMahasiswa
        return $this->hasMany(Pinjamkendaraan::class,'kode_kendaraan','kode_kendaraan');
//        return $this->belongsTo(Operator::class,'operator_id','id');
    }
}
