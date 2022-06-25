<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumenup extends Model
{

    protected $primaryKey = 'id';
    use HasFactory;
    
    protected $table = 'tdokumen';
    protected $fillable=['id','judul','kategori','jenis','tahun','file','created_at','updated_at'];
    public $timestamps = false;
    public function dokumenup()
    {
        return $this->belongsTo(Simda_belanja::class,'id_belanja','id');
    }
}
