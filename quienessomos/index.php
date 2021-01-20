<?php
require_once('../admin/header.php');
?>
    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading"></span>
            <h1 class=" mb-3"></h1>
            <h3 class="mb-5">Santa Cruz fue fundado pensando en las comunidades que mas necesitan ayuda. Ofrecemos gafas formuladas, con diseño de vanguardia a precios justos, promoviendo proyectos sociales.</h3>
            <p class="mb-4"><a href="#main" class="btn btn-primary">Saber mas</a></p>



          </div>
          <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
              <video class="video" src="../images/daniel.mp4" autoplay loop muted></video>
            </div>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->


    <div class="site-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Nuestra propuesta de valor</h2>
            
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 text-center mx-auto">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0"></li>
              <li data-target="#demo" data-slide-to="1" class="active"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="../images/FotosPersonas/carrouselFirst.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <span class="btn btn-dark"><h3>Promover proyectos sociales</h3></span>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="../images/FotosPersonas/carrouselsec.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                <span class="btn btn-dark"><h3>Diseños de vanguardia</h3></span>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/FotosPersonas/carrouselThird.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                <span class="btn btn-dark"><h3>Precios justos</h3></span>
                  <p></p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Estamos convencidos que SI es posible: ayudar, construir, educar, formar e inspirar nuevas generaciones.</h2>       
          </div>
        </div>
      </div>
    </div>

<?php
require_once('../admin/footer.php');
?>