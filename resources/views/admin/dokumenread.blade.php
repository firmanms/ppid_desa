<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf

?>
@extends('adminlte::page')

@section('title', 'Dashboard')
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
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Detail</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Judul</strong>

            <p class="text-muted">
                {{ $dokumen->judul }}
            </p>

            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Kategori</strong>

            <p class="text-muted">{{ $dokumen->kategori }}</p>

            <hr>

            <strong><i class="fas fa-file-alt mr-1"></i> Jenis Dokumen</strong>

            <p class="text-muted">
                {{ $dokumen->jenis }}
            </p>

            <hr>

            <strong><i class="far fa-calendar"></i> Tahun</strong>

            <p class="text-muted">{{ $dokumen->tahun }}</p>
            <div class="d-flex justify-content-between">
                <a href="{{ url('dokumen/'.$dokumen->id) }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                  <form action="{{ url('dokumen/'.$dokumen->id) }}/delete" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" onclick="return confirm('Anda Yakin?')" class= "btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                  </form>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                  <a href="{{ url('dokumen') }}" class="btn btn-default"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                </div>
          
          </div>
          
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">File</h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <embed src="{{ url($dokumen->file) }}" width="100%" height="600"> </embed>
                
                
                
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  @stop

@section('css')
    
@stop

@section('js')

    
@stop
