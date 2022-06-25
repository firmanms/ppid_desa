<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanisme extends Model
{

    protected $primaryKey = 'id';
    use HasFactory;
    
    protected $table = 'tmekanisme';
    protected $fillable=['id','tulisan','nama_file','file','tampil'];
    public $timestamps = false;
    public function dokumenup()
    {
        return $this->belongsTo(Simda_belanja::class,'id_belanja','id');
    }
}
