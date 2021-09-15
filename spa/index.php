<?php
include_once '../cp/app_includes/db_connect.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Visit Digitally | Hola!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="virtual live tours, marketing, technology, advertising, AI, IOT, Blockchain, Cloud applications" />
    <meta name="author" content="VisitDigitally.com">
    <meta name="description" content="VisitDigitally.com ofrece TOURS INTERACTIVOS EN VIVO Y EN TIEMPO REAL DE UNIVERSIDADES PARA PADRES Y FUTUROS ESTUDIANTES usamos AI hasta IoT, Analytics y aplicaciones basadas en la nube.">
    <meta property="og:title" content="VisitDigitally.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://www.visitdigitally.com" />
    <meta property="og:image" content="https://www.visitdigitally/images/slide1bg_1.jpg" />
    <meta property="og:description" content="We put technology at the core of content-driven, digital-forward marketing campaigns for leading educational institutions looking to engage with prospective and current students." />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content=" VisitDigitally – A Digital, multicultural and Technology Marketing Agency " />
    <meta name="twitter:description" content="We put technology at the core of content-driven, digital-forward marketing campaigns for leading educational institutions looking to engage with prospective and current students" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/templatemo-misc.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/style3.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="https://www.visitdigitally.com/favicon.png" />
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98279254-1', 'auto');
  ga('send', 'pageview');
</script>

    <!-- JavaScripts -->
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/modernizr.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
        <script>
           function _(el) {
                return document.getElementById(el);
            }
            function subscribeNews() {
                var email = _("email-news").value; // alert(file.name+" | "+file.size+" | "+file.type);
                var formdata = new FormData();
                formdata.append("email-news", email);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "../scripts/proc_subsnews.php");
                ajax.send(formdata);
                document.getElementById('register_form').style.display = 'none';
                document.getElementById('thanks_subs').style.display = 'block';
            }
            function progressHandler(event) {
                _("loaded_n_total").innerHTML = "Thank you for your registration";
            }
            function completeHandler(event) {
                _("status").innerHTML = event.target.responseText;
                //location.reload();
            }
            function errorHandler(event) {
                _("status").innerHTML = "Registration Failed";
            }
            function abortHandler(event) {
                _("status").innerHTML = "Registration Aborted";
            }
        </script>
      <script>
        $(document).ready(function (e){
            $("#contact_form").on('submit',(function(e){
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    dataType:'json',
                    data: {
                    "name":$('input[name="name_contact"]').val(),
                    "email":$('input[name="email_contact"]').val(),
                    "phone":$('input[name="subject_contact"]').val(),
                    "content":$('textarea[name="message_contact"]').val(),
                    "g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},             
                    success: function(response){
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if(response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class","error");                
                    } else if(response.type == "message"){
                        $('#send-message').hide();
                        $("#mail-status").attr("class","success");                          
                    }
                    $("#mail-status").html(response.text);  
                    },
                    error: function(){} 
                });
            }));
        });
    </script>

</head>
<body>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- start preloader -->
  <!--  <div class="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>-->
    <!-- end preloader -->
    <div id="home">
        <!-- start header-unit -->
        <div class="site-header">
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-xs-6">
                            <div class="logo">
                                <a href="#" title="VisitDigitally">
                                    <img src="../images/logo_visitdigitally.png" style="margin-top: 10px" /></a>
                            </div>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-6">
                            <div class="menu text-right hidden-xs hidden-sm hidden-lg hidden-md">
                                <ul>
                                    <li><a href="#about">Empresa</a></li>
                                    <li><a href="#how-it-works">Como Funciona</a></li>
                                    <li><a href="#services-type">Servicios</a></li>
                                    <li><a href="#clients">Clientes</a></li>
                                    <li><a href="#partners">Socios</a></li>
                                    <li><a href="#related">Nuestros Sitios</a></li>
                                    <li><a href="#news">Noticias</a></li>
                                    <li><a href="#social">Social</a></li>
                                    <li><a href="#contact">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-menu text-right visible-xs visible-sm visible-lg visible-md">
                    <span class="demo_button"><a href="#contact"><img src="./images/boton-spa.png" alt="Book Demo" style="margin-top: -11px"></a>&nbsp;&nbsp;</span>

                        <a href="../index.php">
                        <img src="../banderas/eu.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;<a href="../por/index.php"><img src="../banderas/portugal.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="#about">Empresa</a></li>
                                <li><a href="#how-it-works">Como Funciona</a></li>
                                <li><a href="#services-type">Servicios</a></li>
                                <li><a href="#clients">Clientes</a></li>
                                <li><a href="#partners">Socios</a></li>
                                <li><a href="#related">Nuestros Sitios</a></li>
                                <li><a href="#news">Noticias</a></li>
