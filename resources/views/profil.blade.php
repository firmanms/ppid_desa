<?php $struktur=App\Models\Profil::where("id","1")->first(); ?>
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
    		
    					<center><h2>Profil</h2></center>
    					<table width="100%">
    					    <tr>
    					        <td>Desa</td>
    					        <td>: {{ $struktur->desa }}</td>
    					    </tr>
    					    <tr>
    					        <td>Kecamatan</td>
    					        <td>: {{ $struktur->kec }}</td>
    					    </tr>
    					    <tr>
    					        <td>Kabupaten</td>
    					        <td>: {{ $struktur->kab }}</td>
    					    </tr>
    					    <tr>
    					        <td>Provinsi</td>
    					        <td>: {{ $struktur->prov }}</td>
    					    </tr>
    					    <tr>
    					        <td>Alamat</td>
    					        <td>: {{ $struktur->alamat }}</td>
    					    </tr>
    					    <tr>
    					        <td>Nomor Kontak</td>
    					        <td>: {{ $struktur->nomor }}</td>
    					    </tr>
    					    <tr>
    					        <td>Email</td>
    					        <td>: {{ $struktur->email }}</td>
    					    </tr>
    					</table>
    			</div>	
    					
    				
    		</div>
    	</div>
    </section>
@endsection