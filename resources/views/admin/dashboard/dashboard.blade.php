@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Dashboard

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
    <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$informasi_berkala}}</h3>

                <p>Informasi Bekala</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$informasi_serta}}</h3>

                <p>Informasi Serta Merta</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$informasi_setiap}}</h3>

                <p>Informasi Setiap Saat</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$doklist}}</h3>

                <p>Jumlah Dokumen</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <!-- ./col -->
          <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQs2ptAiCiEa3rx_0i_OCSFiaIT4rzCohctKIW6gZ5AZf7okgOpcsVLvxK34Y-B9HYe7av5EWQ96FUJ/pubhtml?gid=1833759311&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="800"></iframe>
        </div>
        <!-- /.row -->
   
</div>
  
   
@stop

@section('css')
    
@stop

@section('js')
    
@stop

