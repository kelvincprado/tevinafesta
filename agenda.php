<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="imagens/favicon.png" />
  <title>Portal Tevinafesta - Luz/MG - Agenda</title>
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="style/css/plugins.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/navigation.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="style/css/color/blue.css" />
  <link rel="stylesheet" type="text/css" href="style/type/icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,300" rel="stylesheet" type="text/css" />
  <style>
    .tableagenda {
        width: 100%; /* Definir a largura total da tabela */
        border-collapse: collapse; /* Remover espaçamento entre as células */
    }
    th, td {
        padding: 10px; /* Espaçamento interno das células */
        color: white; /* Cor do texto */
        border: none; /* Remover bordas */
    }
    th {
      padding: 10px
    }
    #conteudo-lateral .banner { 
      margin:0px 0px 12px 0px; 
      background: url(img/loading.gif) no-repeat center; 
      background-color:#FFF; 
    }
    #conteudo-lateral .triplo { 
      width:280px; 
      height:275px; 
    } 
    #conteudo-lateral .triplo img { 
      width:280px; 
      height:275px; 
    }
  </style>
</head>

<body>
  <div class="content-wrapper">
    <div class="navbar navbar-default default classic full" role="navigation">
      <div class="navbar-header">
        <div class="navbar-brand">
          <a href="index.php"><img src="imagens/logoTvfesta.png" srcset="" alt="" /></a>
        </div>
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner -->
        </div>
      </div>

      <!-- /.nav-header -->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav sm-vertical">
          <li><a href="agenda.php">Agenda</a></li>
          <li><a href="coberturas.php">Coberturas</a></li>
          <li><a href="noticias.php">Notícias</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->

      <div class="navbar-propaganda">
        <div class="navbar-propaganda--img">
          <a href="#"><img src="imagens/chocofesta.jpeg" alt="" srcset="" /></a>
        </div>
        <div class="navbar-propaganda--img">
          <a href="#"><img src="imagens/anderson.jpeg" alt="" srcset="" /></a>
        </div>
        <div class="navbar-propaganda--img">
          <a href="#"><img src="imagens/chocofesta.jpeg" alt="" srcset="" /></a>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="navbar-footer">
        <ul class="social">
          <li><a href="https://www.facebook.com/portaltevinafesta/" target="_blank"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://twitter.com/tevinafesta" target="_blank"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/tevinafesta/" target="_blank"><i class="ion-social-instagram"></i></a></li>
        </ul>
        <p>© 2016 Juno Studio. Theme by <a href="http://elemisfreebies.com" class="nocolor">elemis</a></p>
      </div>
    </div>
    <!--/.navbar -->

    <div class="side-body">
      <div class="slider">
        <div class="slider--controls">
          <div class="slider--control" onclick="goPrev()">
            <img src="imagens/left-arrow.png" alt="">
          </div>
          <div class="slider--control" onclick="goNext()">
            <img src="imagens/right-arrow.png" alt="" srcset="">
          </div>
        </div>
        <div class="slider--width">
          <div class="slider--item" style="background-image: url('imagens/1.jpg');"></div>
          <div class="slider--item" style="background-image: url('imagens/2.jpg');"></div>
          <div class="slider--item" style="background-image: url('imagens/3.jpg');"></div>
        </div>
      </div>
      <!--
      <div class="rev_slider_wrapper">
        <div id="slider2" class="rev_slider" data-version="5.0">
          <ul>
            <li data-transition="random" data-fstransition="fade"> <img src="style/images/art/slider-bg3.jpg" alt="">
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="70" data-y="top" data-voffset="70"
                data-fontsize="['18','18','18','18']" data-visibility="['on','on','on','off']"
                data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Dapibus Amet Tristique Consectetur</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="70" data-y="top" data-voffset="130"
                data-fontsize="['16','16','16','16']" data-visibility="['on','on','on','off']"
                data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Cras mattis consectetur purus sit amet fermentum</div>
            </li>
            <li data-transition="random"> <img src="style/images/art/slider-bg4.jpg" alt="">
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="70" data-y="bottom"
                data-voffset="130" data-fontsize="['18','18','18','18']" data-visibility="['on','on','on','off']"
                data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Ligula Ullamcorper Ornare Euismod</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="70" data-y="bottom"
                data-voffset="70" data-fontsize="['16','16','16','16']" data-visibility="['on','on','on','off']"
                data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Integer posuere venenatis dapibus posuere</div>
            </li>
            <li data-transition="random"> <img src="style/images/art/slider-bg5.jpg" alt="">
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="['600','600','350','350']"
                data-y="center" data-voffset="-30" data-fontsize="['18','18','18','18']"
                data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Commodo Porta Mattis Vulputate</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="['600','600','350','350']"
                data-y="center" data-voffset="30" data-fontsize="['16','16','16','16']"
                data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on"
                style="z-index: 9;">Vivamus sagittis lacus vel augue laoreet</div>
            </li>
            <li data-transition="fade"><img src="style/video/fish.jpg" alt="" data-bgposition="center center"
                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%"
                data-videoheight="100%" data-videomp4="style/video/fish.mp4" data-videopreload="preload"
                data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="true"
                data-autoplayonlyfirsttime="false" data-nextslideatend="true" data-dottedoverlay="darkoverlay"></div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
  -->

      <div class="container inner">
        <div class="hero text-left">
          <p>Agenda de Eventos</p>
        </div>

        <div class="blog row">
          <div class="col-sm-8 blog-content grid-view">
            
            <table class="tableagenda">
              <thead>
                <tr>
                  <th scope="col">Evento</th>
                  <th scope="col">Dia</th>
                  <th scope="col">Horário</th>
                  <th scope="col">Local</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="imagens/calendario-100.png" alt="" style="width: 50%;"></td>
                  <td>00/00/0000</td>
                  <td>12:00</td>
                  <td>Avenida Paulista, 1000 - Bela Vista, São Paulo</td>
                </tr>
                <tr>
                  <td><img src="imagens/calendario-100.png" alt="" style="width: 50%;"></td>
                  <td>00/00/0000</td>
                  <td>12:00</td>
                  <td>Avenida Paulista, 1000 - Bela Vista, São Paulo</td>
                </tr>
                <tr>
                  <td><img src="imagens/calendario-100.png" alt="" style="width: 50%;"></td>
                  <td>00/00/0000</td>
                  <td>12:00</td>
                  <td>Avenida Paulista, 1000 - Bela Vista, São Paulo</td>
                </tr>
              </tbody>
            </table>
            <!-- /.blog-content -->
            <div class="divide20"></div>

            <div class="pagination">
              <ul>
                <li><a class="btn btn-square btn-icon" href="#"><i class="ion-android-arrow-back"></i></a></li>
                <li class="active"><a class="btn btn-square" href="#"><span>1</span></a></li>
                <li><a class="btn btn-square" href="#"><span>2</span></a></li>
                <li><a class="btn btn-square" href="#"><span>3</span></a></li>
                <li><a class="btn btn-square btn-icon" href="#"><i class="ion-android-arrow-forward"></i></a></li>
              </ul>
            </div>
            <!-- /.pagination -->
          </div>
          <!-- /.blog-content -->

          <aside class="col-sm-4 sidebar">
            <div id="conteudo-lateral">
              <a href="https://www.sicoob.com.br" target="_blank">
                <img src="imagens/ban_1673012917.jpg" class="selected">
              </a>
              <img src="imagens/img_20062020-133317.jpg" alt="" srcset="">
              <img src="imagens/img_20062020-133322.jpg" alt="" srcset="">
            </div>
            <!--
            <div class="banner slidebanners triplo">
              <a href="https://www.sicoob.com.br" target="_blank" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 5; opacity: 1; width: 280px; height: 278px;">
                <img src="imagens/ban_1673012917.jpg">
              </a>
              <a href="https://www.sicoob.com.br" target="_blank" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 278px;">
                <img src="painel/conteudo/banner/ban_1673012909.jpg"></a>
              <a href="https://www.sicoob.com.br" target="_blank" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 278px;">
                <img src="painel/conteudo/banner/ban_1673012913.jpg"></a>
              <a href="https://www.sicoob.com.br" target="_blank" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 278px;">
                <img src="painel/conteudo/banner/ban_1673012917.jpg">
              </a>
            </div>




            <div class="banner slidebanners triplo" style="position: relative;">
        			<img src="painel/conteudo/banner/img_20062020-133305.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 275px;">
              <img src="painel/conteudo/banner/img_20062020-133310.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 275px;">
              <img src="painel/conteudo/banner/img_20062020-133317.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 280px; height: 275px;">
              <img src="painel/conteudo/banner/img_20062020-133322.jpg" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 5; opacity: 1; width: 280px; height: 275px;">
            </div>

  -->
          </aside>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="style/js/jquery.min.js"></script>
  <script type="text/javascript" src="style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
  <script type="text/javascript" src="style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="style/js/plugins.js"></script>
  <script type="text/javascript" src="style/js/scripts.js"></script>
</body>

</html>