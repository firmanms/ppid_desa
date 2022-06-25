<?php

namespace App\Http\Controllers;

use App\Models\Sops;
use Illuminate\Http\Request;
use illuminate\Database\Eloquent\Builder;
use File;

class SopsController extends Controller
{
    public function index()
    {
        $liststruktur= Sops::where("id","1")->get();
        return view('admin.sop.sop',['liststruktur'=>$liststruktur]);
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
    public function edit(Sops $sop)
    {
        $sop= Sops::orderby("id","desc")->first();
        
        return view('admin.sop.sopedit',compact('sop','sop'));
    }
    public function update(Request $request, Sops $sop)
    {
    $this->validate($request, [
            'tulisan'  =>'required',
            'nama_file'  =>'',
            'file' => '',
            'tampil'  =>'required',
            
    ]);

    //get data Blog by ID
    $sop = Sops::findOrFail($sop->id);

    if($request->file('file') == "") {

        $sop->update([
            'tulisan'     => $request->tulisan,
            'tampil'   => $request->tampil
        ]);
        return back()
               ->with('success','tidak Merubah File.');       

    } else {

        //hapus old image       

        //upload new image
        if($request->file()) {
            $fileName = 'struktur_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('files', $fileName, 'public');
         }else{
             unset($input['file']);
         }

        $sop->update([
            'tulisan'     => $request->tulisan,
            'nama_file'   => $request->nama_file = 'PPID_'.$request->file->getClientOriginalName(),
            'file'   => $request->file = '/storage/' . $filePath,
            'tampil'   => $request->tampil
        ]); 
        //var_dump($filePath);
       // die();
    
           return back()
               ->with('success','File has been uploaded.')
               ->with('file', $fileName);
   
           }
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
