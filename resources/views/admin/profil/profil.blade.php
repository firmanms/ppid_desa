@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Profil

@stop

@section('content')
<style>
    /*
    PDFObject appends the classname "pdfobject-container" to the target element.
    This enables you to style the element differently depending on whether the embed was successful.
    In this example, a successful embed will result in a large box.
    A failed embed will not have dimensions specified, so you don't see an oddly large empty box.
    */
    
    .pdfobject-container {
        width: 100%;
        max-width: 600px;
        height: 600px;
        margin: 2em 0;
    }
    
    .pdfobject { border: solid 1px #666; }
    #results { padding: 1rem; }
    .hidden { display: none; }
    .success { color: #4F8A10; background-color: #DFF2BF; }
    .fail { color: #D8000C; background-color: #FFBABA; }
    </style>

@section('content_header')
    
Detail

@stop

@section('content')
<div class="container-fluid">
    @foreach ($listprofil as $no=>$master)
    <div class="row">
      <div class="col-md-4">

        <!-- Profile Image -->
        
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Detail</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Desa</strong>

            <p class="text-muted">
                {{ $master->desa }}
            </p>

            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Kecamatan</strong>

            <p class="text-muted">
                {{ $master->kec }}
            </p>
    
            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Kabupaten</strong>

            <p class="text-muted">
                {{ $master->kab }}
            </p>

            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Provinsi</strong>

            <p class="text-muted">
                {{ $master->prov }}
            </p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Alamat</strong>

            <p class="text-muted">
                {{ $master->alamat }}
            </p>

            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Nomor Kontak</strong>

            <p class="text-muted">
                {{ $master->nomor }}
            </p>
    
            <hr>
            <div class="d-flex justify-content-between">
                <a href="{{ url('profil') }}" class="btn btn-default"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                <a href="{{ url('profil/'.$master->id) }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                  
                </div>
                
                
          
          </div>
          
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-8">

        <!-- Profile Image -->
        
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Media Sosial dan Footer</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            

            <strong><i class="fas fa-envelope-square"></i> Email</strong>

            <p class="text-muted">
                {{ $master->email }}
            </p>

            <hr>

            <strong><i class="fab fa-facebook-f"></i> Facebook</strong>

            <p class="text-muted">
                <a href="{{ $master->fb }}">{{ $master->fb }}</a>
            </p>
            <hr>

            <strong><i class="fab fa-twitter"></i> Twitter</strong>

            <p class="text-muted">
                <a href="{{ $master->tw }}">{{ $master->tw }}</a>
            </p>
            <hr>

            <strong><i class="fab fa-instagram"></i> Instagram</strong>

            <p class="text-muted">
                <a href="{{ $master->ig }}">{{ $master->ig }}</a>
            </p>
            <hr>

            <strong><i class="fab fa-youtube"></i> Youtube</strong>

            <p class="text-muted">
                <a href="{{ $master->yt }}">{{ $master->yt }}</a>
            </p>
            <hr>

            <strong><i class="fas fa-info"></i> Footer</strong>

            <p class="text-muted">
                {!! $master->ket !!}
            </p>
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      
    </div>
    <!-- /.row -->
  </div>
  @endforeach
   
@stop

@section('css')
    
@stop

@section('js')
    
@stop

