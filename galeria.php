<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sra Costa Rica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/imagehover.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mediaquerys.css">
  <link rel="stylesheet" href="css/thumbnail-slider.css">
  <link rel="stylesheet" href="css/thumbs2.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body>
    <div class="menu-fixed">
        <header>
            <div class="container-fluid hidden-xs hidden-sm">
                <div class="logo col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <a href="index.html">
                        <h1 class="txt-white">SEÑORA</h1>
                        <h3 class="txt-white font-26">COSTA RICA</h3>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                    <div class="clearfix">
                        <nav class="navbar navbar-default" id="menu-responsive" role="navigation">
                            <ul class="nav navbar-nav" id="liste1">
                                <li>
                                    <a href="index.html">Inicio</a>
                                </li>
                                <li>
                                    <a href="nosotros.html">Quiénes Sómos</a>
                                </li>
                                <li>
                                    <a href="historia.html">Historia</a>
                                </li>
                                <li>
                                    <a href="noticias.html">Noticias</a>
                                </li>
                                <li>
                                    <a href="galeria.php">Galería</a>
                                </li>
                                <li>
                                    <a href="inscripciones.php">Inscripciones</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/sracostarica" target="_blank">
                                        <img src="img/facebook-logo.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/sracostarica" target="_blank">
                                        <img src="img/instagram-logo.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div id="app" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <!-- BTN menu responsive -->
                    <div class="btn-menu-responsive menu-close">
                        <div class="in-btn-menu-responsive">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- END BTN menu responsive -->
                </div>
            </div>


            <!-- MENU 768PX -->
            <div class="container-fluid  hidden-lg hidden-md">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html">
                        <!-- <img src="img/logotipo1.png"> -->
                        <h1 class="txt-white">SEÑORA</h1>
                        <h3 class="txt-white font-26">COSTA RICA</h3>
                      </a>
                    </div>
                    <div id="navbar2" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>
                            <a href="nosotros.html">Quiénes Sómos</a>
                        </li>
                        <li>
                            <a href="historia.html">Historia</a>
                        </li>
                        <li>
                            <a href="noticias.html">Noticias</a>
                        </li>
                        <li>
                            <a href="galeria.php">Galería</a>
                        </li>
                        <li>
                            <a href="inscripciones.php">Inscripciones</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="https://www.facebook.com/sracostarica" target="_blank">
                                <img src="img/facebook-logo.png" alt="">
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="https://www.instagram.com/sracostarica" target="_blank">
                                <img src="img/instagram-logo.png" alt="">
                            </a>
                        </li>
                      </ul>
                    </div>
                    <!--/.nav-collapse -->
                  </div>
                  <!--/.container-fluid -->
                </nav>
            </div>
        </header>
    </div>
    <section id="parallax">
        <div class="banner-galeria aniview slow" data-av-animation="fadeIn">
            <div class="logotipo img-wrapper aniview" data-av-animation="slideInUp" >
                <img src="img/logotipo.png" alt="">
            </div>
        </div>
    </section>
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                         <div class="carousel-recs carousel-container">
                            <!-- BODY -->
                            <div class="carousel-body Gala2008 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2008");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2008/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2009 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2009");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 2){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2009/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body fundacion2010 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2010/fundacion");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2010/fundacion/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2010 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2010/noche-final");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2010/noche-final/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body candidatas2012 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2012/candidatas");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2012/candidatas/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body fundacion2012 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2012/fundacion");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2012/fundacion/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2012 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2012/noche-final");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2012/noche-final/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body candidatas2015 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2015/candidatas");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 5){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2015/candidatas/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body fundacion2015 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2015/fundacion");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2015/fundacion/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2015 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2015/noche-final");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2015/noche-final/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body candidatas2016 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2016/candidatas");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2016/candidatas/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body fundacion2016 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2016/fundacion");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2016/fundacion/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2016 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2016/noche-final");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2016/noche-final/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body candidatas2017 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2017/candidatas");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 3){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2017/candidatas/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body fundacion2017 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2017/fundacion");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 6){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2017/fundacion/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-body Gala2017 hidden">
                                <ul class="carousel-list">
                                    <?php
                                        $puntero = opendir("img/Galeria/sra-2017/noche-final");
                                        $img = 0;
                                        while(false!==($imagenes=readdir($puntero))){
                                            if($imagenes!= "." && $imagenes != ".."){
                                            if($img < 3){
                                                echo "<li class='carousel-listitem'>";
                                                echo "<img class='carousel-itemlink' src = 'img/Galeria/sra-2017/noche-final/$imagenes' width = '100%'></img>";
                                                echo "</li>";
                                            }
                                            $img++;
                                            }
                                        }
                                        closedir($puntero);
                                    ?>
                                </ul>
                            </div>
                            <div class="carousel-header text-center">
                            <div class="header-paging">
                                <a href="#" class="carousel-prev-rec">< </a>|
                                <a href="#" class="carousel-next-rec"> ></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id ="cerrar" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <div class="section-wrapper-images">
        <h2 class="text-center txt-pink title-great font-60 aniview"  data-av-animation="flipInY">Galería de imágenes</h2>
        <div class="container-fluid not-padding-col">
            <div class="clearfix">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2008/principal-2008.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala Final Señora Costa Rica 2008</h2>
                                <a class="info slider-galeria" id="gala-2008" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2009/principal-2009.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2009</h2>
                            <a class="info slider-galeria" id="gala-2009" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2010/fundacion/principal-2010.jpg" alt="">
                        <div class="overlay">
                            <h2> Evento fundación 2010</h2>
                            <a class="info slider-galeria" id="fundacion-2010" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2010/noche-final/principal-2010.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2010</h2>
                            <a class="info slider-galeria" id="gala-2010" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2012/candidatas/principal-2012.jpg" alt="">
                        <div class="overlay">
                            <h2>Candidatas Señora Costa Rica 2012</h2>
                            <a class="info slider-galeria" id="candidatas-2012" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2012/fundacion/principal-2012.jpg" alt="">
                        <div class="overlay">
                            <h2>Evento fundacion 2012</h2>
                            <a class="info slider-galeria" id="fundacion-2012" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2012/noche-final/principal-2012.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2012</h2>
                            <a class="info slider-galeria" id="gala-2012" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2015/candidatas/principal-2015.jpg" alt="">
                        <div class="overlay">
                            <h2>Candidatas Señora Costa Rica 2015</h2>
                            <a class="info slider-galeria" id="candidatas-2015" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2015/fundacion/principal-2015.jpg" alt="">
                        <div class="overlay">
                            <h2>Evento fundación 2015</h2>
                            <a class="info slider-galeria" id="fundacion-2015" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2015/noche-final/principal-2015.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2015</h2>
                            <a class="info slider-galeria" id="gala-2015" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2016/candidatas/principal-2016.jpg" alt="">
                        <div class="overlay">
                            <h2>Candidatas Señora Costa Rica 2016</h2>
                            <a class="info slider-galeria" id="candidatas-2016" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2016/fundacion/principal-2016.jpg" alt="">
                        <div class="overlay">
                            <h2>Evento fundación 2016</h2>
                            <a class="info slider-galeria" id="fundacion-2016" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2016/noche-final/principal-2016.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2016</h2>
                            <a class="info slider-galeria" id="gala-2016" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2017/candidatas/principal-2017.jpg" alt="">
                        <div class="overlay">
                            <h2>Candidatas Señora Costa Rica 2017</h2>
                            <a class="info slider-galeria" id="candidatas-2017" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2017/fundacion/principal-2017.jpg" alt="">
                        <div class="overlay">
                            <h2>Evento fundación 2017</h2>
                            <a class="info slider-galeria" id="fundacion-2017" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 not-padding-col">
                    <div class="hovereffect-galeria aniview"  data-av-animation="flipInX">
                        <img class="img-responsive" src="img/Galeria/sra-2017/noche-final/principal-2017.jpg" alt="">
                        <div class="overlay">
                            <h2>Gala final Señora Costa Rica 2017</h2>
                            <a class="info slider-galeria" id="gala-2017" href="#" data-toggle="modal" data-target="#exampleModal">Ver más imagenes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="galeria-videos">
        <div class="container-fluid not-padding-col">
            <h3 class="text-center title-news font-26 aniview"  data-av-animation="flipInY">Galería de videos</h3>
            <div class="clearfix">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item  cboxElement" href="https://www.youtube.com/embed/ynWQMn-EPK8" title="Niña Símbolo Señora Costa Rica 2017" target="_blank">
                            <img src="http://img.youtube.com/vi/ynWQMn-EPK8/mqdefault.jpg" alt="Niña Símbolo Señora Costa Rica 2017" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item cboxElement" href="https://www.youtube.com/embed/EG-yHyT656M" title="Cápsulas Señora Costa Rica 2017" target="_blank">
                            <img src="http://img.youtube.com/vi/EG-yHyT656M/mqdefault.jpg" alt="Cápsulas Señora Costa Rica 2017" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item cboxElement"  href="https://www.youtube.com/embed/4Qs-XGV6eEs" title="Video Playa 2016" target="_blank">
                            <img src="http://img.youtube.com/vi/4Qs-XGV6eEs/mqdefault.jpg" alt="Video Playa 2016" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item  cboxElement" href="https://www.youtube.com/embed/3Okd_PxIUQ0" title="Himno Señora Costa Rica" target="_blank">
                            <img src="http://img.youtube.com/vi/3Okd_PxIUQ0/mqdefault.jpg" alt="Himno Señora Costa Rica" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item cboxElement" href="https://www.youtube.com/embed/CccnBC9Xq9Y" title="Visita Fundación 2016" target="_blank">
                            <img src="http://img.youtube.com/vi/CccnBC9Xq9Y/mqdefault.jpg" alt="Visita Fundación 2016" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item  cboxElement" href="https://www.youtube.com/embed/madNn9v_5CU" title="Niña Símbolo Señora Costa Rica 2016" target="_blank">
                            <img src="http://img.youtube.com/vi/madNn9v_5CU/mqdefault.jpg" alt="Niña Símbolo Señora Costa Rica 2016" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item  cboxElement" href="https://www.youtube.com/embed/ePHjg016His" title="Video Patrocinadores" target="_blank">
                            <img src="http://img.youtube.com/vi/ePHjg016His/mqdefault.jpg" alt="Video Patrocinadores" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 not-padding-col">
                    <div class="image-block_1 aniview"  data-av-animation="zoomIn">
                        <a class="youtube huge_it_videogallery_item cboxElement" href="https://www.youtube.com/embed/08KGgZ4qalI" title="Ex Participantes Sra. Costa Rica" target="_blank">
                            <img src="http://img.youtube.com/vi/08KGgZ4qalI/mqdefault.jpg" alt="Ex Participantes Sra. Costa Rica" style="width:100%; opacity: 0.8;">
                            <div class="icon-play">
                                <img src="img/play.png" alt="">
                            </div>
                        </a>								
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="aniview"  data-av-animation="zoomIn">
        <div class="bgpink">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="information-footer">
                            <p class="copyright">
                                Derechos reservados, Señora Costa Rica 2018
                            </p>
                            <p class="tel-email">
                                <a href="mailto:info@sracostarica.com">info@sracostarica.com</a>
                            </p>
                            <p>
                                <a href="https://www.facebook.com/sracostarica" class="icon" target="_blank">
                                    <img src="img/facebook-negro.png" alt="">
                                </a>
                                <a href="https://www.instagram.com/sracostarica" class="icon" target="_blank">
                                    <img src="img/instagram-negro.png" alt="">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.aniview.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/thumbnail-slider.js"></script>  
    <script src ="js/main.js"></script>
</body>




</html>