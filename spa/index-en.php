﻿<?php
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

    <title>PlanetM – Digital and Technology Marketing Agency</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="marketing, technology advertising, whole market, total market, hispanic marketing, multicultural marketing, best agency, multicultural advertising, AI, IOT, Blockchain, Cloud applications" />
    <meta name="author" content="PlanetM agency">
    <meta name="description" content="PlanetM- is a full-service digital and technology marketing company with offices in New York City and Latin America. We connect global and personal brands with people. We develop solutions that can have impact on how our clients do business. From AI to IoT to Analytics to Blockchain to Cloud-based Applications, we help our customers in ways that go well beyond conventional marketing tools ">
    <meta property="og:title" content="PlanetM.us" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://www.planetm.us" />
    <meta property="og:image" content="http://www.planetm.us/images/slide1bg_1.jpg" />
    <meta property="og:description" content="We put culture at the core of content-driven, digital-forward marketing campaigns for leading global and personal brands looking to engage with people." />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content=" PlanetM – Multicultural Digital and Technology Marketing Agency " />
    <meta name="twitter:description" content=" We put culture at the core of content-driven, digital-forward marketing campaigns for leading global and personal brands looking to engage with people." />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/templatemo-misc.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/style2.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="http://www.planetm.us/favicon.png" />
    
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
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
        <script> /* Script written by Adam Khoury @ DevelopPHP.com */ /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
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
                ajax.open("POST", "../scripts/proc_subsnews-v2.php");
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
            //function _(el) {
            //    return document.getElementById(el);
            //}
            function subscribeContact() {
                var name_contact = _("name_contact").value;
                var email_contact = _("email_contact").value;
                var subject_contact = _("subject_contact").value;
                var message_contact = _("message_contact").value;
                var formdata = new FormData();
                formdata.append("name_contact", name_contact);
                formdata.append("email_contact", email_contact);
                formdata.append("subject_contact", subject_contact);
                formdata.append("message_contact", message_contact);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "../scripts/proc_contact-v2.php");
                ajax.send(formdata);
                document.getElementById('contact_form').style.display = 'none';
                document.getElementById('thanks_contact').style.display = 'block';
            }
            function progressHandler(event) {
                _("loaded_n_total").innerHTML = "Thank you for your contact";
            }
            function completeHandler(event) {
                _("status").innerHTML = event.target.responseText;
            }
            function errorHandler(event) {
                _("status").innerHTML = "Registration Failed";
            }
            function abortHandler(event) {
                _("status").innerHTML = "Registration Aborted";
            }

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
                                <a href="#" title="PlanetM">
                                    <img src="../images/logo_planetm.png" style="margin-top: 10px" /></a>
                            </div>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-6">
                            <div class="menu text-right hidden-xs hidden-sm hidden-lg hidden-md">
                                <ul>
                                    <li><a href="#about">Company</a></li>
                                    <li><a href="#industries">Industries</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#clients">Clients</a></li>
                                    <li><a href="#partners">Partners</a></li>
                                    <li><a href="#related">Related Sites</a></li>
                                    <li><a href="#news">News</a></li>
                                    <li><a href="#social">Social</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="responsive-menu text-right visible-xs visible-sm visible-lg visible-md">
                        <a href="../spa/index.php">
                        <img src="banderas/espana.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;<a href="../por/index.php"><img src="banderas/portugal.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="#about">Company</a></li>
                                <li><a href="#industries">Industries</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#clients">Clients</a></li>
                                <li><a href="#partners">Partners</a></li>
                                <li><a href="#related">Related Sites</a></li>
                                <li><a href="#news">News</a></li>
<!--                                <li><a href="#social">Social</a></li>-->
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .header-unit -->
    <div class="fullscreen-bg">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 video_blurb">
              <h3>
							<span id="swpText">Branded Content</span></h3> 
<h2>
                    <br /><br /><br />
                    WE CONNECT GLOBAL AND PERSONAL <br />BRANDS WITH CONSUMERS
                   
                </h2>
             
        <script type="text/javascript">


            var im = document.getElementById("swpText");

