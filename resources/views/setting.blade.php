@extends('layouts.app')

@section('content')

<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="margin-top:10px !important"><a href="#" title="Scroll down for your viewing pleasure">Elmoe</a>
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
              <li><a href="https://play.google.com/store/apps/details?id=mlibrary.ugm"><img src="img/isc_mlibrary_ugm3.png"></a></li>
              <li><a href="http://lib.ugm.ac.id/ind/?page_id=1498"><img src="img/isc_akses_e-jurnal.png"></a></li>
              <li><a href="http://lib.ugm.ac.id/ind/?page_id=248"><img src="img/isc_etd1.png"></a></li>
              <li><a href="http://i-lib.ugm.ac.id/"><img src="img/isc_jurnal_ugm.png"></a></li>
              <li><a href="http://aspirasi.ugm.ac.id/portal/"><img src="img/siap.png"></a></li>
              <li><a href="http://repository.ugm.ac.id/"><img src="img/isc_repository_ugm1.png"></a></li>
                    </ul>                 
                  <hr>

                <div class="col col-span-12">
                  <i class=" fa fa-2x fa-envelope-o"></i>&nbsp;elmoe@ugm.ac.id
                </div>
                
                </div><!--/panel body-->
              </div><!--/panel-->
            </div><!--/end left column-->
            
            <!-- right content column-->
            <div class="col-md-10" id="content">
                <div class="panel">
                <div class="panel-heading" style="background-color:#111;color:#fff;">Setting</div>   
                <div class="panel-body">
                  
                  <div class="row">
                  <form role="form" class="form-horizontal form-groups-bordered" method="post" action="index.html" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value={{ Auth::user()->name }} readonly="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">NIM</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value={{ Auth::user()->nim }} readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Fakultas</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value={{ Auth::user()->fakultas }} readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Minat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value={{ Auth::user()->minat }}>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <button type="submit" class="btn btn-primary"><i class="entypo-check"></i> Simpan</button>
                                        <button class="btn btn-teal"><i class="entypo-check" onclick="goBack()"></i> Kembali</button>
                                    </div>
                                </div>
                            </form>
                </div>
                
                  <hr>
                  
                  
                  
                  
                
                  </div><!--/panel-body-->
                </div><!--/panel-->
                <!--/end right column-->
        </div> 
    </div>
</div>
@endsection

@section('body.script')
<script>
function goBack() {
    window.history.back();
}
</script>
@show