<!--                                <li><a href="#social">Social</a></li>-->
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .header-unit -->
    <div class="fullscreen-bg">
    <div style="top:0px; left:0px; background-color: rgba(0, 0, 0, 0.5); width: 100%; height: 100%; z-index: 10000;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 video_blurb">
              <h3>
							<span id="swpText"></span></h3> 
<h2>
                    <br /><br /><br />
                    Tours interactivos en vivo y en tiempo real<br/>
                    de universidades para padres y futuros estudiantes<br/>
                </h2>
             
        <script type="text/javascript">


            var im = document.getElementById("swpText");

var accText = [];
var index=0;

function changeText()
{
  im.textContent = accText[index];
  index++;
  if(index >= accText.length)
  {
    index=0;
  }
};


</script>
<script type="text/javascript">
setInterval(changeText, 2000);
</script>

            
                
            </div>
        </div>
        <video loop muted autoplay class="tall" style="width: 100%; height: auto;">
            <source src="../video/vd_home_video_crop_3.mp4" type="video/mp4">
        </video>
    </div>
    </div>
    <!-- /#home -->
    <!-- slider 
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="../images/slider_techno.jpg" alt="">
                <div class="flex-caption">
                    <h2>MERCADEO<br />
                        GLOBAL DISRUPTIVO</h2>
                    <span></span>
                    <p>
                        Tecnológicamente manejado
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_digital.jpg" alt="">
                <div class="flex-caption">
                    <h2>CONSULTORÍA<br />
                        GLOBAL DISRUPTIVA</h2>
                    <span></span>
                    <p>
                        Nacidos digitalmente
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_social.jpg" alt="">
                <div class="flex-caption">
                    <h2>ADMINISTRACIÓN<br />
                        DE EVENTOS DISRUPTIVOS</h2>
                    <span></span>
                    <p>
                        Sociales en esencia
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_international.jpg" alt="">
                <div class="flex-caption">
                    <h2>MERCADEO<br />
                        GLOBAL DISRUPTIVO</h2>
                    <span></span>
                    <p>
                        Internacionalmente integrado
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_science.jpg" alt="">
                <div class="flex-caption">
                    <h2>INVESTIGACIÓN<br />
                        MULTICULTURAL DISRUPTIVA</h2>
                    <span></span>
                    <p>
                        Científicamente obsesivos
                    </p>
                </div>
            </li>
        </ul>
    </div>
    -->
    <div id="about" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>La Empresa</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-9">
                    <h4 class="widget-title">VISITDIGITALLY PRODUCE INTERACTIVE LIVE Y VIDEO CAMPUS TOURS</h4>
                    <p class="area_text">
                    Visit Digitally es un líder reconocido en OTT TV (Over-the-top TV), OVP (Online Video Platform), EdVP (Education Video Platform), y en el Mercado de EVP (Enterprise Video Platform).
                        <br />
                        <br />
                        Nuestro equipo multicultural desarrolla programas y aplicaciones usando tecnologías de última generación. Nuestra concentración es crear experiencia únicas de usuarios mientras que le generamos un significante retorno de su inversión.
                    </p>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 our-skills" style="text-align: center">
                    <h4 class="widget-title"><span style="color: #808080">Nuestra Naturaleza</span></h4>
                    <ul class="progess-bars">
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Tecnológicamente impulsados</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Nacidos digitalmente</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Sociales en esencia</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Internacionalmente integrados</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Científicamente obsesivos</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="our-team">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/member-1.jpg" alt="Carlos">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/carlosvassallo" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/carlosvassallo" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Carlos<br />
                                     Vassallo </h5>
                                <span>COO-cofundador</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_smith.jpg" alt="Amanda">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/amandapilarsmith" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/asmithcaterers" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Amanda<br />
                                    Smith</h5>
                                <span>COO-cofundadora</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_francesco.jpg" alt="Francesco">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/francescoandreoli" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/francescoswiss" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Francesco<br />
                                    Andreoli</h5>
                                <span>AI Chief</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_dimonte.jpg" alt="Eric">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://uy.linkedin.com/in/ericdimonte" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/ericdimonte" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Eric<br />
                                    Di Monte </h5>
                                <span>Operaciones</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/goroc.jpg" alt="Marcelo">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/marcelo-oscar-scarano-b9460632/en" class="fa fa-linkedin" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Marcelo<br />
                                   Scarano</h5>
                                <span>Tecnología</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_grinbaum.jpg" alt="Sergio">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://ar.linkedin.com/in/sergiogrinbaum" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/sgrinbaum" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Sergio <br />
                                    Grinbaum</h5>
                                <span>Operaciones</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                </div>
                <!-- /.our-team -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="our-team" style="margin-top: 40px">
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_lourdespadilla.jpg" alt="Lourdes">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/lourdespadillatanco/" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/lolukapadilla" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Lourdes<br />
                                    Padilla</h5>
                                <span>Ventas</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_bukin.jpg" alt="Martin">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/martin-isaak-683764182" class="fa fa-linkedin" target="_blank"></a></li>
                                        
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Martin<br />
                                    Isaak</h5>
                                <span>Creatividad</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_schapsis.jpg" alt="Olga">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/olga-block-913a90103" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Olga<br />
                                    Block</h5>
                                <span>Estrategia</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_facundo.jpg" alt="Facundo">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/facundo-rawson-871281/" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/frawson" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Facundo<br />
                                    Rawson</h5>
                                <span>Nuevos Negocios</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_holguin.jpg" alt="Eder">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/ederholguin" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/ederman1" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Eder<br />
                                    Holguin</h5>
                                <span>Mercadeo</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_machado.jpg" alt="Felipe">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://br.linkedin.com/in/felipemachado10" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://www.twitter.com/felipemachado" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Felipe<br />
                                    Machado</h5>
                                <span>Operaciones</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                </div>
                <!-- /.our-team -->
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#about -->


    <section id="how-it-works" class="event-type-section" style="padding-top: 130px;">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <h2>COMO FUNCIONA</h2>
                360&deg; Experiencia virtual en vivo con interacciones encriptadas</br>Conecte a administradores de la universidad, padres y futuros estudiantes 
                <span></span>
            </div>
            <div class="row justify-content-center no-gutters">
                <div class="col-md-4 col-md-offset-4" style="border: 1px solid #55cbfc; padding: 20px; text-align: center; margin-bottom: 30px; font-size: 18px">
                No requiere descarga</br>
                <span style="color: #55cbfc; font-weight: bold">LISTO EN MINUTOS</span></br>
                Independiente o incorporado en su sitio web</br>              
                </div>            
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">

                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-corporate.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Interacción en vivo---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">INTERACCIÓN EN VIVO</span></br>
                            ¡Converse en vivo con un administrador, ex-alumnos, estudiantes actuales, profesores y otros! ¡Involucre a su audiencia y asegure su venta!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-international.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Estudiantes---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">ESTUDIANTES</span></br>
                            Involucre a sus estudiantes en sus presentaciones en vivo. La mayoría de los futuros estudiantes locales e internacionales desean interactuar y conectarse con estudiantes actuales 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-class.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Clases en vivo---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">CLASES EN VIVO</span></br>
                            Vea una clase en vivo de la universidad de su elección,  a pedido y cuando esté disponible.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-ecommerce.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Comercio electrónico---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">COMERCIO ELECTRÓNICO</span></br>
                            Promocione y venda  sus productos para que su audiencia compre sus artículos y productos favoritos, incluidos libros de texto de la web de Comercio electrónico de la Universidad
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-broadcast.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Contenido---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">CONTENIDO</span></br>
                            Produzca contenido específico, incluyendo videos, fotos, texto, chats y publicaciones en redes sociales, y agregue también contenido generado por los usuarios
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-intelligence.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Inteligencia de datos---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">INTELIGENCIA DE DATOS</span></br>
                            Recopile datos en tiempo real de sus visitantes y genere sus propias percepciones para poder llegar mejor a su audiencia
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-cloud.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Servicios en la nube---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">SERVICIOS EN LA NUBE</span></br>
                            Nuestra plataforma se adapta completamente a cualquier dispositivo y se puede agregar a cualquier página de su sitio web sin interferir con su contenido. No requiere descargas
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-idiomas.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Multi-lenguaje---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">MULTI-LENGUAJE</span></br>
                            Cree tantas salas de medios digitales como necesite en el idioma de su elección
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-omnichannel.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Omnicanal---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">OMNICANAL</span></br>
                            Optimice su estrategia de contenido multicanal para mejorar la experiencia del usuario y generar mejores relaciones con su audiencia en todos los puntos de contacto. Nuestras salas de medios digitales están diseñadas y orquestadas para cooperar.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-ecosystem.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Datos en tiempo real---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">DATOS EN TIEMPO REAL</span></br>
                            Invite a futuros estudiantes en cualquier etapa del ciclo de reclutamiento: desde el que solicita información hasta el estudiante admitido y la preinscripción. Haga encuestas y cuestionarios en vivo y a pedido 

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-virtual.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Ai y realidad virtual---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">Ai Y REALIDAD VIRTUAL</span></br>
                            Servicio especial: nuestro algoritmo de aprendizaje automático analiza las conversaciones para medir el grado de participación y comprender de qué están hablando sus prospectos. Transmita en realidad virtual en cualquier momento
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-chat.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Chats y redes sociales---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <br><span style="color: #55cbfc; font-weight: bold">CHATS Y REDES SOCIALES</span></br>
                            Transmita en vivo a todas las redes sociales, incluidos Youtube, Facebook, Instagram, LinkedIn y otros
                            </div>
                        </div>
                    </div>
                </div>
             </div>            
        </div>
    
    </section>

    <!-- /#Howitworks -->
    <!-- #services -->
    <section id="services-type" class="event-type-section" style="padding-top: 130px;">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <h2>Servicios</h2>
                Soluciones Completas y Llave en Mano
                <span></span>
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-tours.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Tours virtuales---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">VISITAS VIRTUALES</span>
                            <br>Aumente sus probabilidades de éxito. Muestre todas sus propuestas, desde presentaciones académicas hasta admisión y ayuda financiera, y la vida dentro y fuera de la sala de clase. Ayude a su audiencia a explorar la vida en el campus, conocer a estudiantes y descubrir su enfoque educativo práctico.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-liveevent.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Eventos en Vivo---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">EVENTOS EN VIVO</span>
                            <br>Aprendizaje en línea, clases virtuales, reuniones públicas, concursos de planes de negocios y otros eventos en vivo incluido el contenido generado por el usuario.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-legal.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">API de apps y software---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">API DE APPS y SOFTWARE</span>
                            <br>Integre apps y programas de software que esté usando en nuestras salas de medios digitales.  Haga clic aquí para ver la lista de los productos más usados.  <a href="https://www.visitdigitally.com/apps.pdf">Cliquee aquí</a>para ver la lista de los programas y apps mas usados.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-content.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Contenido Exclusivo---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">CONTENIDO EXCLUSIVO</span>
                            <br>Ensayos en video, procesos de solicitud, ferias universitarias virtuales, orientación para estudiantes, envíe mensajes de aceptación a través de nuestras salas de medios digitales para que acepten su oferta. Incluye encuestas y metadatos a nivel individual.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-new.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">LetsCast---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">EN VIVO</span>
                            <br>Cree su propio canal en vivo para transmitir las 24 horas del día, los 7 días de la semana o a demanda. Distribuya contenido en vivo a las redes sociales con un clic. Con soporte de subtitulado para traducción y accesibilidad.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-courses.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Cursos---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">CURSOS</span>
                            <br>Enseñe cualquier curso en vivo usando una pizarra blanca que incluye materiales de biblioteca, guías de estudio y descripciones generales de la clase.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-sports.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Deportes---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">DEPORTES</span>
                            <br>Transmita deportes y archivos en vivo en su propio vertical ¡en un instante!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="../img/events/ev-firechat.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Charlas Informales---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            <span style="color: #55cbfc; font-weight: bold">CHARLAS INFORMALES</span>
                            <br>Distribuya su contenido en cualquier idioma promocionando sus charlas informales al mundo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- /#services -->

    <!-- #clients -->
    <div id="clients" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>HEMOS TRABAJADO  CON LAS SIGUIENTES EMPRESAS</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 xs-12">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_1.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_2.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_3.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_4.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_5.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_6.png" class="img-responsive center-block margin_logos" />
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_7.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_8.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_9.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_10.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_11.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_12.png" class="img-responsive center-block margin_logos" />
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_13.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_14.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_15.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_16.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_17.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_18.png" class="img-responsive center-block margin_logos" />
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_19.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_20.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_21.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_22.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_23.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_24.png" class="img-responsive center-block margin_logos" />
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_25.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_26.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_27.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_28.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_29.png" class="img-responsive center-block margin_logos" />
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="../images/clients/logo_clients_30.png" class="img-responsive center-block margin_logos" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#clients -->

    <!-- #partners -->
    <div id="partners" class="section-cotent">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <!--                <img src="../images/logo_planet_ssm.png" />-->
                <h2>Socios Tech</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="../images/logo_meeting.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_thinkthanks.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_vimeo.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_aww.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_screen.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_event.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_survey.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_magnum.png" class="img-responsive center-block" />
                    </div>

            </div>
            </div>
        </div>
    </div>
    <!-- /#partners -->

    <!-- #related -->
    <div id="related" class="section-cotent">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <h2>Nuestros Sitios</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="https://www.planetm.us/sportsindustry">
                        <img src="../images/logo_sports.png" class="img-responsive center-block" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="https://www.planetm.us/" target="_blank">
                            <img src="../images/logo_planet.png" class="img-responsive center-block" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="https://www.planetm.us/DMR" target="_blank">
                            <img src="../images/logo_DMR.png" class="img-responsive center-block" /></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /#related -->

    <div id="news" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Noticias</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-8">
                    <h4 class="widget-title">Ultimas Noticias</h4>

                                    <?php
                                    $mysqli->query("SET NAMES 'utf8'");
                                    date_default_timezone_set("America/New_York");
                                    $sql = "SELECT recordid, title, subtitle, news_date FROM news where cat_id=6 and status='active' order by news_date desc LIMIT 3";
                                    $result = $mysqli->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $news_date = new DateTime($row["news_date"]);
                                            ?> 
                    <span class="news_date"><?php echo date_format($news_date, 'M d, g:ia'); ?>
                    </span>
                    <br />
                    <span class="news_title">
                        <i class="fa fa-rss"></i>&nbsp;<a href="news_details.php?rid=<?php echo $row['recordid']; ?>" class="popup-ajax"><?php echo $row["title"]; ?></a>
                    </span>
                    <br />
                    <span class="news_text"><?php echo $row["subtitle"]; ?></span>
                    <br />
                    <br />
                                            <?php
                                              $last_date = $row["news_date"];
                                        }
                                    }
                                    $result->close;
                                    $row->close;
                                    ?> 
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    MÁS NOTICIAS
                    </button><br /><br />
                    <div class="collapse" id="collapseExample">
                        <div>
                                    <?php
                                    $mysqli->query("SET NAMES 'utf8'");
                                    date_default_timezone_set("America/New_York");
                                    $sql = "SELECT recordid, title, subtitle, news_date FROM news where cat_id=6 and status='active' and news_date<'$last_date' order by news_date desc LIMIT 7";
                                    $result = $mysqli->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $news_date = new DateTime($row["news_date"]);
                                            ?> 
                    <span class="news_date"><?php echo date_format($news_date, 'M d, g:ia'); ?>
                    </span>
                    <br />
                    <span class="news_title">
                        <i class="fa fa-rss"></i>&nbsp;<a href="news_details.php?rid=<?php echo $row['recordid']; ?>" class="popup-ajax"><?php echo $row["title"]; ?></a>
                    </span>
                    <br />
                    <span class="news_text"><?php echo $row["subtitle"]; ?></span>
                    <br />
                    <br />
                                            <?php
                                        }
                                    }
                                    $result->close;
                                    $row->close;
                                    ?> 
                        </div>
                    </div>
                </div>

                <!-- /.col-md-3 -->
                <div class="col-md-4 suscribe_panel">
                    <span style="color: #FFFFFF; font-size: 15px;">Subscríbase al Servicio de Noticias<br />
                        <br />
                    </span>
                    <div class="contact-form">
                        <form id="register_form" enctype="multipart/form-data" method="post">
                        <p class="full-row">
                            <label for="email-news">Enter your Email:</label>
                            <input type="text" id="email-news" name="email-news">
                        </p>
                        <input class="mainBtn" type="button" name="subscribe" value="Subscribe" onclick="subscribeNews()">
                        </form>
                        <span id="thanks_subs">Thanks for subscribing!</span>
                    </div>
                </div>
               <div style="padding:20px;">
                    <span> Al hacer clic en registrarte, aceptas la totalidad de Términos, Condiciones y Acuerdos, incluyendo las Condiciones de Uso, la Política de