var accText = ["Digital Media Rooms","Sponsorships","Experiential Marketing","Branded Content"];
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
        <video loop muted autoplay width="100%" height="auto" class="tall">
            <source src="../video/home_planet_publish.mp4" type="video/mp4">
        </video>
    </div>
    <!-- /#home -->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="../images/slider_techno.jpg" alt="">
                <div class="flex-caption">
                   <h2>Disruptive <br>Global Marketing</h2><br/>
                        
                    <span></span>
                    <p>
                        Technologically driven
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_digital.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive <br>Global Consulting
                        </h2>
                    <span></span>
                    <p>
                        Digitally Born
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_social.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive <br>Event Management</h2>
                    <span></span>
                    <p>
                        Social at the Core
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_international.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive Multicultural Marketing
                        </h2>
                    <span></span>
                    <p>
                        Internationally Integrated
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_science.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive Multicultural Research </h2>
                    <span></span>
                    <p>
                        Scientifically Obsessed
                    </p>
                </div>
            </li>
        </ul>
    </div>

    <div id="about" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                  <h2>Company</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-9">
                    <h4 class="widget-title">PlanetM CONNECTS GLOBAL AND PERSONAL BRANDS WITH CONSUMERS</h4>
                    <p class="area_text">
                        PlanetM develops and executes comprehensive marketing strategies and solutions for the world’s most innovative global and personal brands creating unique communities across platforms in any language. 
                        <br />
                        <br />
                       Our multicultural team develops programs using state of the art technology. We focus on creating an intelligent and unique user experience while delivering significant ROI.
  
                    </p>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 our-skills" style="text-align: center">
                    <h4 class="widget-title"><span style="color: #808080">Our Nature</span></h4>
                    <ul class="progess-bars">
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Technologically driven</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Digitally born</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Social at the core</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Internationally Integrated</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Scientifically obsessed</div>
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
                                <img src="../images/team/member-1.jpg" alt="Tracy">
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
                                <span>Liderazgo</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_saldivar.jpg" alt="Carlos">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/enrique-henry-ahumada-9405712" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/enahumada" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Enrique<br />
                                    Ahumada</h5>
                                <span>Estrategia</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_gutierrez.jpg" alt="Juan">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/juangtz/en" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/JuanAlbertoGtz" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Juan<br />
                                    Gutierrez</h5>
                                <span>Creatividad</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_lieutier.jpg" alt="Gaston">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://uy.linkedin.com/in/gastonlieutier" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/glieutier" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Gaston<br />
                                    Lieutier </h5>
                                <span>Desarrollo</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/goroc.jpg" alt="Francisco">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/marcelo-oscar-scarano-b9460632/en" class="fa fa-linkedin" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Marcello<br />
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
                                <img src="../images/team/ph_kretel.jpg" alt="Elizabeth">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/lizkressel" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/lizkressel" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Elizabeth<br />
                                    Kressel</h5>
                                <span>Estrategia</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_bukin.jpg" alt="Marcelo">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/marcelo-bukin-84894513" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/MarceloBukin" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Marcelo<br />
                                    Burkin</h5>
                                <span>Creatividad</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_schapsis.jpg" alt="Claudio">
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
                                <img src="../images/team/ph_laura.jpg" alt="Laura">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/laura-rosado-87090910" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/rosado38" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Laura<br />
                                    Rosado</h5>
                                <span>Comunicación</span>
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


    <div id="industries" class="section-cotent">
        <div class="container panel_grey">
            <div class="title-section text-center">
                <h2>Industrias</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Deportes y Juegos<br />
                        Medios y Entretenimiento<br />
                        Tecnología
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Viajes y Turismo<br />
                        Farmacéutica y Salud
                        <br />
                        Gastronómica y Hotelería
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Electrónica de Consumo<br />
                        Moda y Lujo<br />
                        Bancos, Seguros y Finanzas
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /#industries -->
    <!-- #services -->
    <div id="services" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Servicios</h2>
                Soluciones 360&deg;
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-area-chart"></i>
                            <h3>CONSULTORÍA</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-shopping-cart icon_services fa-fw"></i>Soluciones de E-Commerce<br />
                            <i class="fa fa-globe icon_services fa-fw"></i>Investigación, Desarrollo y Estrategia<br />
                            <i class="fa fa-desktop icon_services fa-fw"></i>Compra y Estrategia de Publicidad<br />
                            <i class="fa fa-cog icon_services fa-fw"></i>Aplicaciones y Plataformas de Tecnología<br />
                            <i class="fa fa-comment-o icon_services fa-fw"></i>Relaciones Públicas y Comunicaciones<br />
                            <i class="fa fa-balance-scale icon_services fa-fw"></i>Adquisiciones y Sociedades Estratégicas<br />
                            <i class="fa fa-gg icon_services fa-fw"></i>Gestión de Proyectos y Tercerización<br />
                            <i class="fa fa-arrows icon_services fa-fw"></i>Estrategias de Propiedad Intelectual<br />
                            <i class="fa fa-user icon_services fa-fw"></i>Contenido Personalizado y de Marca
                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-desktop"></i>
                            <h3>MERCADEO</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-flag-checkered icon_services fa-fw"></i>Negociación y Gestión de Patrocinios<br />
                            <i class="fa fa-laptop icon_services fa-fw"></i>Mercadeo y Publicidad Digital<br />
                            <i class="fa fa-tachometer icon_services fa-fw"></i>Creatividad y Estrategia de Contenidos<br />
                            <i class="fa fa-cogs icon_services fa-fw"></i>Estrategia de Marcas y su Identidad<br />
                            <i class="fa fa-bar-chart icon_services fa-fw"></i>Análisis, Reportes y Estrategias de Datos<br />
                            <i class="fa fa-credit-card icon_services fa-fw"></i>Representación de Ventas<br />
                            <i class="fa fa-share-alt icon_services fa-fw"></i>Medios Sociales y Móviles<br />
                            <i class="fa fa-crosshairs icon_services fa-fw"></i>Ventas y Activación de Patrocinios<br />
                            <i class="fa fa-star-o icon_services fa-fw"></i>Administración de Usuarios y Talento
                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-calendar"></i>
                            <h3>EVENTOS</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-pencil-square-o icon_services fa-fw"></i>Producción, Mercadeo y Administración<br />
                            <i class="fa fa-briefcase icon_services fa-fw"></i>Conferencias Especializadas<br />
                            <i class="fa fa-rss icon_services fa-fw"></i>Gestión y Tercerización de Tecnología<br />
                            <i class="fa fa-share-alt icon_services fa-fw"></i>Interacción Social<br />
                            <i class="fa fa-map-o icon_services fa-fw"></i>Ferias Nacionales e Internacionales<br />
                            <i class="fa fa-object-group icon_services fa-fw"></i>Conferencias Interactivas y Digitales<br />
                            <i class="fa fa-calendar-check-o icon_services fa-fw"></i>Eventos en Vivo y en TV Social<br />
                            <i class="fa fa-link icon_services fa-fw"></i>Promoción y Patrocinios<br />
                            <i class="fa fa-cubes icon_services fa-fw"></i>Mercadeo Promocional y Experimental                       
                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
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
                <h2>Socios</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="../images/logo_datafactory.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_thinkthanks.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_flowics.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/logo_teamemar.png" class="img-responsive center-block" />
                    </div>
                </div>
                <div class="title-section text-center" style="margin-bottom: 40px;">
                <center>
                <div class="col-md-3 col-sm-6 col-xs-12">
                       
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="../images/live.png" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <img src="../images/sws.png" class="img-responsive center-block" />
                    </div></center>
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
                        <a href="http://www.planetm.us/sports">
                        <img src="../images/logo_planetsports.png" class="img-responsive center-block" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://sportyads.network/" target="_blank">
                            <img src="../images/logo_sportyads.png" class="img-responsive center-block" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://www.planetm.us/humans" target="_blank">
                            <img src="../images/logo_votovision.png" class="img-responsive center-block" /></a>
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
                <div class="col-md-9">
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
                        Más Noticias
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
                <div class="col-md-3 suscribe_panel">
                    <span style="color: #FFFFFF; font-size: 15px;">Subscríbase al Servicio de Noticias<br />
                        <br />
                    </span>
                    <div class="contact-form">
                        <form id="register_form" enctype="multipart/form-data" method="post">
                        <p class="full-row">
                            <label for="email-news">Ingrese su Email:</label>
                            <input type="text" id="email-news" name="email-news">
                        </p>
                        <input class="mainBtn" type="button" name="subscribe" value="Subscribirse" onclick="subscribeNews()">
                        </form>
                        <span id="thanks_subs">Gracias por subscribirse!</span>
                    </div>
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
            <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
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
                    <h4 class="widget-title">Envíenos un mensaje</h4>
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
                        <input class="mainBtn" type="button" name="" value="Enviar Mensaje" onclick="subscribeContact()">
                        </form>
                        <span id="thanks_contact"><strong>Gracias por su contacto.</strong><br /><br />Lo contactaremos en breve.<br /><br />El Equipo PlanetM</span>
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
                        <span><i class="fa fa-envelope"></i>info@planetm.us</span>
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
                        carlos@planetm.us<br />
                        212 518 7543<br />
                        <br />
                        Juan Gutierrez<br />
                        jgutierrez@planetm.us<br />
                        <br />
                        MEXICO<br />
                        Juan Saldivar<br />
                        juan@planetm.us<br />
                        <br />
                        COLOMBIA<br />
                        Eder Olguin<br />
                        eder@planetm.us<br />
                        <br />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="map_panel">
                        BRASIL<br />
                        Felipe Machado<br />
                        felipe@planetm.us<br />
                        <br />
                        ARGENTINA<br />
                        Sergio Grinbaum<br />
                        sergio@planetm.us<br />
                        <br />
                        URUGUAY<br />
                        Nicolás Pereira<br />
                        nicolas@planetm.us<br />
                        <br />
                        CHILE<br />
                        Sergio Grinbaum<br />
                        sergio@planetm.us<br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#map_americas -->

    <!-- Modal -->
    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
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
                        Derechos Reservados &copy; 2016 PlanetM!&nbsp;&nbsp;|&nbsp;&nbsp;<a data-toggle="modal" data-target="#modal_login">Política de Privacidad</a><br />
                        <br />
                        <a href="https://www.linkedin.com/company/9451186?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A9451186%2Cidx%3A2-4-7%2CtarId%3A1445970664430%2Ctas%3Aplanet%20m" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/planetmworld?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/PlanetMWorld" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
                        &nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/planetmworld/" target="_blank"><i class="fa fa-pinterest-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCqu2FpRwVEtDmENC_Vw4dwg" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://plus.google.com/+PlanetmUsNYC" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
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
    <script type="text/javascript">

        function initialize() {
            var mapOptions = {
                scrollwheel: false,
                zoom: 15,
                center: new google.maps.LatLng(40.744147, -73.988701)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        }

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                'callback=initialize';
            document.body.appendChild(script);
        }

        window.onload = loadScript;

        $('.popup-ajax').magnificPopup({
            type: 'ajax'
        });
    </script>

</body>
</html>
<?php
include_once '../cp/app_includes/db_close.php';
?>
