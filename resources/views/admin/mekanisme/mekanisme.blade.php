@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Mekanisme

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
    @foreach ($liststruktur as $no=>$master)
    <div class="row">
      <div class="col-md-8">

        <!-- Profile Image -->
        
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Detail</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            

            <p class="text-muted">
                {!! $master->tulisan !!}
            </p>
    
            <hr>
            <div class="d-flex justify-content-between">
                <a href="{{ url('mekanisme') }}" class="btn btn-default"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                <a href="{{ url('mekanisme/'.$master->id) }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                  
                </div>
                
                
          
          </div>
          
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-4">

        <!-- Profile Image -->
        
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Gambar</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="text-muted">
                <img src="{{ url($master->file) }}" width="100%">
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

