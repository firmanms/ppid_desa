<?php

namespace App\Http\Controllers;
use App\Models\Dokumenup;
use Illuminate\Http\Request;

class DashCon extends Controller
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
        $informasi_berkala = Dokumenup::where("kategori","Informasi Berkala")->count();
        $informasi_serta = Dokumenup::where("kategori","Informasi Serta Merta")->count();
        $informasi_setiap = Dokumenup::where("kategori","Informasi Setiap Saat")->count();
        
        $listdok= Dokumenup::orderby("id","desc")->paginate(10);
        return view('admin.dashboard.dashboard',compact('listdok','doklist','informasi_berkala','informasi_serta','informasi_setiap'));
    }
    public function pemohon()
    {
       
        return view('admin.dashboard.pemohon');
    }
    
}
