<!DOCTYPE html>
<html lang="<?= $lang ?>">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $description ?>">
        <meta name="keywords" content="<?= $keyword ?>">
        <meta name="author" content="Carlos Souza">
        <meta property="og:title" content="<?= $title ?>">
        <meta property="og:site_name" content="carlossouza.com">
        <meta property="og:description" content="<?= $description ?>">
        <meta property="article:author" content="Carlos Souza">
        <meta property="og:image" content="<?php echo $this->config->item('base_url'); ?>assets/img/about/aaaa.png" >
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="100">
        <meta property="og:image:height" content="100">


        <title><?= $title ?></title>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $this->config->item('base_url'); ?>assets/img/icons/favico.ico" />
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/agency.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            header { background-image: url(<?php echo $this->config->item('base_url'); ?>assets/img/bg/<?= rand(1, 13) ?>.jpg); }
        </style>

    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><?= $name ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services"><?= $services ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio"><?= $portfolio ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about"><?= $about ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team"><?= $social ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact"><?= $contact ?></a>
                        </li>
                        <li>
                            <?= $linkLanguage ?>                            
                        </li>
                        <li>
                            <img src='http://carlossouza.com/portifolio/assets/img/icons/mic-icon.png' height='20' width='20' id="rect" style='margin-bottom: -25px' alt=''>                            
                            <div id="transcription"></div>
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in"><?= $thanks ?></div>
                    <div class="intro-heading"><?= $welcome ?></div>
                    <a href="#services" class="page-scroll btn btn-xl"><?= $takealook ?></a>
                </div>
            </div>
        </header>

        <!-- Services Section -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?= $services ?></h2>
                        <h3 class="section-subheading text-muted"><?= $servicesDescription ?></h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading"><?= $servicesEcommerce ?></h4>
                        <p class="text-muted"><?= $servicesEcommerceDescription ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading"><?= $servicesResponsive ?></h4>
                        <p class="text-muted"><?= $servicesResponsiveDescription ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-signal fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading"><?= $salesGrowing ?></h4>
                        <p class="text-muted"><?= $salesGrowingDescription ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?= $portfolio ?></h2>
                        <h3 class="section-subheading text-muted"><?= $portfolioDescription ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                      <!--  <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/HU.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Hotel Urbano</h4>
                            <p class="text-muted">2013/2014</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--   <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/cape.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>CAPESESP</h4>
                            <p class="text-muted">2012</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                      <!--  <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/mitsuo.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>MITSUO</h4>
                            <p class="text-muted">2014</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--   <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/forca1.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Facebook</h4>
                            <p class="text-muted">2009</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--   <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/estoque.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Stock</h4>
                            <p class="text-muted">2008</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--   <a href="#emBreve"  class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/rede.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>FIOCRUZ</h4>
                            <p class="text-muted">2008</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--   <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/cdc3.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Social network</h4>
                            <p class="text-muted">2011</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                    <!--    <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/timdiversao.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Site for celphone</h4>
                            <p class="text-muted">2012</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                       <!-- <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/tele.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>SMS system</h4>
                            <p class="text-muted">2012</p>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 portfolio-item">
                       <!-- <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/voting.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>SMS system</h4>
                            <p class="text-muted">2012</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--     <a href="#emBreve" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/palpitex.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>SMS system</h4>
                            <p class="text-muted">2012</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                     <!--    <a href="#emBreve" class="portfolio-link" data-toggle="modal"> 
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/folio/Programa-de-Afiliados-v3.jpg" class="img-responsive" alt="" style="max-width: 360px;max-height: 273px;">
                      <!--   </a>-->
                        <div class="portfolio-caption">
                            <h4>Shoptime</h4>
                            <p class="text-muted">2015</p>
                        </div>
                    </div>
