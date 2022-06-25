<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use App\Models\Dokumenup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doklist = Dokumenup::all()->count();
        
        $listdok= Dokumenup::orderby("id","desc")->paginate(10);
        return view('welcome2',compact('listdok','doklist'));
    }
    public function cari(Request $request){
        $q = $request->q;
        $listdok = Dokumenup::where('judul','like',"%".$q."%")
                           ->orWhere('jenis','like',"%".$q."%")
                           ->orWhere('kategori','like',"%".$q."%")
                           ->orWhere('tahun','like',"%".$q."%")->paginate(10);
        return view('cari',compact('listdok'));
    }
    public function informasi_berkala()
    {
        $infoberkala = Dokumenup::where('kategori','Informasi Berkala')->paginate(10);        
        
        return view('infoberkala',compact('infoberkala'));
    }
    public function informasi_sertamerta()
    {
        $infosertamerta = Dokumenup::where('kategori','Informasi Serta Merta')->paginate(10);        
        
        return view('infosertamerta',compact('infosertamerta'));
    }
    public function informasi_setiapsaat()
    {
        $infosetiapsaat = Dokumenup::where('kategori','Informasi Setiap Saat')->paginate(10);        
        
        return view('infosetiapsaat',compact('infosetiapsaat'));
    }
    public function pemohon()
    {
        
        return view('pemohon');
    }
    public function jenis_informasi()
    {
        
        return view('jenis_informasi');
    }
    public function jenis_dokumen()
    {
        
        return view('jenis_dokumen');
    }
    public function profils()
    {
        
        return view('profil');
    }
    public function strukturs()
    {
        
        return view('struktur');
    }
    public function sops()
    {
        
        return view('sop');
    }
    public function maklumats()
    {
        
        return view('maklumat');
    }
    public function mekanismes()
    {
        
        return view('mekanisme');
    }
    public function dasarhukums()
    {
        
        return view('dasarhukum');
    }
}