Privacidad y la Política de Cookies.</span>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#news -->

<div class="flexslider">
<br><br><br>
<ul class="slides">
<li>
     <img src="../images/socialdivider_spanish.jpg" alt="">
     </li>
     </ul>
   <!-- <div id="social" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Social</h2>
                <span></span>
            </div>-->
            <!-- /.title-section -->
           <!-- <div class="row">
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
            <a class="twitter-timeline"  href="https://twitter.com/PlanetMWorld" data-widget-id="671398011516383232">Tweets by @PlanetMWorld</a>
            <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^https:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
                </div>
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
<a data-pin-do="embedUser" data-pin-board-width="340" data-pin-scale-height="392" data-pin-scale-width="80" href="https://www.pinterest.com/planetmworld/"></a>
<!-- Please call pinit.js only once per page -->
<!--<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
           <!--     </div>
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
                    <div class="fb-page" data-href="https://www.facebook.com/planetmworld" data-width="340" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/planetmworld"><a href="https://www.facebook.com/planetmworld">Planet M</a></blockquote>
                        </div>
                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- /.row -->
<!--        </div>-->
        <!-- /.container -->
    </div>
    <!-- /#social -->

    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Contáctenos</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <h4 class="widget-title">Reserve una demostración gratuita - Envíenos un mensaje</h4>
                    <div class="contact-form">
                        <form id="contact_form" enctype="multipart/form-data" method="post">
                        <p class="full-row">
                            <label for="name_contact">Su Nombre:</label>
                            <input type="text" id="name_contact" name="name_contact">
                        </p>
                        <p class="full-row">
                            <label for="email_contact">Email:</label>
                            <input type="text" id="email_contact" name="email_contact">
                        </p>
                        <p class="full-row">
                            <label for="subject_contact">Asunto:</label>
                            <input type="text" id="subject_contact" name="subject_contact">
                        </p>
                        <p class="full-row">
                            <label for="message_contact">Mensaje:</label>
                            <textarea name="message_contact" id="message_contact" rows="6"></textarea>
                        </p>
                        <div class="g-recaptcha" data-sitekey="6LfjUOIUAAAAAAHdxw_Dnyh3H9Vh8kVSClTn8xLY"></div>
                        <div id="mail-status"></div>            
                                    <button class="btn btn-primary" type="Submit" id="send-message" style="clear:both;">ENVIAR MENSAJE</button>

                        </form>
                                <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>

                      
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <h4 class="widget-title">Localización</h4>
                    <div class="map-holder">
                       <iframe id="mapiframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8235370243456!2d-73.99093068459405!3d40.74390827932854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8cdda22d46810816!2sPlanet+M!5e0!3m2!1sen!2sar!4v1539783879088" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!-- /.map-holder -->
                    <div class="contact-info">
                        <span><i class="fa fa-home"></i>1140 Broadway 6th Floor, New York, NY 10001</span>
                        <span><i class="fa fa-phone"></i>(212) 518 7543</span>
                        <span><i class="fa fa-envelope"></i>info@visitdigitally.com</span>
                        <span><i class="fa fa-whatsapp" style="color: #24cc63"></i> <a href="https://wa.me/12125187543" target="_blank">Chat now</a></span> 
                    </div>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#contact -->

    <div id="map_americas" class="section-cotent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-0 col-xs-0"></div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="map_panel">
                        USA<br />
                        Carlos Vassallo<br />
                        carlos@visitdigitally.com<br />
                        212 518 7543<br />
                        <br />
                        Facundo Rawson<br />
                        facundo@visitdigitally.com<br />
                        <br />
                        MEXICO<br />
                        Lourdes Padilla<br />
                        lourdes@visitdigitally.com<br />
                        <br />
                        COLOMBIA<br />
                        Patricia Rodriguez<br />
                        patricia@visitdigitally.com<br />
                        <br />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="map_panel">
                        BRASIL<br />
                        Felipe Machado<br />
                        felipe@visitdigitally.com<br />
                        <br />
                        ARGENTINA<br />
                        Ricardo Vassallo<br />
                        ricardo@visitdigitally.com<br />
                        <br />
                        URUGUAY<br />
                        Nicolás Pereira<br />
                        nicolas@visitdigitally.com<br />
                        <br />
                        CHILE<br />
                        Sergio Grinbaum<br />
                        sergio@visitdigitally.com<br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#map_americas -->

    <!-- Modal -->
    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="width: 50%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #9f9f9f">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title" id="ModalLogin" style="color: #ffffff; padding-left: 8px">Política de Privacidad</h4>
                </div>
                                    <?php
                    $mysqli->query("SET NAMES 'utf8'");
                    $stmt = $mysqli->prepare("SELECT description FROM contents WHERE name='politica de privacidad' and status='active' and cat_id=3") or die(mysqli_error($mysqli));
                    $stmt->execute();    // Execute the prepared query.
                    $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($db_description);
                    $stmt->fetch();
                    ?>  
                <div class="modal-body">
                    <p style="margin: 0 0 10px;">
                        <?php echo $db_description ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>
                        <img src="../images/logo_white.png" /><br />
                        Derechos Reservados &copy; 2020 VisitDigitally.com&nbsp;|&nbsp;<a data-toggle="modal" data-target="#modal_login">Política de Privacidad y GDPR</a><br /><a href="https://www.visitdigitally.com/apps.pdf">Lista de Apps & Software Compatibles</a><br /><br />
                        <a href="https://www.visitdigitally.com/index.php">English&nbsp;|&nbsp;<a href="https://www.visitdigitally.com/por/index.php">Portuguese</a><br />
                        <br />
                        <br />
                        <span><a href="#contact"><img src="./images/boton-spa.png" alt="Book Demo" style="margin-top: 0px; margin-bottom: 0px;"></a>&nbsp;&nbsp;</span><br /><br />
                        <a href="https://www.linkedin.com/company/66737070" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/visitdigitally" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/visitdigitally" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://instagram.com/visitdigitally" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                        </i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCyKvkfiNp2l0wmws5qzBMSQ" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a><br />
                        VisitDigitally.com recomienda CHROME - <a href="https://www.google.com/chrome">Descargue</a>
                    </p>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-angle-up"></i>
                            Ir Arriba
                        </a>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/jquery.lightbox.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="../js/ScrollMagic.js"></script>
    <script src="../js/animation.gsap.js"></script>   
    <script type="text/javascript">
        $('.popup-ajax').magnificPopup({
            type: 'ajax'
        });
    </script>
