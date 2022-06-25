@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Ubah Profil

@stop

@section('content')

  <form action="{{ url('profil/'.$profil->id) }}/update" method="post" enctype="multipart/form-data" id="upload-file">
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
    <h3 class="card-title">Ubah Profil</h3>
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Desa</label>
        <input type="hidden" name="id" value="{{ old('id') ?? $profil->id }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
          <input type="text" name="desa" value="{{ old('desa') ?? $profil->desa }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Kecamatan</label>
          <input type="text" name="kec" value="{{ old('kec') ?? $profil->kec }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Kabupaten</label>
          <input type="text" name="kab" value="{{ old('kab') ?? $profil->kab }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Provinsi</label>
          <input type="text" name="prov" value="{{ old('prov') ?? $profil->prov }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-4 mb-4">
        <label for="exampleInputEmail1">Alamat</label>
          <input type="text" name="alamat" value="{{ old('alamat') ?? $profil->alamat }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-4 mb-4">
        <label for="exampleInputEmail1">Nomor Kontak</label>
          <input type="text" name="nomor" value="{{ old('nomor') ?? $profil->nomor }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-4 mb-4">
        <label for="exampleInputEmail1">Email</label>
          <input type="text" name="email" value="{{ old('email') ?? $profil->email }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Facebook</label>
          <input type="text" name="fb" value="{{ old('fb') ?? $profil->fb }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Twitter</label>
          <input type="text" name="tw" value="{{ old('tw') ?? $profil->tw }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Instagram</label>
          <input type="text" name="ig" value="{{ old('ig') ?? $profil->ig }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Youtube</label>
          <input type="text" name="yt" value="{{ old('yt') ?? $profil->yt }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
      </div>
      <div class="col-md-12 mb-12">
        <label for="exampleInputEmail1">Tentang (Footer)</label>
          <textarea id="textarea" class="form-control" name="ket" value="" rows="10" cols="100">{{ old('ket') ?? $profil->ket }}</textarea>
      </div>
      
      
    </div>
    <a href="{{ url('/profil') }}" class="btn btn-default"> Batal</a>
    <div class="float-right"><button class="btn btn-primary" type="submit">Ubah </button></div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
 </form>
  
   <script src="https://cdn.tiny.cloud/1/r9g3mww2zvq1dvpk0jfdp9dusxjdejqxugoa0ui1j5i1k1ij/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: 'textarea',
  });
</script>
@stop

@section('css')
    
@stop

@section('js')
    
@stop

