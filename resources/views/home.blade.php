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
                  <a style="vertical-align: middle"><i class=" fa fa-2x fa-envelope-o"></i>&nbsp;elmoe@ugm.ac.id</a>
                </div>
                
                </div><!--/panel body-->
              </div><!--/panel-->
            </div><!--/end left column-->
                
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
                  
               </div> 
               </div><!--/panel-->
            </div><!--/end mid column-->
            
            <!-- right content column-->
            <div class="col-md-7" id="content">
                <div class="panel">
                <div class="panel-heading" style="background-color:#111;color:#fff;">Rekomendasi Buku</div>   
                <div class="panel-body">
                  
                  <div class="row">
                  <div class="col-md-12">

                    <!-- Trigger the modal with a button -->
                    <div class="row">
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro1.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro2.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro3.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro4.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro5.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro6.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro7.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro8.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/pro9.jpg" class="img-responsive"></a>
                      <p>Judul &nbsp : </p>
                    </div>
                  </div>                    
                
                  <hr>
                  
                  "Mobile first" and "unobtrusive JavaScript" (AKA: "progressive enhancement") are strategies for when a new site design is being considered. These are related concepts that predated RWD: browsers of basic mobile phones do not understand JavaScript or media queries, so the recommended practice is to create a basic web site then enhance it for smart phones and PCs—rather than try "graceful degradation" to make a complex, image-heavy site work on the most basic mobile phones.
                  <br><br>
                  Media Queries is a CSS3 module allowing content rendering to adapt to conditions such as screen resolution (e.g. smartphone vs. high definition screen). It became a W3C recommended standard in June 2012.[1] and is a cornerstone technology of Responsive Web Design.
                  
                  <hr>
                  
                  <div class="well text-center"> 
                    <h1>Centered Text</h1>
                    This was a 2.x challenge that seems a little easier in 3.
                    <br><br>
                    <div style="font-size:70pt">
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                    </div>
                    
                  </div>
                  
                  <hr>
                  
                  <h2>CSS3</h2>
                  <img src="//placehold.it/150x100/EEEEEE" class="img-responsive pull-right">
                  To understand the RWD approach, you must first understand CSS - the basis of responsive design. CSS enables the developer to use percentage-based (AKA fluid or proportion-based) grids, CSS3 media queries. The web site then adapts to multiple devices (desktop, laptop, tablet, smartphone) and display conditions such as browser size and screen resolution.
  
                  <br><br>
                  <button class="btn btn-default">More</button>
                  
                  <hr>
                  
                   <div class="row">
                    <div class="col-md-6">
                      <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
                      
                    </div> 
                    <div class="col-md-6">
                      <h1>There is still a lot to be said about the Responsive Web.</h1>
                    </div>   
                  </div>
                  
                  <hr>
                
                  <h2>Responsive Text</h2>
                  Have you ever seen large text blocks overflow their container, or get cut-off? One way to handle this is to ensure
                  the text content wraps inside the container. But the more "responsive" way is to scale font-sizes accordingly as the size of the viewing area
                  (viewport) changes. Creators of <a href="http://fittextjs.com/">FitText</a> have mastered this in the form of a plugin.
                
                  <hr>
                  
                  
                  <div class="well"> 
                    <h1>Well..</h1>
                    Does anyone know why <a href="#">@mdo</a> or <a href="#">@fat</a> would name this element a "well"?
                  </div>
  
                  <hr>
                  
                  <h2>Responsive Images</h2>
                  The sizing "grid" is not the only aspect of responsive design. Making images and media object scale correctly is another consideration for responsive developers.
                  <span class="hidden-sm">Go ahead and shrink your browser's width to see how the HTML elements and images respond as the width of the viewport changes.</span>
                                
                  <h1><a href="#"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a></h1>
                
                  <hr>
                  
                  Bootstrap 3 is the latest "Mobile-first" release of the Bootstrap framework that offers a starter foundation for Web designers and developers.
                  Bootstrap consists of a CSS and JavaScript library. To use Bootstrap, you simply include (reference) in the HTML of your Web page. There is also a CDN for 
                  Bootstrap that serves pages faster.
                  
                  <hr>
                  
                  This theme was made at Bootply. Bootply is a HTML, JavaScript and CSS editor app built just for Bootstrap. Bootply enables developers to easily apply the Bootstrap Framework to their projects using a beautiful hand-coding interface. The browser-based Bootply editor lets developers select and paste Bootstrap friendly code snippets. Bootply can be used to test, manage and share any Bootstrap code, from small snippets to entire Bootstrap-ready themes. Find it at http://bootply.com
                  
                  <hr>
                  
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/DDDDDD" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/555555/EEE" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/F3F3F3" class="img-responsive"></a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/999999/DDD" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/CCCCCC" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/E0E0E0" class="img-responsive"></a>
                    </div>
                  </div>
                  
                  <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-xs-4">
                              <img src="img/book1.jpg" class="img-responsive">
                            </div>
                            <div class=col-xs-8>
                              lalalalalala
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                
                  </div><!--/panel-body-->
                </div><!--/panel-->
                <!--/end right column-->
        </div> 
    </div>
</div>
@endsection
