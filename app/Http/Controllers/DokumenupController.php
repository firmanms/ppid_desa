<?php

namespace App\Http\Controllers;

use App\Models\Dokumenup;
use Illuminate\Http\Request;
use illuminate\Database\Eloquent\Builder;
use File;

class DokumenupController extends Controller
{
    public function index()
    {
        $listdok= Dokumenup::orderby("id","desc")->paginate(10);
        return view('admin.dokumen',['listdok'=>$listdok]);
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
         'file' => 'required|mimes:pdf|max:28048',
         
 
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
    public function read(Dokumenup $dokumen)
    {
        return view('admin.dokumenread',compact('dokumen'));
    }
    public function edit(Dokumenup $dokumen)
    {
        $listdok= Dokumenup::orderby("id","desc")->paginate(10);
        
        return view('admin.dokumenedit',compact('dokumen','listdok'));
    }
    public function update(Request $request, Dokumenup $dokumen)
    {
    $this->validate($request, [
        'judul'  =>'required',
            'kategori'  =>'required',
            'jenis'  =>'required',
            'tahun'  =>'required',
            'file' => 'mimes:pdf|max:28048',
    ]);

    //get data Blog by ID
    $dokumen = Dokumenup::findOrFail($dokumen->id);

    if($request->file('file') == "") {

        $dokumen->update([
            'judul'     => $request->judul,
            'kategori'   => $request->kategori,
            'jenis'   => $request->jenis,
            'tahun'   => $request->tahun
        ]);
        return back()
               ->with('success','tidak Merubah File.');       

    } else {

        //hapus old image       

        //upload new image
        if($request->file()) {
            $fileName = 'PPID_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('files', $fileName, 'public');
         }else{
             unset($input['file']);
         }

        $dokumen->update([
            'judul'     => $request->judul,
            'kategori'   => $request->kategori,
            'jenis'   => $request->jenis,
            'tahun'   => $request->tahun,
            'nama_file'   => $request->nama_file = 'PPID_'.$request->file->getClientOriginalName(),
            'file'   => $request->file = '/storage/' . $filePath
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