<script>
    var controller = new ScrollMagic.Controller({
      vertical: true
    });

    $("#nav-logo").each(function() {
      var tween = TweenMax.to(this, 1.0, {
        opacity: 1,
        ease: Power2.easeOut
      });

      var scene1 = new ScrollMagic.Scene({
          triggerElement: "#services",
          offset: 0,
          reverse: true
        })
        .setTween(tween)
        .addTo(controller);
    });

    // Single item fade in and slide up...

    $(".single-tween-item").each(function() {
      var tween = TweenMax.from(this, 1.0, {
        y: 40,
        autoAlpha: 0,
        delay: 0,
        ease: Power2.easeOut
      }, .1);

      var scene1 = new ScrollMagic.Scene({
          triggerElement: this,
          offset: 0,
          reverse: true
        })
        .setTween(tween)
        .addTo(controller);
    });

    $(".content-tween").each(function() {

      var contentTweenTL = new TimelineMax({
        repeat: 0,
      });

      var contentTween = contentTweenTL.from($(this).find(".content-tween-left"), .6, {
          x: -40,
          autoAlpha: 0,
          delay: 0,
          ease: Power2.easeOut
        }, .1)
        .from($(this).find(".content-tween-right"), .6, {
          y: 40,
          autoAlpha: 0,
          delay: 0,
          ease: Power2.easeOut
        }, .1);

      var scene3 = new ScrollMagic.Scene({
          triggerElement: this,
          offset: -100,
          reverse: true,
          duration: $(window).height() / 2
        })
        .setTween(contentTween)
        .addTo(controller)
      //.addIndicators()
      ;
    });

    // Fade in and slide up, cascade through out elements

    $(".stagger-tween").each(function() {

      var stagger = TweenMax.staggerFrom($(this).find(".stagger-tween-item"), 1, {
          y: 40,
          autoAlpha: 0,
          delay: 0,
          ease: Power2.easeOut
        },
        0.3);

      var scene2 = new ScrollMagic.Scene({
          triggerElement: this,
          offset: -100,
          reverse: false
        })
        .setTween(stagger)
        .addTo(controller)
      // .addIndicators()
      ;
    });

    $('.reveal-container').click(function(e) {
      var timeline = new TimelineMax();
      var container = $(this);
      var subcontainer = container.find('.reveal-subcontainer');
      var content = subcontainer.find('.reveal-content')

      if (subcontainer.attr('data-expanded') == 'true') {
        // Hide
        timeline
          .to(subcontainer, 1.00, {
            opacity: 0.00,
            ease: 'Power1.easeOut'
          });

        subcontainer.attr('data-expanded', 'false');

      } else {
        // Show
        timeline
          .to(subcontainer, 1.00, {
            opacity: 1.00,
            ease: 'Power1.easeOut'
          });

        subcontainer.attr('data-expanded', 'true');
      }
    });
  </script>

</body>
</html>
<?php
include_once '../cp/app_includes/db_close.php';
?>
