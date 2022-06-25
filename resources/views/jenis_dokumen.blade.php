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
    		    <div class="col-md-12">
    		        <center><h1>Jenis Dokumen</h1></center>
    		        <div class="tabs">
                      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Profil Badan Publik</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">Program dan Kegiatan</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Informasi Kinerja</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyoa')">Laporan Keuangan</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyob')">Laporan dan Prosedur Akses Informasi</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyoc')">Pengaduan dan Pelanggaran</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyod')">Pengadaan Barang dan Jasa</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyoe')">Informasi Darurat</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyof')">Hasil Penelitian</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyog')">Regulasi</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyoh')">Wabah / Bencana</button>
                    </div>

                    <div id="London" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Profil Badan Publik")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Profil Badan Publik")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Profil Badan Publik")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Paris" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Program dan Kegiatan")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Program dan Kegiatan")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Program dan Kegiatan")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyo" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Informasi Kinerja")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Informasi Kinerja")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Informasi Kinerja")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyoa" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Laporan Keuangan")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Laporan Keuangan")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Laporan Keuangan")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyob" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Laporan dan Prosedur Akses Informasi")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Laporan dan Prosedur Akses Informasi")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Laporan dan Prosedur Akses Informasi")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyoc" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Pengaduan dan Pelanggaran")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Pengaduan dan Pelanggaran")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Pengaduan dan Pelanggaran")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyod" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Pengadaan Barang dan Jasa")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Pengadaan Barang dan Jasa")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Pengadaan Barang dan Jasa")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyoe" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Informasi Darurat")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Informasi Darurat")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Informasi Darurat")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyof" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Hasil Penelitian")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Hasil Penelitian")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Hasil Penelitian")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyog" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Regulasi")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Regulasi")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Regulasi")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
                    
                        <div id="Tokyoh" class="tabscontent">
                      <b>1. Informasi Berkala</b>
                      <?php $infobadanpublik=App\Models\Dokumenup::where("jenis","Wabah / Bencana")->where("kategori","Informasi Berkala")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($infobadanpublik as $no=>$master)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($infobadanpublik->currentPage()-1)*$infobadanpublik->perPage() }}</th>
                    <td>{{ $master->judul }}</td>
                    <td>{{ $master->jenis }}</td>
                    <td>{{ $master->tahun }}</td>
                    <td><a href="{{ url($master->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $infobadanpublik->withQueryString()->links('') }}</div>
              
              <b>2. Informasi Serta Merta</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Wabah / Bencana")->where("kategori","Informasi Serta Merta")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
              
              <b>3. Informasi Setiap Saat</b>
                      <?php $prog=App\Models\Dokumenup::where("jenis","Wabah / Bencana")->where("kategori","Informasi Setiap Saat")->paginate(100); ?>
                      
                      <table class="table table-sm table-hover " style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col" valign="middle">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">DOKUMEN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col"><i class="fas fa-download"></i></th>
                  </tr>
                </thead>
                @foreach ($prog as $no=>$masterprog)
                <tbody>
                  <tr>
                    <th scope="row" valign="middle">{{ ++$no +($prog->currentPage()-1)*$prog->perPage() }}</th>
                    <td>{{ $masterprog->judul }}</td>
                    <td>{{ $masterprog->kategori }}</td>
                    <td>{{ $masterprog->tahun }}</td>
                    <td><a href="{{ url($masterprog->file) }}" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                    
                    </tr>
                </tbody>
                @endforeach
              </table><hr>
              <div class="d-flex justify-content-center">{{ $prog->withQueryString()->links('') }}</div>
                    </div>
    		    </div>
    		</div>
    	</div>
    </section>

    @endsection