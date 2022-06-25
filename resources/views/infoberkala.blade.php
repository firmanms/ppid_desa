@extends('frontmaster')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
    				<div class="intro row text-center justify-content-center">
    					<div class="col-md-9">
    						
    					</div>
    					<!--<h2 class="mb-4">Hasil Pencarian</h2>-->
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
                @foreach ($infoberkala as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infoberkala->currentPage()-1)*$infoberkala->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->kategori }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    
                    <td><a href="{{ url($master->file) }}" class="btn btn-success">Unduh</a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infoberkala->withQueryString()->links('') }}</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @endsection