AND MUCH MORE....
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?= $about ?></h2>
                        <h3 class="section-subheading text-muted"><?= $aboutDescription ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image" style="background-color: #000">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/1988.jpg" style="background-color: #000" alt=''>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year1988 ?></h4>
                                        <h4 class="subheading"><?= $year1988Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year1988Description ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2004.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2004 ?></h4>
                                        <h4 class="subheading"><?= $year2004Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2004Description ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2006.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2006 ?></h4>
                                        <h4 class="subheading"><?= $year2006Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2006Description ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2007.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2007 ?></h4>
                                        <h4 class="subheading"><?= $year2007Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2007Description ?></p>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2008.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2008 ?></h4>
                                        <h4 class="subheading"><?= $year2008Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2008Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2009.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2009 ?></h4>
                                        <h4 class="subheading"><?= $year2009Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2009Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2010.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2010 ?></h4>
                                        <h4 class="subheading"><?= $year2010Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2010Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2011.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2011 ?></h4>
                                        <h4 class="subheading"><?= $year2011Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2011Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2012.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2012 ?></h4>
                                        <h4 class="subheading"><?= $year2012Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2012Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2013.JPG" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2013 ?></h4>  
                                        <h4 class="subheading"><?= $year2013Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2013Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2014.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2014 ?></h4>
                                        <h4 class="subheading"><?= $year2014Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2014Description ?></p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/about/life/2015.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $year2015 ?></h4>
                                        <h4 class="subheading"><?= $year2015Title ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?= $year2015Description ?></p>
                                    </div>
                                </div>
                            </li>







                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>
                                        <?= $thisIs ?>
                                        <br><?= $justThe ?>
                                        <br><?= $beginning ?>
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?= $social ?></h2>
                        <h3 class="section-subheading text-muted"><?= $socialDescription ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/about/aaaa.png" class="img-responsive img-circle" alt="">
                            <h4>Carlos Souza</h4>
                            <p class="text-muted"><?= $descriptionCarlos ?></p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://twitter.com/carlossouzadev" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/chenrique3" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/profile/view?id=51908770" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted"><?= $socialDescription ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- tools Aside -->
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/tools/php.png" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/tools/mysql.png" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/tools/jquery.png" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="<?php echo $this->config->item('base_url'); ?>assets/img/tools/html5.png" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?= $contact ?></h2>
                        <h3 class="section-subheading text-muted"><?= $contactDescription ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <input type="hidden" name="lang" value="<?= $lang ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="<?= $yourName ?>*" id="name" required data-validation-required-message="<?= $yourNameDescription ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="<?= $yourEmail ?>*" id="email" required data-validation-required-message="<?= $yourEmailDescription ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="<?= $yourPhone ?> *" id="phone" required data-validation-required-message="<?= $yourPhoneDescription ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="<?= $yourMessage ?> *" id="message" required data-validation-required-message="<?= $yourMessageDescription ?>"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl"><?= $sendMessage ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; carlossouza.com 2015</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/carlossouzadev" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/chenrique3" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=51908770" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fcarlossouza.com%2Fportifolio%2F" target="_blank"> <img src="<?php echo $this->config->item('base_url'); ?>assets/img/tools/certified.png" class="img-responsive img-centered" alt="" width="70" height="30" style="margin-top: 15px"></a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio Modals -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="emBreve" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Essa Novidade está saindo....</h2>
                                <p class="item-intro text-muted">Tenha só mais um pouquinho de paciência</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/paciencia.jpg" alt="">
                                <p>"Aquele que tiver paciência terá o que deseja."</p>
                                <p>
                                    <strong>Benjamin Franklin</strong></p>
                                <ul class="list-inline">
                                    <li>Data: 11/03/2015</li>
                                    <li>Feature: Detalhes dos projetos e internacionalização</li>
                                    <li>Status: Em andamento...</li>
                                    <li>Autor: Carlos Souza</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Projeto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 4 -->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 6 -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Teste</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo $this->config->item('base_url'); ?>assets/img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/classie.js"></script>
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/jqBootstrapValidation.js"></script>
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/agency.js"></script>

        <!-- Analytics -->  
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-60678510-1', 'auto');
            ga('send', 'pageview');
        </script>

        <!-- Voice -->
        <script>
            // Test browser support
            window.SpeechRecognition = window.SpeechRecognition ||
                    window.webkitSpeechRecognition ||
                    null;

            //caso nÃ£o suporte esta API DE VOZ                              
            if (window.SpeechRecognition === null) {
                document.getElementById('unsupported').classList.remove('hidden');
            } else {
                var recognizer = new window.SpeechRecognition();
                var transcription = document.getElementById("transcription");
                //Para o reconhecedor de voz, nÃ£o parar de ouvir, mesmo que tenha pausas no usuario
                recognizer.continuous = true
                recognizer.onresult = function(event) {
                    transcription.textContent = "";
                    for (var i = event.resultIndex; i < event.results.length; i++) {
                        if (event.results[i].isFinal) {
                            if (event.results[i][0].transcript == 'serviços') {
                                //  $('#services').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/#services";
                            }
                            if (event.results[i][0].transcript == 'services') {
                                //  $('#services').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/en/#services";
                            }
                            if (event.results[i][0].transcript == 'portifólio') {
                                //  $('#portfolio').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/#portfolio";
                            }
                            if (event.results[i][0].transcript == 'portifolio') {
                                //  $('#portfolio').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/en/#portfolio";
                            }
                            if (event.results[i][0].transcript == 'sobre') {
                                //  $('#about').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/#about";
                            }
                            if (event.results[i][0].transcript == 'about') {
                                //  $('#about').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/en/#about";
                            }
                            if (event.results[i][0].transcript == 'social') {
                                //  $('#team').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/#team";
                            }
                            if (event.results[i][0].transcript == 'contato') {
                                //  $('#contact').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/#contact";
                            }
                            if (event.results[i][0].transcript == 'contact') {
                                //  $('#contact').slideDown('slow');
                                window.location = "http://carlossouza.com/portifolio/en/#contact";
                            }

                            // transcription.textContent = event.results[i][0].transcript + ' (Taxa de acerto [0/1] : ' + event.results[i][0].confidence + ')';
                        } else {
                            transcription.textContent += event.results[i][0].transcript;
                        }
                        recognizer.stop();
                    }
                }
                document.querySelector("#rect").addEventListener("click", function() {
                    try {
                        recognizer.start();
                    } catch (ex) {
                        alert("error: " + ex.message);
                    }
                });
            }
        </script>

    </body>

</html>
