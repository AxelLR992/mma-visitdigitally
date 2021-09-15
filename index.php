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
    <meta name="keywords"
        content="virtual live tours, marketing, technology, advertising, AI, IOT, Blockchain, Cloud applications" />
    <meta name="author" content="VisitDigitally Carlos Vassallo">
    <meta name="description"
        content="VisitDigitally provides REAL-TIME INTERACTIVE LIVE CAMPUS TOURS FOR UNIVERSITIES, PARENTS AND PROSPECTIVE STUDENTS using AI to IoT to Analytics  to Cloud-based Applications, we help our customers in ways that go well beyond conventional marketing tools ">
    <meta property="og:title" content="VisitDigitally.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://www.visitdigitally.com" />
    <meta property="og:image" content="https://www.visitdigitally.com/images/slide1bg_1.jpg" />
    <meta property="og:description"
        content="We put technology at the core of content-driven, digital-forward marketing campaigns for leading educational institutions looking to engage with prospective and current students." />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content=" VisitDigitally – A Digital, multicultural and Technology Marketing Agency " />
    <meta name="twitter:description"
        content="We put technology at the core of content-driven, digital-forward marketing campaigns for leading educational institutions looking to engage with prospective and current students." />
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style3.css">

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
        ajax.open("POST", "scripts/proc_subsnews.php");
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
                                    <img src="images/logo_visitdigitally.png" style="margin-top: 10px" /></a>
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
                        <span class="demo_button">
                            <a href="#contact">
                                <!-- <img src="./images/boton-ingles.png" alt="Book Demo" style="margin-top: -11px"> -->
                                <button class="btn-tickets">Buy tickets</button>
                                <button class="btn-tickets btn-live">Watch live</button>
                            </a>&nbsp;&nbsp;
                        </span>
                        <a href="spa/index.php">
                            <img src="banderas/espana.jpg" style="margin-top: -8px; border: 0" />
                        </a>&nbsp;&nbsp;&nbsp;
                        <a href="#"
                            class="toggle-menu fa fa-bars">
                        </a>
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
        <div
            style="top:0px; left:0px; background-color: rgba(0, 0, 0, 0.5); width: 100%; height: 100%; z-index: 10000;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 video_blurb">
                    <h3>
                        <span id="swpText"></span>
                    </h3>
                    <h2>
                        <br /><br /><br />
                        Tag line here
                        <br />

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
        </div>
        <video loop muted autoplay class="tall" style="width: 100%; height: auto;">
            <source src="video/fight_home_video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- #upcoming-fights -->
    <section id="services-type" class="event-type-section" style="padding-top: 130px;">
        <div class="container">
            <div class="title-section text-center" style="margin-bottom: 40px;">
                <h2>Upcoming fights</h2>
                Watch them live
                <span></span>
            </div>
            <div class="row justify-content-center no-gutters stagger-tween">
                    <?php
                    $upcomingFights = array(
                        array(
                            "title" => "Fight 1",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 2",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 3",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 4",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 5",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 6",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 7",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        array(
                            "title" => "Fight 8",
                            "imgPath" => "img/events/ev-tours.jpg",
                            "description" => "Increase your success rate. Show all offerings from academic presentations to admission
                            and financial aid, and life inside and outside the classroom. Help your audience to
                            explore campus life, meet students & discover your hands on approach to education."
                        ),
                        
                    );
                    
                    foreach ($upcomingFights as $fight){ ?>
                        <div class="col-md-3 p-2 stagger-tween-item">
                            <div class="reveal-container">
                                <img class="img-responsive" src="<?php echo $fight['imgPath'] ?>" alt="">
                                <h5 class="text-white text-uppercase text-shadow p-3 px-lg-4"
                                    style="position : absolute; bottom : 0px;"><?php echo $fight['title'] ?></h5>
                                <div
                                    class="px-3 py-2 p-md-3 px-lg-4 py-lg-4 d-flex flex-row align-items-center reveal-subcontainer">
                                    <div class="reveal-content">
                                        <br><span style="color: #55cbfc; font-weight: bold"><?php echo $fight['title'] ?></span></br>
                                        <?php echo $fight['description'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </section>
    <!-- /#upcoming-fights -->

    <!-- #tickets-on-sale -->
    <section class="sales-section">
        <h2>Tickets on sale</h2>
        <h5>Two thrilling world championship bouts top ufc 267 in Abu Dhabi</h5>

        <button>Get yours here</button>
    </section>
    <!-- /#tickets-on-sale -->

    <div class="flexslider">
        <br><br><br>
        <ul class="slides">
            <li>
                <img src="images/socialdivider_english.jpg" alt="">
            </li>
        </ul>

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
                                <button class="btn btn-primary" type="Submit" id="send-message" style="clear:both;">SEND
                                    MESSAGE</button>

                            </form>
                            <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                    <div class="col-md-5 col-sm-6">
                        <h4 class="widget-title">Find Us</h4>
                        <div class="map-holder">
                            <iframe id="mapiframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8230886969245!2d-73.99093488475901!3d40.74391814359955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a679220bd3%3A0xa32c6d3673173c4c!2s1140%20Broadway%206th%20Floor%2C%20New%20York%2C%20NY%2010001%2C%20EE.%20UU.!5e0!3m2!1ses!2sar!4v1584568249280!5m2!1ses!2sar"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- /.map-holder -->
                        <div class="contact-info">
                            <span><i class="fa fa-home"></i>1140 Broadway 6th Floor, New York, NY 10001</span>
                            <span><i class="fa fa-phone"></i>(212) 518 7543</span>
                            <span><i class="fa fa-envelope"></i>info@visitdigitally.com</span>
                            <span><i class="fa fa-whatsapp" style="color: #24cc63"></i> <a
                                    href="https://wa.me/12125187543" target="_blank">Chat now</a></span>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title" id="ModalLogin" style="color: #ffffff; padding-left: 8px">PRIVACY POLICY
                    </h4>
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
                        <img src="images/logo_white.png" /><br />
                        Copyright &copy; 2020 VisitDigitally.com&nbsp;|&nbsp;<a data-toggle="modal"
                            data-target="#modal_login">Privacy Policy & GDPR</a><br /><a
                            href="https://www.visitdigitally.com/apps.pdf">Apps & Software Integration List</a>
                        <br />
                        <a href="https://www.visitdigitally.com/video/home_planet_publish.mp4">Video Sample</a>
                        <br><br><a href="https://www.visitdigitally.com/spa/index.php">Español&nbsp;|&nbsp;<a
                                href="https://www.visitdigitally.com/por/index.php">Portuguese</a><br />
                            <br />
                            <span>
                                <a href="#contact">
                                    <!-- <img src="./images/boton-ingles.png" alt="Book Demo" style="margin-top: 0px; margin-bottom: 0px;" /> -->
                                    <button class="btn-tickets">Buy tickets</button>
                                </a>&nbsp;&nbsp;</span><br /><br />
                                <a href="https://www.linkedin.com/company/66737070" target="_blank"><i
                                    class="fa fa-linkedin-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a
                                href="https://www.facebook.com/visitdigitally" target="_blank"><i
                                    class="fa fa-facebook-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a
                                href="https://twitter.com/visitdigitally" target="_blank"><i
                                    class="fa fa-twitter-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;<a
                                href="https://instagram.com/visitdigitally" target="_blank"><i
                                    class="fa fa-instagram fa-3x"></i></a>
                            </i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCyKvkfiNp2l0wmws5qzBMSQ"
                            target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>&nbsp;</i></a><br>
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

    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.js"></script>
    <script src="js/animation.gsap.js"></script>
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