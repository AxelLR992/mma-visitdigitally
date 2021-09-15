<?php
include_once 'cp/app_includes/db_connect.php';
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
    <title>Visit Digitally | Hello!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="marketing, technology advertising, whole market, total market, hispanic marketing, multicultural marketing, best agency, multicultural advertising, AI, IOT, Blockchain, Cloud applications" />
    <meta name="author" content="VisitDigitally Carlos Vassallo">
    <meta name="description" content="VisitDigitally- is a full-service digital and technology marketing company with offices in New York City and Latin America. We connect global and personal brands with people. We develop solutions that can have impact on how our clients do business. From AI to IoT to Analytics to Blockchain to Cloud-based Applications, we help our customers in ways that go well beyond conventional marketing tools ">
    <meta property="og:title" content="VisitDigitally.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://www.visitdigitally.com" />
    <meta property="og:image" content="https://www.visitdigitally.com/images/slide1bg_1.jpg" />
    <meta property="og:description" content="We put culture at the core of content-driven, digital-forward marketing campaigns for leading global and personal brands looking to engage with people." />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content=" VisitDigitally – Multicultural Digital and Technology Marketing Agency " />
    <meta name="twitter:description" content=" We put culture at the core of content-driven, digital-forward marketing campaigns for leading global and personal brands looking to engage with people." />
    <meta charset="UTF-8">

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
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-98297837-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
    <script>
        /* Script written by Adam Khoury @ DevelopPHP.com */ /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
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
        $(document).ready(function(e) {
            $("#contact_form").on('submit', (function(e) {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "name": $('input[name="name_contact"]').val(),
                        "email": $('input[name="email_contact"]').val(),
                        "phone": $('input[name="subject_contact"]').val(),
                        "content": $('textarea[name="message_contact"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function(response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function() {}
                });
            }));
        });
    </script>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- start preloader -->
    <!-- <div class="preloader">
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
                                <a href="#" title="VisitDigitally.com">
                                    <img src="../images/logo_visitdigitally.png" style="margin-top: 10px" /></a>
                            </div>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-6">
                            <div class="menu text-right hidden-xs hidden-sm hidden-lg hidden-md">
                                <ul>
                                    <li><a href="#about">Company</a></li>
                                    <li><a href="#how-it-works">How it works</a></li>
                                    <li><a href="#services-type">Services</a></li>
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
                        <span class="demo_button"><a href="#contact"><img src="./images/boton-ingles.png" alt="Book Demo" style="margin-top: -11px"></a>&nbsp;&nbsp;</span>
                        <a href="../spa/index.php">
                            <img src="banderas/espana.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;<a href="../por/index.php"><img src="banderas/portugal.jpg" style="margin-top: -8px; border: 0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="#about">Company</a></li>
                                <li><a href="#how-it-works">How it works</a></li>
                                <li><a href="#services-type">Services</a></li>
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
                    <span id="swpText"></span></h3>
                <h2>
                    <br /><br /><br />
                    Real-time interactive live campus tours<br>for universities, parents and prospective students <br />

                </h2>

                <script type="text/javascript">
                    var im = document.getElementById("swpText");

                    var accText = [""];
                    var index = 0;

                    function changeText() {
                        im.textContent = accText[index];
                        index++;
                        if (index >= accText.length) {
                            index = 0;
                        }
                    };
                </script>
                <script type="text/javascript">
                    setInterval(changeText, 2000);
                </script>



            </div>
        </div>
        <video loop muted autoplay class="tall" style="width: 100%; height: auto;">
            <source src="../video/home_planet_publish.mp4" type="video/mp4">
        </video>        
        <!-- <video autoplay playsinline width="100%" height="auto" class="tall">
            <source src="../video/home_planet_publish.mp4" type="video/mp4">
        </video> -->
    </div>
    <!-- /#home -->
    <!-- slider 
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="../images/slider_techno.jpg" alt="">
                <div class="flex-caption">
   
                    <h2>Campus <br>Tours</h2><br/>
                        
                    <span></span>
                    <p>
                        Technologically driven
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_digital.jpg" alt="">
                <div class="flex-caption">
                    <h2>Student <br>Orientation
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
                    <h2>Virtual <br>Classrooms</h2>
                    <span></span>
                    <p>
                        Social at the Core
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider_international.jpg" alt="">
                <div class="flex-caption">
                    <h2>Lecture Halls
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
                    <h2>Family Engagement </h2>
                    <span></span>
                    <p>
                        Humanly Obsessed
                    </p>
                </div>
            </li>
        </ul>
    </div>
    -->
    <div id="about" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Company</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-9">
                    <h4 class="widget-title">VisitDigitally PRODUCES INTERACTIVE LIVE AND VIDEO CAMPUS TOURS</h4>
                    <p class="area_text">
                        Visit Digitally is a recognized leader in the OTT TV (Over-the-top TV), OVP
                        (Online Video Platform), EdVP (Education Video Platform), and EVP (Enterprise Video Platform) markets.
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
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Internationally integrated</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Humanly obsessed</div>
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
                                <img src="../images/team/member-1.jpg" alt="Carlos Vassallo Leadership">
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
                                <span>Leadership</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_smith.jpg" alt="Amanda Smith COO">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/amandapilarsmith/" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/asmithcaterers" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Amanda<br />
                                    Smith</h5>
                                <span>COO</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/ph_francesco.jpg" alt="Francesco Andreoli Ai">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/francescoandreoli/" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/francescoswiss" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Francesco<br />
                                    Andreoli</h5>
                                <span>Ai Chief</span>
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
                                <span>CPO</span>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="../images/team/marcelo.jpg" alt="Marcelo">
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
                                <span>CTO</span>
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
                                <span>International</span>
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
                                <img src="../images/team/ph_kretel.jpg" alt="Lourdes">
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
                                <span>Sales</span>
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
                                <span>Content</span>
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
                                <span>Strategy</span>
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
                                        <li><a href="https://www.linkedin.com/in/facundo-rawson-871281" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/frawson" class="fa fa-twitter" target="_blank"></a></li>
                                    </ul>
                                </div>
                                <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Facundo <br />
                                    Rawson</h5>
                                <span>Biz Development</span>
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
                                <span>Operations</span>




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
                <h2>How it works</h2>
                360&deg; Virtual Live Experience
                with encrypted interactions </br>Connect school administrators, parents and prospective students
                <span></span>
            </div>
            <div class="row justify-content-center no-gutters">
                <div class="col-md-4 col-md-offset-4" style="border: 1px solid #55cbfc; padding: 20px; text-align: center; margin-bottom: 30px; font-size: 18px">
                No download required</br>
                <span style="color: #55cbfc">READY IN MINUTES</span></br>
                Stand alone or embed on your website</br>              
                </div>            
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">

                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-corporate.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Live Interaction---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                            Talk live to an administrator, alumni, current students, professors and others!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-education.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Students---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Talk to students domestic and internationally. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-health.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Live Classes---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Tele-Medicine, The Connected Hospital, Tele-Consultation, Online Therapy, Elderly Care, Pharmacy Networks, Medical Training, Conventions, and more! We have the right Solution for you.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-digital.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">E-commerce---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Broadcast your Events, and boost your Audience and Reach (including monetization!). Ideal for Conferences, Concerts, Seminars, TV Shows, Webinars, YouTubers, Influencers, Private Events (i.e.: Weddings), and much more!.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-broadcast.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Content---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Choose from multiple methods of receiving television signals at multiple resolutions through a variety of media and social networks.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-fashion.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Data Intelligence---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Livestreaming your fashion show is a must. Don't miss out on a huge opportunity that your competitors are going to pick up on.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-sports.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Cloud Services---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Strean live, promote clubs, associations, athletes and more!.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-smartcities.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Multilanguage---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                An ideal step towards e-Government solutions. Consulate Networks, Trade Development, Public Security, Health Systems, Citizen Services, Regulators Municipalities, and more<br>80% of the world’s population by 2025 will be on some sort of Tele (-education, -health, -commerce, etc.), and IOT endpoints will average 4 per human! Our system can easily integrate with any IOT application in any format.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-investor.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Omnichannel---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Engage media, investors, analysts and employees worldwide with a feature-rich, interactive event and tell your company story in an engaging way. Our global OTT and live broadcasting solutions support your IR and communications programs with a dedicated team, focus on security and actionable analytics.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-ecosystem.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Real time feedback---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Combine unlimited IDMRs and create private Ecosystems, fully customized to your Business objectives and your Vision! Scalable. White-Label. Security. Digital Transformation that Works.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-ott.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Ai & Virtual Reality---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Operate your own OTT service and monetize your content with SVOD, TVOD and AVOD models. Get your OTT business off the ground with a trusted partner. We'll help you get there. Stream live events. Dedicated service support. Secure distribution. Expand into new markets.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-fintech.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Chats & Social Media---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Use innovative technology to deliver a wide range of financial products and services.
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
                <h2>Services</h2>
                Turnkey Solutions
                <span></span>
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-tours.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Virtual Tours---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Implement PlanetM.us tours, our digital tour services to allow potential customers and service providers including Educational Institutions and Universities to buy your product or service. Stream live from anywhere, in any device and in any platform.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-celebrities.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Live Events---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Master Celebrities and Influencers live streams. If you’re looking for inspiration, you’ve come to the right place. If your brand is looking to partner with influencers and celebrities in a live stream collaboration, you can to do it on a private network or social platform of your choice by teaming-up with us.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-legal.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">App & Soft Integration---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Service clients and communicate with them in a secured and encrypted environment using the latest digital communications tools for full protection of their privacy.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2 stagger-tween-item">
                    <div class="reveal-container">
                        <img class="img-responsive" src="img/events/ev-professionals.jpg" alt="">
                        <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4" style="position : absolute; bottom : 0px;">Exclusive Content---></h5>
                        <div class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                            <div class="reveal-content">
                                Expand your business activities, reach a broader audience, differentiate! Ideal for Consultants, Auditors, Lawyers, Insurance Agents, Investment Advisors, Teachers, Entrepreneurs, Sales, and more!.
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
                <h2>Tech Partners</h2>
                <span></span>
            </div>
            <div class="row" style="text-align:center">
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
                    <br>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="images/screen.png" class="img-responsive center-block" />
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="images/eventbrite.png" class="img-responsive center-block" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="images/survey.png" class="img-responsive center-block" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="images/magnum.png" class="img-responsive center-block" />
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
                        <a href="https://www.planetm.us/sportsindustry">
                            <img src="../images/logo_sports.png" class="img-responsive center-block" /></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="https://www.planetm.us" target="_blank">
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
                <h2>News</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <div class="row">
                <div class="col-md-8">
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
                        MORE NEWS
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
                <div class="col-md-4">
                    <div class="suscribe_panel">
                        <span style="color: #FFFFFF; font-size: 15px;">Sign Up for News & Updates<br />
                            <br />
                        </span>
                        <div class="contact-form">
                            <form id="register_form" enctype="multipart/form-data" method="post">
                                <p class="full-row">
                                    <label for="email-news">Enter your Email:</label>
                                    <input type="text" id="email-news" name="email-news">
                                </p>

                                <input class="mainBtn" type="button" name="subscribe" value="Subscribe" style="border:none;" onclick="subscribeNews()">
                            </form>
                            <span id="thanks_subs">Thanks for subscribing!</span>
                        </div>
                    </div>

                    <div style="padding:20px;">
                        <span>By clicking register, you agree to all
                            terms, conditions and agreements,
                            including the Terms of Use, Privacy
                            Policy and Cookies Policy.</span>
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
                <img src="../images/socialdivider_english.jpg" alt="">
            </li>
        </ul>
        <div>
            <!--<div id="social" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Social</h2>
                <span></span>
            </div>
            <!-- /.title-section -->
            <!--  <div class="row">
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">-->
            <!--   <a class="twitter-timeline"  href="https://twitter.com/PlanetMWorld" data-widget-id="671398011516383232">Tweets by @PlanetMWorld</a>
            <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
                </div>
                <div class="col-md-4" style="text-align: center; padding-top: 20px;">
