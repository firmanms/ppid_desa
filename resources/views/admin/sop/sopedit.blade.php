@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Input SOP

@stop

@section('content')

  <form action="{{ url('sop/'.$sop->id) }}/update" method="post" enctype="multipart/form-data" id="upload-file">
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
    <h3 class="card-title">Upload SOP</h3>
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-md-12 mb-12">
        <label for="exampleInputEmail1">Tulisan</label>
        <input type="hidden" name="id" value="{{ old('id') ?? $sop->id }}" class="form-control" id="exampleInputEmail1" placeholder="Profil Desa">
          <textarea id="textarea" class="form-control" name="tulisan" value="" rows="10" cols="100">{{ old('ket') ?? $sop->tulisan }}</textarea>
      </div>
      
      <div class="col-md-9 mb-9">
        <label for="exampleInputFile">Gambar</label><input type="file" name="file" class="form-control" placeholder="Post Title">
      </div>
      <div class="col-md-3 mb-3">
        <label for="exampleInputEmail1">Tampilkan Gambar</label>
        <select name="tampil" class="form-control" id="exampleInputPassword1" placeholder="">
                <option>{{ old('tampil') ?? $sop->tampil }}</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
              
          </select>
      </div>
    </div>
    <a href="{{ url('/$sop') }}" class="btn btn-default"> Batal</a>
    <div class="float-right"><button class="btn btn-primary" type="submit">Simpan </button></div>
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

