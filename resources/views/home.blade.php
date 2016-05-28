@extends('layouts.app') @section('content')

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 style="margin-top:10px !important; text-decoration:none !important"><a href="#" ><span style="color:#77CCDD !important;">Elmoe</span></a>
                <p class="lead">Sistem Rekomendasi Buku Berdasarkan Keminatan</p></h1>
      </div>
    </div>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
  <div class="no-gutter row">
    <!-- left side column -->
    <div class="col-md-2">
      <div class="panel panel-default" id="sidebar">
        <div class="panel-heading" style="background-color:#888;color:#fff;">Layanan UGM</div>
        <div class="panel-body">
          <ul class="nav nav-stacked">
            <li>
              <a href="https://play.google.com/store/apps/details?id=mlibrary.ugm"><img src="img/isc_mlibrary_ugm3.png"></a>
            </li>
            <li>
              <a href="http://lib.ugm.ac.id/ind/?page_id=1498"><img src="img/isc_akses_e-jurnal.png"></a>
            </li>
            <li>
              <a href="http://lib.ugm.ac.id/ind/?page_id=248"><img src="img/isc_etd1.png"></a>
            </li>
            <li>
              <a href="http://i-lib.ugm.ac.id/"><img src="img/isc_jurnal_ugm.png"></a>
            </li>
            <li>
              <a href="http://aspirasi.ugm.ac.id/portal/"><img src="img/siap.png"></a>
            </li>
            <li>
              <a href="http://repository.ugm.ac.id/"><img src="img/isc_repository_ugm1.png"></a>
            </li>
          </ul>
          <hr>

          <div class="col col-span-12">
            <a style="vertical-align: middle"><i class=" fa fa-2x fa-envelope-o"></i>&nbsp;elmoe@ugm.ac.id</a>
          </div>

        </div>
        <!--/panel body-->
      </div>
      <!--/panel-->
    </div>
    <!--/end left column-->

    <!--mid column-->
    <div class="col-md-3">
      <div class="panel" id="midCol">
        <div class="panel-heading" style="background-color:#555;color:#eee;">Profil Mahasiswa</div>
        <div class="panel-body">
          <div class="well">
            <img class="img-responsive img-thumbnail" style="border-radius:50%; display: block; margin-left: auto; margin-right: auto" src="img/user_blank.jpg">
            <h3><a>{{ Auth::user()->name }}</a></h3>
            <h4>{{ Auth::user()->nim }}</h4>
            <h4>{{ Auth::user()->fakultas }}</h4>


            <h4>Peminatan : <a>{{ Auth::user()->minat }}</a> </h4>
          </div>

          <hr>

          <h3>Top Members</h3>

          <h5><a href="#"><i class="fa fa-user"></i> Misbach Imaduddin Zuhdi</a></h5>
          <h5><a href="#"><i class="fa fa-user"></i> A'isya Nur Aulia Yusuf</a></h5>
          <h5><a href="#"><i class="fa fa-user"></i> Luthfan Nur Ubai</a></h5>
          <h5><a href="#"><i class="fa fa-user"></i> Vinsensies Satya</a></h5>

        </div>
      </div>
      <!--/panel-->
    </div>
    <!--/end mid column-->

    <!-- right content column-->
    <div class="col-md-7" id="content">
      <div class="panel">
        <div class="panel-heading" style="background-color:#111;color:#fff;">Rekomendasi Buku</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                @foreach ($booksList as $bookView)
                <!-- Trigger the modal with a button -->


                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#myModal<?php echo $bookView->id_book;?>"><img src="img/pro<?php echo $bookView->id_book;?>.jpg" class="img-responsive"></a>
                  <br>
                </div>

                @endforeach
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
                <div class="col-md-3">
                  <a href="#" data-toggle="modal" data-target="#"><img src="img/book.jpg" class="img-responsive"></a>
                  <br>
                </div>
              </div>



              @foreach ($booksList as $bookView)
              <!-- Modal -->
              <div id="myModal<?php echo $bookView->id_book;?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->

                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Detail Buku</h4>
                    </div>
                    
                      <div class="col-xs-4">
                        <img src="img/pro<?php echo $bookView->id_book;?>.jpg" class="img-responsive">
                      </div>
                      <div class=col-xs-8>
                        <table class="table table-hover">

                          <tbody>
                            <tr>
                              <td><strong>Judul</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->judul}}</td>
                            </tr>
                            <tr>
                              <td><strong>Pengarang</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->pengarang}}</td>
                            </tr>
                            <tr>
                              <td><strong>Penerbit</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->penerbit}}</td>
                            </tr>
                            <tr>
                              <td><strong>Tahun</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->tahun}}</td>
                            </tr>
                            <tr>
                              <td><strong>Lokasi</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->lokasi}}</td>
                            </tr>
                            <tr>
                              <td><strong>Tag</strong></td>
                              <td>:</td>
                              <td>{{ $bookView->tag}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              @endforeach
            </div>



            <!--/panel-body-->
          </div>
          <!--/panel-->
          <!--/end right column-->
        </div>
      </div>
    </div>
    @endsection