<a data-pin-do="embedUser" data-pin-board-width="340" data-pin-scale-height="392" data-pin-scale-width="80" href="https://www.pinterest.com/planetmworld/"></a>
-->
            <!-- Please call pinit.js only once per page -->
            <!--<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
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
            <!--        </div>-->
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
                        <h4 class="widget-title">Book a Free Demo - Send Us a Message</h4>
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
                                <div class="g-recaptcha" data-sitekey="6LfjUOIUAAAAAAHdxw_Dnyh3H9Vh8kVSClTn8xLY"></div>
                                <div id="mail-status"></div>
                                <button class="mainBtn" type="Submit" id="send-message" style="clear:both;">Send Message</button>

                            </form>
                            <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                    <div class="col-md-5 col-sm-6">
                        <h4 class="widget-title">Find Us</h4>
                        <div class="map-holder">
                            <iframe id="mapiframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8230886969245!2d-73.99093488475901!3d40.74391814359955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a679220bd3%3A0xa32c6d3673173c4c!2s1140%20Broadway%206th%20Floor%2C%20New%20York%2C%20NY%2010001%2C%20EE.%20UU.!5e0!3m2!1ses!2sar!4v1584568249280!5m2!1ses!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- /.map-holder -->
                        <div class="contact-info">
                            <span><i class="fa fa-home"></i>1140 Broadway 6th Floor, New York, NY 10001</span>
                            <span><i class="fa fa-phone"></i>(212) 518 7543</span>
                            <span><i class="fa fa-envelope"></i>info@visitdigitally.com</span>
                            <span><i class="fa fa-whatsapp" style="color: #24cc63"></i> <a href="https://wa.me/12125187543" target="_blank">Chat now</a></span>                            
                        </div>
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
                        Juan Gutierrez<br />
                        juan@visitdigitally.com<br />
                        <br />
                        MEXICO<br />
                        Lourdes Padilla<br />
                        lourdes@visitdigitally.com<br />
                        <br />
                        COLOMBIA<br />
                        Eder Olguin<br />
                        eder@visitdigitally.com<br />
                        <br />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="map_panel">
                        BRAZIL<br />
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
                        Copyright &copy; 2020 VisitDigitally.com&nbsp;|&nbsp;<a data-toggle="modal" data-target="#modal_login">Privacy Policy & GDPR</a><br /><a href="https://www.visitdigitally.com/apps.pdf">Apps & Software Integration List</a><br><br><a href="https://www.visitdigitally.com/spa/index.php">Español&nbsp;|&nbsp;<a href="https://www.visitdigitally.com/por/index.php">Portuguese</a><br />
                            <br />
                            <span><a href="#contact"><img src="./images/boton-ingles.png" alt="Book Demo" style="margin-top: 0px; margin-bottom: 0px;"></a>&nbsp;&nbsp;</span><br /><br />
                            <a href="https://www.linkedin.com/company/visitdigitally" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/visitdigitally" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/visitdigitally" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://instagram.com/visitdigitally" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                            &nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/visitdigitally" target="_blank"><i class="fa fa-pinterest-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/visitdigitally" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>&nbsp;</i></a><br>
                        VisitDigitally.com recommends CHROME - <a href="https://www.google.com/chrome">Download</a>
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
include_once 'cp/app_includes/db_close.php';
?>