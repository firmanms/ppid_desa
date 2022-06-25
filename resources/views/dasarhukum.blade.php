<?php $struktur=App\Models\Dasarhukum::where("id","1")->first(); ?>
@extends('frontmaster')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row ">
    		    <div class="col-md-12">
    		
    					<center><h2>Dasar Hukum</h2></center>
    					{!! $struktur->tulisan !!}
    					<?php 
    					$filena=$struktur->file;
    					if($struktur->tampil=="Ya"){
    					    $tampil="<img src='".url($struktur->file)."' width='100%'>";
    					}else{
    					    $tampil="";
    					}
    					?>
    					<center>{!!$tampil!!}</center>
    			</div>	
    					
    				
    		</div>
    	</div>
    </section>
@endsection