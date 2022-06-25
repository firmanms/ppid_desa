<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use illuminate\Database\Eloquent\Builder;
use File;

class ProfilController extends Controller
{
    public function index()
    {
        $listprofil= Profil::where("id","1")->get();
        return view('admin.profil.profil',['listprofil'=>$listprofil]);
    }

    public function cari(Request $request){
        $q = $request->q;
        $listdok = Dokumenup::where('judul','like',"%".$q."%")
                           ->orWhere('jenis','like',"%".$q."%")
                           ->orWhere('kategori','like',"%".$q."%")
                           ->orWhere('tahun','like',"%".$q."%")->paginate(10);
        return view('admin.dokumen',compact('listdok'));
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
         'judul'  =>'required',
         'kategori'  =>'required',
         'jenis'  =>'required',
         'tahun'  =>'required',
         'file' => 'required|mimes:pdf|max:2048',
         
 
        ]); 
         
        $save = new Dokumenup();
        if($request->file()) {
            $fileName = 'PPID_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('files', $fileName, 'public');
        //var_dump($filePath);
        //die();
            
        $save->judul = $request->judul;
        $save->kategori = $request->kategori;
        $save->jenis = $request->jenis;
        $save->tahun = $request->tahun;
        $save->nama_file = 'PPID_'.$request->file->getClientOriginalName();
        $save->file = '/storage/' . $filePath;
        
        $save->save();

       
 
        return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);

        }
 
    }
    public function read(Profil $profil)
    {
        return view('profil.admin.profilread',compact('profil'));
    }
    public function edit(Profil $profil)
    {
        $listprofil= Profil::orderby("id","desc")->paginate(10);
        
        return view('admin.profil.profiledit',compact('profil','listprofil'));
    }
    public function update(Request $request, Profil $profil)
    {
    $this->validate($request, [
            'desa'  =>'required',
            'kec'  =>'required',
            'kab'  =>'required',
            'prov'  =>'required',
            'alamat' => 'required',
            'nomor' => 'required',
            'email' => 'required',
            'fb' => 'required',
            'tw' => 'required',
            'ig' => 'required',
            'yt' => 'required',
            'ket' => 'required',
    ]);

    //get data Blog by ID
    $profil = Profil::findOrFail($profil->id);

    

        $profil->update([
            'desa'     => $request->desa,
            'kec'   => $request->kec,
            'kab'   => $request->kab,
            'prov'   => $request->prov,
            'alamat'   => $request->alamat,
            'nomor'   => $request->nomor,
            'email'   => $request->email,
            'fb'   => $request->fb,
            'tw'   => $request->tw,
            'ig'   => $request->ig,
            'yt'   => $request->yt,
            'ket'   => $request->ket,
        ]); 
        //var_dump($filePath);
       // die();
    
           return back()
               ->with('success','telah diubah.');
       }

    public function destroy($id){
		// hapus file
		$gambar = Dokumenup::where('id',$id)->first();
		File :: delete ('files/'. $gambar -> avatar); 
 
		// hapus data
		Dokumenup::where('id',$id)->delete();
        return redirect()->to('dokumen');
        
		
	}
    
}
