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
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <title>Pan American Accounting</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/templatemo-misc.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="http://www.planetm.us/favicon.png" />

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
                ajax.open("POST", "../scripts/proc_contact.php");
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
    <div class="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
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
                        <img src="../images/lab_spa.png" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;<a href="../por/index.php"><img src="../images/lab_port.png" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
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
            </div>
        </div>
    </div>
    <!-- end .header-unit -->
    <div class="fullscreen-bg">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 video_blurb">
                <h1>We connect global
                    <br />
                    and personal brands</h1>
                <h2>
                    <br />
                    with consumers<br />
                </h2>
                <h3>
                    <br />
                    in the two fastest growing markets in the world<br />
                    U.S. Hispanics and Latin America</h3>
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
                    <h2>Disruptive<br />
                        global marketing</h2>
                    <span></span>
                    <p>
                        Technologically driven
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_digital.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive<br />
                        global consulting</h2>
                    <span></span>
                    <p>
                        Digitally born
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_social.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive<br />
                        event management</h2>
                    <span></span>
                    <p>
                        Social at the core
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_international.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive<br />
                        multicultural marketing</h2>
                    <span></span>
                    <p>
                        Internationally integrated
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_science.jpg" alt="">
                <div class="flex-caption">
                    <h2>Disruptive<br />
                        multicultural research</h2>
                    <span></span>
                    <p>
                        Scientifically obsessed
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
                    <h4 class="widget-title">We help connect global and personal brands with consumers in the two fastest growing markets in the world: U.S. Hispanics and Latin America</h4>
                    <p class="area_text">
                        PlanetM creates and executes marketing platforms and solutions for the world's most innovative global and personal brands. 
                        <br />
                        <br />
                        Our multicultural team with more than 100 years of combined experience develop programs using state of the art technology that translate into an exceptional, intelligent and unique user experience producing outstanding ROI's.  
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
                                <span>Innovation</span>
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
                                        <li><a href="https://mx.linkedin.com/in/juan-sald%C3%ADvar-von-wuthenau-05240b1" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/Juan_Saldivar" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Juan<br />
                                    Saldívar</h5>
                                <span>Leadership</span>
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
                                <span>Creative</span>
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
                                <span>Development</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_scarano.jpg" alt="Marcelo">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://ar.linkedin.com/in/marcelo-oscar-scarano-b9460632/en" class="fa fa-linkedin" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Marcelo<br />
                                    Scarano</h5>
                                <span>Technology</span>
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
                                <span>Operation</span>
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
                                <span>Strategy</span>
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
                                <span>Creative</span>
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
                                        <li><a href="https://www.linkedin.com/in/schapsis" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/schapsis" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Claudio<br />
                                    Schapsis</h5>
                                <span>Strategy</span>
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
                                <span>Communication</span>
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
                                <span>Marketing</span>
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
                                <span>Operation</span>
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
                <h2>Industries</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Sports and Gaming<br />
                        Media & Entertainment<br />
                        Technology
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Travel and Tourism<br />
                        Pharma & Health Care
                        <br />
                        Food & Hospitality
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="industries-text">
                        Consumer Electronics<br />
                        Luxury & Fashion<br />
                        Banking, Insurance & Finance
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
                <h2>Services</h2>
                360&deg; Solutions
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-area-chart"></i>
                            <h3>CONSULTING</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-shopping-cart icon_services fa-fw"></i>E-Commerce Solutions<br />
                            <i class="fa fa-globe icon_services fa-fw"></i>Research, Planning and Strategy<br />
                            <i class="fa fa-desktop icon_services fa-fw"></i>Media Buying and Strategy<br />
                            <i class="fa fa-cog icon_services fa-fw"></i>Technology Applications & Platforms<br />
                            <i class="fa fa-comment-o icon_services fa-fw"></i>PR & Communications<br />
                            <i class="fa fa-balance-scale icon_services fa-fw"></i>M&A & Strategic Partnerships<br />
                            <i class="fa fa-gg icon_services fa-fw"></i>Project Management & Outsourcing<br />
                            <i class="fa fa-arrows icon_services fa-fw"></i>IP Strategy development<br />
                            <i class="fa fa-user icon_services fa-fw"></i>Custom Publishing and Branded Content
                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-desktop"></i>
                            <h3>MARKETING</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-flag-checkered icon_services fa-fw"></i>Sponsorship Negotiation & Management<br />
                            <i class="fa fa-laptop icon_services fa-fw"></i>Digital Marketing & Advertising<br />
                            <i class="fa fa-tachometer icon_services fa-fw"></i>Creativity and Content Strategy<br />
                            <i class="fa fa-cogs icon_services fa-fw"></i>Brand Strategy & Identity<br />
                            <i class="fa fa-bar-chart icon_services fa-fw"></i>Analytics,  Reporting & Data Strategy<br />
                            <i class="fa fa-credit-card icon_services fa-fw"></i>Sales Representation<br />
                            <i class="fa fa-share-alt icon_services fa-fw"></i>Mobile and Social Media<br />
                            <i class="fa fa-crosshairs icon_services fa-fw"></i>Sponsorship Activation and Sales<br />
                            <i class="fa fa-star-o icon_services fa-fw"></i>Fan and Talent Management
                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fa fa-calendar"></i>
                            <h3>EVENTS</h3>
                        </div>
                        <div class="service-description">
                            <br />
                            <i class="fa fa-pencil-square-o icon_services fa-fw"></i>Production, Marketing and Management<br />
                            <i class="fa fa-briefcase icon_services fa-fw"></i>Specialized Conferences<br />
                            <i class="fa fa-rss icon_services fa-fw"></i>Technology procurement<br />
                            <i class="fa fa-share-alt icon_services fa-fw"></i>Social Interaction<br />
                            <i class="fa fa-map-o icon_services fa-fw"></i>Trade Shows<br />
                            <i class="fa fa-object-group icon_services fa-fw"></i>Interactive Conferences<br />
                            <i class="fa fa-calendar-check-o icon_services fa-fw"></i>Live Events on Social TV<br />
                            <i class="fa fa-link icon_services fa-fw"></i>Promotion & Sponsorships<br />
                            <i class="fa fa-cubes icon_services fa-fw"></i>Experiential & Promotional Marketing                       
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
                <h2>We have worked with the following companies</h2>
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
                <h2>Partners</h2>
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
            </div>
        </div>
    </div>
    <!-- /#partners -->

    <!-- #related -->
    <div id="related" class="section-cotent">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <h2>Related Sites</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://www.planetm.us/sports">
                        <img src="../images/logo_planetsports.png" class="img-responsive center-block" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://votovision.com" target="_blank">
                            <img src="../images/logo_votovision.png" class="img-responsive center-block" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://sportyads.network/" target="_blank">
                            <img src="../images/logo_sportyads.png" class="img-responsive center-block" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#related -->

    <div id="news" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>News</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-9">
                    <h4 class="widget-title">Latest News</h4>

                                    <?php
                                    $mysqli->query("SET NAMES 'utf8'");
                                    date_default_timezone_set("America/New_York");
                                    $sql = "SELECT recordid, title, subtitle, news_date FROM news where cat_id=5 and status='active' order by news_date desc LIMIT 3";
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
                        More News
                    </button><br /><br />
                    <div class="collapse" id="collapseExample">
                        <div>
                                    <?php
                                    $mysqli->query("SET NAMES 'utf8'");
                                    date_default_timezone_set("America/New_York");
                                    $sql = "SELECT recordid, title, subtitle, news_date FROM news where cat_id=5 and status='active' and news_date<'$last_date' order by news_date desc LIMIT 7";
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
                    <span style="color: #FFFFFF; font-size: 15px;">Sign Up for News & Updates<br />
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
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#news -->

    <div id="social" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Social</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
            <a class="twitter-timeline"  href="https://twitter.com/PlanetMWorld" data-widget-id="671398011516383232">Tweets by @PlanetMWorld</a>
            <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
                </div>
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
<a data-pin-do="embedUser" data-pin-board-width="340" data-pin-scale-height="392" data-pin-scale-width="80" href="https://www.pinterest.com/planetmworld/"></a>
<!-- Please call pinit.js only once per page -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
                </div>
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
                    <div class="fb-page" data-href="https://www.facebook.com/planetmworld" data-width="340" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/planetmworld"><a href="https://www.facebook.com/planetmworld">Planet M</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#social -->

    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Contact Us</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <h4 class="widget-title">Send Us a Message</h4>
                    <div class="contact-form">
                        <form id="contact_form" enctype="multipart/form-data" method="post">
                        <p class="full-row">
                            <label for="name_contact">Your Name:</label>
                            <input type="text" id="name_contact" name="name_contact">
                        </p>
                        <p class="full-row">
                            <label for="email_contact">Email:</label>
                            <input type="text" id="email_contact" name="email_contact">
                        </p>
                        <p class="full-row">
                            <label for="subject_contact">Subject:</label>
                            <input type="text" id="subject_contact" name="subject_contact">
                        </p>
                        <p class="full-row">
                            <label for="message_contact">Message:</label>
                            <textarea name="message_contact" id="message_contact" rows="6"></textarea>
                        </p>
                        <input class="mainBtn" type="button" name="" value="Send Message" onclick="subscribeContact()">
                        </form>
                        <span id="thanks_contact"><strong>Thank you for your request.</strong><br /><br />We will contact you momentarily.<br /><br />The PlanetM Team</span>
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <h4 class="widget-title">Find Us</h4>
                    <div class="map-holder">
                        <div class="google-map-canvas" id="map-canvas" style="height: 250px;">
                        </div>
                    </div>
                    <!-- /.map-holder -->
                    <div class="contact-info">
                        <span><i class="fa fa-home"></i>1140 Broadway # 6, New York, NY 10001</span>
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
                    <h4 class="modal-title" id="ModalLogin" style="color: #ffffff; padding-left: 8px">PRIVACY POLICY</h4>
                </div>
                                    <?php
                    $mysqli->query("SET NAMES 'utf8'");
                    $stmt = $mysqli->prepare("SELECT description FROM contents WHERE name='privacy policy' and status='active' and cat_id=2") or die(mysqli_error($mysqli));
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
                        Copyright &copy; 2016 PlanetM!&nbsp;&nbsp;|&nbsp;&nbsp;<a data-toggle="modal" data-target="#modal_login">Privacy Policy</a><br />
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
                            Back to Top
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
