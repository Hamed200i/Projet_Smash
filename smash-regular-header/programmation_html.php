<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/shortcut_code.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>AllConnect pages prog HTML</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <div class="preloader">
        <div class="preloader-img">
        	<img src="assets/img/loading-bars.svg" width="100" alt="Loading icon" />
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-shrink bounceInDown">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AllConnect</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">AllConnect <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.html">Home AllConnect </a></li>
                            <!-- <li><a href="index-video.html">Home Santé</a></li> -->
                            <!-- <li><a href="index-onepager.html">Home programmation</a></li> -->
                            <li><a href="../nb1/contact-us-1.html">Contactez nous</a></li>
                            <li><a href="../nb1/about-us-1.html">A propos </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Programmations <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <!-- //changing in this -->
                            <li><a href="index_programmation.html">Home Programmation </a></li>
                            <li><a href="#">Nos services </a></li>
                            <li><a href="../nb1/about_prog.html">Petit à propos </a></li>
                            <li><a href="glossaire_web.html">Glossaire du prog</a></li>
                            <!-- <li><a href="single-post-gallery.html">Single Post Gallery</a></li> -->
                            <!-- <li><a href="single-post-gallery-fullwidth.html">Single Post Gallery Fullwidth</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Santés<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <!-- changingin this -->
                            <li><a href="index-santé.html">Home Santé </a></li>
                            <li><a href="#">Symptômes </a></li>
                            <li><a href="#">Pilules </a></li>
                            <li><a href="#">Petit à propos </a></li>
                        </ul>
                    </li>
                    <!--li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Portfolio <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                            <li><a href="single-portfolio-gallery.html">Single Portfolio Gallery</a></li>
                            <li><a href="single-portfolio-video.html">Single Portfolio Video</a></li>
                            <li><a href="filterable-portfolio-3-col.html">Filterable Portfolio 3 Columns</a></li>
                            <li><a href="filterable-portfolio-4-col.html">Filterable Portfolio 4 Columns</a></li>
                        </ul>
                    </li-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Header -->
    <header id="headerwrap" class="fullheight">       
        <div class="carousel slide article-slide carousel-fade fullheight" id="article-photo-carousel">             
            <!-- Wrapper for slides -->
            <div class="carousel-inner cont-slider">
                <div class="item active">
                    <img class="img-resposive" alt="" title="" src="assets/img/portfolio/1bannier.jpg">
                    <div class="carousel-caption">
                        <h2>Programmer en toute sincérité</h2>
                    </div>
                </div>
                <div class="item">
                    <img class="img-resposive" alt="" title="" src="assets/img/bg/font_1.jpg">
                    <div class="carousel-caption">
                        <h2>Programmer en toute sincérité</h2>
                    </div>
                </div>
                <div class="item">
                    <img class="img-resposive" alt="" title="" src="assets/img/bg/font_3.jpg">
                    <div class="carousel-caption">
                        <h2>Programmer en toute sincérité</h2>
                    </div>
                </div>
                <div class="item">
                    <img class="img-resposive" alt="" title="" src="assets/img/portfolio/4bannier.jpg">
                    <div class="carousel-caption">
                        <h2>Programmer en toute sincérité</h2>
                    </div>
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                    <img alt="" src="assets/img/portfolio/1bannier.jpg">
                </li>
                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                    <img alt="" src="assets/img/bg/font_1.jpg">
                </li>
                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                    <img alt="" src="assets/img/bg/font_3.jpg">
                </li>
                <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                    <img alt="" src="assets/img/portfolio/4bannier.jpg">
                </li>
            </ol>
        </div>
    </header>

    <div id="header-div1">
        <div class="wrapist">
            <div class="wrapist-title">
                <h1>Bienvenue au cours sur le html !</h1>
            </div>
        </div>
    </div>

    <div class="list-tags">
        <div class="wrapist2">
            <div class="contain-ul">
                <ul class="list-tags">
                    <li class="active" data-anim="1">
                        <a href="programmation_html.php">ACCUEIL</a>
                    </li>
                    <li class="onglets" data-anim="2">
                        <a href="programmation_AllConnect/HTML/contenu_html.php">CONTENU</a>
                    </li>
                    <li class="onglets" data-anim="3">
                        <a href="#">ARTICLES</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>

    <!-- About Section -->
    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="0s">
                        <div id="post-content" class="gap row">
                            <div class="col-md-12">
                                <div class="tabs-content">

                                    <!-- je dois structurer en php*************************** -->
                                    <div id="accuel_html">
                                        <h2 class="h2_pro">Présentation </h2>
                                            <p>
                                                Le langage HTML intervient pour la création de site web. C’est un langage facile à apprendre qui permet de définir le contenu des pages web
                                                HTML est devenu un langage incontournable pour internet. Le HTML est simple, et vous permet de mettre en place un site internet gratuitement. <br> <br>
                                                HTML (HyperText Markup Language) est un langage de description de pages Web. Il permet de présenter les documents hypertextes. Apprendre HTML constitue le premier pas pour pouvoir aller plus loin en développement Web et ainsi être en mesure de créer des sites et applications Web professionnels.
                                                HTML est un langage simple et intuitif et il est structuré sous forme de balises qui s'imbriquent pour donner naissance à une page présentable sur le navigateur.
                                            </p>

                                        <h2 class="h2_pro">Comment fonctionne le HTML </h2>
                                            <p>
                                                Le HTML fournir au navigateur des instructions sur le contenu à afficher (texte, images..). Il utilise des balises. La balise HTML permet de décrire plus exactement le contenu qu’elle contient. Dans l’exemple ci-dessous, la balise (h1) spécifie que c’est un titre et (p) spécifie que la section de texte est un bloc paragraphe. <br> <br>
                                                Il s'agit d'un langage coté client (tout comme CSS et Javascript). Il est supporté et développé par W3C. <br> <br>
                                                Pour créer une page HTML, il faut commencer par créer la structure de la page (voir l’exemple visuel ci-dessous). Le doctype spécifie la version du langage html qui sera utilisée pour le site. La balisereprésente tout le document et englobe tous les autres éléments. La balisereprésente l’entête de page et fournit des informations au navigateur. La balisecontiendra tous les
                                                éléments à afficher dans la page Cette commande permet d’éditer un paragraphe dans le document HTML.
                                            </p>

                                        <h2 class="h2_pro">Petit conseil de formateur !</h2>
                                            <p>
                                                Vous avez sans doute remarqué dans les propriétés de ce cours que ce dernier est destiné aux débutants. Il n'est donc pas nécessaire d'être un informaticien chevronné pour en tirer profit. Tout ce dont vous avez besoin c'est de la patience, être à l'aise avec le clavier, avoir un minimum de notions en informatique et en traitement de texte, être passionné et en fin, être un grand amateur de navigation sur le Web.
                                                <br><br>
                                                Si vous rencontrez un terme que vous ne comprenez pas, allez jeter un œil sur notre <a href="glossaire_web.html"> dictionnaire en ligne </a>. Nous avons essayé d'expliquer brièvement les termes les plus courants dans le jargon du développement Web. <br> <br>
                                                Quand je dis "apprendre à utiliser le langage" ne veut dire en aucun cas que vous devez apprendre sa syntaxe par cœur, mais savoir comment éditer un document HTML dans les règles en vous faisant assister par la documentation. <br> <br>
                                                Dans peu de temps, et avec la pratique, vous allez vous rendre compte que vous avez réellement appris la syntaxe. Super! Alors sans plus attendre on passe au <a href=""> contenu </a> de cette formation HTML.
                                            </p>
                                    </div>

                                </div>
                            </div>
                               
                        </div> 
                    </div>
                    <!-- <p><a href="newer.php">lieu</a></p> -->

                    <div id="main-sidebar" class="col-md-3 col-md-offset-1 wow fadeInRight" data-wow-delay="0s">
                        <div class="portfolio-details gap">
                            <div class="carousel-cap"> <h3>Vous êtes en HTML </h3></div>
                                    <!-- <nav class="carouselcap-ul">
                                        <li>
                                        <a href="programmation_html.php">Accueil </a> </li>
                                        <li><a href="contenu_html.php">Contenu </a></li>
                                        <li><a href="#">Articles </a></li>
                                    </nav> -->

                            <p><strong>Client</strong> Business Corp</p>
                            <p><strong>Date</strong> 09/06/2021</p>
                            <p><strong>Skils</strong> HTML, Photography, CSS, jQuery</p>
                            <p><strong>Link</strong> <a href="#" title="Visit Project">Visit Site</a></p>
                        </div>
                        <div id="sharing" class="gap row">
                            <div class="col-md-12">
                                <div class="btn-group sharing-btns">
                                    <button class="btn btn-default disabled">Share:</button>    
                                    <a class="btn btn-default facebook" target="_blank" title="On Facebook" href="http://www.facebook.com/sharer.php?u=YOUR_URL_HERE">
                                        <i class="fa fa-facebook fa-lg fb"></i>
                                    </a>
                                    <a class="btn btn-default twitter" target="_blank" title="On Twitter" href="http://twitter.com/share?url=YOUR_URL_HERE&text=YOUR_TEXT_HERE">
                                        <i class="fa fa-twitter fa-lg tw"></i>
                                    </a>
                                    <a class="btn btn-default google" target="_blank" title="On Google Plus" href="https://plusone.google.com/_/+1/confirm?hl=en&url=YOUR_URL_HERE">
                                        <i class="fa fa-google-plus fa-lg google"></i>
                                    </a>
                                    <a class="btn btn-default pinterest" target="_blank" title="Pin It" href="http://www.pinterest.com/pin/create/button/?url=YOUR_URL_HERE&media=YOUR_URL_HERE">
                                        <i class="fa fa-pinterest fa-lg pinterest"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section id="footer-widgets" class="divider-wrapper">
        <div class="section-inner">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="widget col-md-3 col-sm-6 about-us-widget">
                        <h4 class="widget-title"><strong>Couverture</strong></h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty.</p>
                    </div><!--/.col-md-3-->

                    <div class="widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Notre</strong> Compagnie</h4>
                        <div>
                            <ul class="list-unstyled widget-list">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Our Links</a></li>
                                <li><a href="#">Communit</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Autres</strong> Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>  
                    </div><!--/.col-md-3-->

                    <div class="widget carousel-widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Latest</strong> Works</h4>
                        <div class="row">
                            <ul class="direction-aware owl-carousel-paged wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="divider-wrapper-dark">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 text-center wow">
                            <span class="copyright">Copyright ©2021. Designed by @AllConnect</span>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" id="back-to-top"><i class="pe-7s-angle-up fa-4x"></i></a>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons wow fadeInUp">
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/plugins.js"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/init.js"></script>

</body>

</html>
