@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
Pemohon

@stop

@section('content')

  
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Pemohon</h3>
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-md-12 mb-12">
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQs2ptAiCiEa3rx_0i_OCSFiaIT4rzCohctKIW6gZ5AZf7okgOpcsVLvxK34Y-B9HYe7av5EWQ96FUJ/pubhtml?gid=1833759311&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="800"></iframe>
  <!-- /.card-body -->
</div>
<!-- /.card -->
 
  
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

