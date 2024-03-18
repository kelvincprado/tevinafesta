<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="imagens/favicon.png" />
  <title>Portal Tevinafesta - Luz/MG - Notícias</title>
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="style/css/plugins.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="style/revolution/css/navigation.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="style/css/color/blue.css" />
  <link rel="stylesheet" type="text/css" href="style/type/icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,300" rel="stylesheet" type="text/css" />
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
          <!--<li><a href="#!">Home</a></li> -->
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
          <li>
            <a href="https://www.facebook.com/portaltevinafesta/" target="_blank"><i class="ion-social-facebook"></i></a>
          </li>
          <li> 
            <a href="https://twitter.com/tevinafesta" target="_blank"><i class="ion-social-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/tevinafesta/" target="_blank"><i class="ion-social-instagram"></i></a>
          </li>
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
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="70" data-y="top" data-voffset="70" data-fontsize="['18','18','18','18']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Dapibus Amet Tristique Consectetur</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="70" data-y="top" data-voffset="130" data-fontsize="['16','16','16','16']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Cras mattis consectetur purus sit amet fermentum</div>
            </li>
            <li data-transition="random"> <img src="style/images/art/slider-bg4.jpg" alt="">
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="70" data-y="bottom" data-voffset="130" data-fontsize="['18','18','18','18']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Ligula Ullamcorper Ornare Euismod</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="70" data-y="bottom" data-voffset="70" data-fontsize="['16','16','16','16']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Integer posuere venenatis dapibus posuere</div>
            </li>
            <li data-transition="random"> <img src="style/images/art/slider-bg5.jpg" alt="">
              <div class="tp-caption light-layer large" data-x="left" data-hoffset="['600','600','350','350']" data-y="center" data-voffset="-30" data-fontsize="['18','18','18','18']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Commodo Porta Mattis Vulputate</div>
              <div class="tp-caption light-layer medium" data-x="left" data-hoffset="['600','600','350','350']" data-y="center" data-voffset="30" data-fontsize="['16','16','16','16']" data-visibility="['on','on','on','off']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive="on"  data-responsive_offset="on" style="z-index: 9;">Vivamus sagittis lacus vel augue laoreet</div>
            </li>
            <li data-transition="fade"><img src="style/video/fish.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="style/video/fish.mp4" data-videopreload="preload" data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true" data-dottedoverlay="darkoverlay"></div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
