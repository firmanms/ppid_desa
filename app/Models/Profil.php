<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    protected $primaryKey = 'id';
    use HasFactory;
    
    protected $table = 'tprofil';
    protected $fillable=['id','desa','kec','kab','prov','alamat','nomor','email','fb','tw','ig','yt','ket'];
    public $timestamps = false;
    public function dokumenup()
    {
        return $this->belongsTo(Simda_belanja::class,'id_belanja','id');
    }
}
