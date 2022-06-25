@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Input Dokumen

@stop

@section('content')

  <form action="{{ url('dokumen/'.$dokumen->id) }}/update" method="post" enctype="multipart/form-data" id="upload-file">
    @method("PUT")
  @csrf
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
      <strong>{{ $message }}</strong>
  </div>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Upload Dokumen Infoermasi</h3>
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-md-12 mb-12">
        <label for="exampleInputEmail1">Judul Dokumen</label>
        <input type="hidden" name="id" value="{{ old('id') ?? $dokumen->id }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
          <input type="text" name="judul" value="{{ old('judul') ?? $dokumen->judul }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-2 mb-2">
        <label for="exampleInputPassword1">Kategori Informasi Publik</label>
          <select name="kategori" class="form-control" id="exampleInputPassword1" placeholder="">
                <option>{{ old('kategori') ?? $dokumen->kategori }}</option>
              <option value="Informasi Berkala">Informasi Berkala</option>
              <option value="Informasi Serta Merta">Informasi Serta Merta</option>
              <option value="Informasi Setiap Saat">Informasi Setiap Saat</option>
              <option value="Informasi Yang Dikecualikan">Informasi Yang Dikecualikan</option>
          </select>
      </div>
      <div class="col-md-2 mb-2">
        <label for="exampleInputPassword1">Jenis Dokumen</label>
            <select name="jenis" class="form-control" id="exampleInputPassword1" placeholder="">
                  <option>{{ old('jenis') ?? $dokumen->jenis }}</option>
                <option value="Profil Badan Publik">Profil Badan Publik</option>
                <option value="Program dan Kegiatan">Program dan Kegiatan</option>
                <option value="Informasi Kinerja">Informasi Kinerja</option>
                <option value="Laporan Keuangan">Laporan Keuangan</option>
                <option value="Laporan dan Prosedur Akses Informasi">Laporan dan Prosedur Akses Informasi</option>
                <option value="Pengaduan dan Pelanggaran">Pengaduan dan Pelanggaran</option>
                <option value="Pengadaan Barang dan Jasa">Pengadaan Barang dan Jasa</option>
                <option value="Informasi Darurat">Informasi Darurat</option>
                <option value="Hasil Penelitian">Hasil Penelitian</option>
                <option value="Regulasi">Regulasi</option>
                <option value="Wabah / Bencana">Wabah / Bencana</option>
                
            </select>
      </div>
      <div class="col-md-1 mb-1">
        <label for="exampleInputEmail1">Tahun</label>
        <input type="text" name="tahun" value="{{ old('tahun') ?? $dokumen->tahun }}" class="form-control" id="exampleInputEmail1" placeholder="2021">
      </div>
      <div class="col-md-7 mb-7">
        <label for="exampleInputFile">Dokumen</label><input type="file" name="file" class="form-control" placeholder="Post Title">
      </div>
    </div>
    <a href="{{ url('/dokumen') }}" class="btn btn-default"> Batal</a>
    <div class="float-right"><button class="btn btn-primary" type="submit">Simpan </button></div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
 </form>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">List Informasi</h3>
    </div>
  <div class="card-body">
    
    <div class="float-right">
        <form action="{{ url('dokumen/cari') }}" class="form-inline" method="GET">
            {{ @csrf_field() }}
        <div class="input-group input-group">
            <input type="text" name="q" value="{{ old('q')}}" class="form-control">
            <span class="input-group-append">
              <button type="submit" class="btn btn-primary btn-flat mb-2"><i class="fas fa-search"></i>Cari</button>

        </form>
    </div>
  </div>
  <table class="table table-sm table-hover ">
      <thead>
        <tr>
          <th scope="col" valign="middle">#</th>
          <th scope="col">JUDUL</th>
          <th scope="col">KATEGORI</th>
          <th scope="col">JENIS DOKUMEN</th>
          <th scope="col">TAHUN</th>
          
          <th scope="col">DOWNLOAD</th>
        </tr>
      </thead>
      @foreach ($listdok as $no=>$master)
      <tbody>
        <tr>
          <th scope="row" valign="middle">{{ ++$no +($listdok->currentPage()-1)*$listdok->perPage() }}</th>
          <td><a href="{{ url('dokumen/'.$master->id) }}/read" class="text-primary"><b>{{ $master->judul }}</b></a></td>
          <td>{{ $master->kategori }}</td>
          <td>{{ $master->jenis }}</td>
          <td>{{ $master->tahun }}</td>
          
          <td><a href="{{ url($master->file) }}" class="btn btn-success">Unduh</a></td>
          
          </tr>
      </tbody>
      @endforeach
    </table><hr>
    <div class="d-flex justify-content-center">{{ $listdok->withQueryString()->links('') }}</div>
</div>
  
@stop

@section('css')
    
@stop

@section('js')
    
@stop