-->

      <div class="container inner">
        <div class="hero text-left">
          <p>Notícias</p>
        </div>
        <div class="blog row">
          <div class="col-sm-8 blog-content grid-view">
            <div class="blog-content">
              <div class="row blog-posts">

                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Casas Populares: prefeito Agostinho assina ordem de serviço para construção de 18 imóveis</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">11 Mar 2024</span>
                  </div>
                  <figure>
                    <a href="#"><img src="imagens/exemplo_noticia.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>Residências vão receber telhas coloniais, o que irá proporcionar mais bem-estar no interior e beleza externa. São imóveis com dois dormitórios, sala, cozinha, banheiro e área de serviço.</p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />

                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Casas Populares: prefeito Agostinho assina ordem de serviço para construção de 18 imóveis</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">11 Mar 2024</span>
                  </div>
                  <figure>
                    <a href="#"><img src="imagens/exemplo_noticia.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>Residências vão receber telhas coloniais, o que irá proporcionar mais bem-estar no interior e beleza externa. São imóveis com dois dormitórios, sala, cozinha, banheiro e área de serviço.</p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />

                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Ultricies Fusce Porta Elit</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b3.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros. Maecenas faucibus mollis interdum. Nulla vitae
                      elit libero, a pharetra augue.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />


                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Fringilla Quam Bibendum Magna</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b4.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros. Donec sed odio dui. Curabitur blandit tempus
                      porttitor pharetra augue.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />


                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Mollis Adipiscing Lorem</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b5.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      Curabitur blandit tempus porttitor. Vivamus sagittis
                      lacus vel augue laoreet rutrum faucibus dolor auctor.
                      Duis mollis, est non commodo.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />

                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Fusce Mattis Euismod Ridiculus Tortor</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b6.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      Integer posuere erat a ante venenatis dapibus posuere
                      velit aliquet. Curabitur blandit tempus porttitor nullam
                      dolor blandit tempus.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />


                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Tellus Vulputate Fermentum Dolor</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b7.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      Duis mollis, est non commodo luctus, nisi erat porttitor
                      ligula, eget lacinia odio sem nec elit. Nullam quis
                      risus eget urna mollis ornare vel.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />


                <!-- /.post -->
                <div class="post col-sm-12 col-md-6">
                  <h3 class="post-title text-center">
                    <a href="blog-post.php">Elit Parturient Tristique Malesuada</a>
                  </h3>
                  <div class="meta text-center">
                    <span class="date">12 Nov 2014</span>
                  </div>
                  <figure>
                    <a href="#"><img src="style/images/art/b8.jpg" alt="" /></a>
                  </figure>
                  <div class="post-content">
                    <p>
                      luctus, nisi erat porttitor ligula, eget lacinia odio
                      sem nec elit. Duis mollis, est non commodo luctus, nisi
                      erat porttitor ligula, eget.
                    </p>
                    <a href="blog-post.php" class="more">Read More</a>
                  </div>
                </div>
                <hr />

                
              </div>
              <!-- /.blog-posts -->
            </div>
            <!-- /.blog-content -->

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
            <div class="sidebox widget">
              <h3 class="widget-title">About Us</h3>
              <figure>
                <img src="style/images/art/about.jpg" class="img-auto" alt="" />
              </figure>
              <div class="divide10"></div>
              <p>
                Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum.
              </p>
              <ul class="social">
                <li>
                  <a href="#"><i class="ion-social-rss"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ion-social-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ion-social-vimeo"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ion-social-whatsapp"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->

            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <ul class="post-list">
                <li>
                  <figure class="overlay small">
                    <a href="blog-post.html"><img src="style/images/art/a1.jpg" alt="" />
                    </a>
                  </figure>
                  <div class="post-content">
                    <h4 class="post-title">
                      <a href="blog-post.html">Magna Mollis Ultricies Mauris</a>
                    </h4>
                    <div class="meta">
                      <span class="date">12 Nov 2014</span><span class="category"><a href="#">Urban</a></span>
                    </div>
                  </div>
                </li>
                <li>
                  <figure class="overlay small">
                    <a href="blog-post.html"><img src="style/images/art/a2.jpg" alt="" />
                    </a>
                  </figure>
                  <div class="post-content">
                    <h4 class="post-title">
                      <a href="blog-post.html">Ornare Nullam Risus Cursus</a>
                    </h4>
                    <div class="meta">
                      <span class="date">12 Nov 2014</span><span class="category"><a href="#">Still Life</a></span>
                    </div>
                  </div>
                </li>
                <li>
                  <figure class="overlay small">
                    <a href="blog-post.html"><img src="style/images/art/a3.jpg" alt="" />
                    </a>
                  </figure>
                  <div class="post-content">
                    <h4 class="post-title">
                      <a href="blog-post.html">Euismod Nullam Fusce Dapibus</a>
                    </h4>
                    <div class="meta">
                      <span class="date">12 Nov 2014</span><span class="category"><a href="#">Conceptual</a></span>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- /.post-list -->
            </div>
            <!-- /.widget -->

            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="list circled">
                <li><a href="#">Lifestyle (21)</a></li>
                <li><a href="#">Photography (19)</a></li>
                <li><a href="#">Journal (16)</a></li>
                <li><a href="#">Works (7)</a></li>
                <li><a href="#">Conceptual (12)</a></li>
                <li><a href="#">Videography</a></li>
              </ul>
            </div>
            <!-- /.widget -->

            <div class="sidebox widget">
              <h3 class="widget-title">Tags</h3>
              <ul class="tag-list">
                <li><a href="#" class="btn">Still Life</a></li>
                <li><a href="#" class="btn">Urban</a></li>
                <li><a href="#" class="btn">Journal</a></li>
                <li><a href="#" class="btn">Nature</a></li>
                <li><a href="#" class="btn">Landscape</a></li>
                <li><a href="#" class="btn">Macro</a></li>
                <li><a href="#" class="btn">Workshop</a></li>
                <li><a href="#" class="btn">Photography</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h4 class="widget-title">Search</h4>
              <form class="searchform" method="get">
                <input type="text" id="s1" name="s" value="Search something" onfocus="this.value=''"
                  onblur="this.value='Search something'" />
              </form>
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.blog -->
      </div>
      <!-- /.container -->
    </div>

    <!-- /.side-body -->
  </div>
  <!-- /.content-wrapper -->
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