<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- SEO -->
    <meta name="author" content="ING">
    <meta name="description" content="What's Your Thing is an event from ING">
    <meta name="keywords" content="ing, whatsyourthing, event, conference">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Page Title -->
    <title>What's Your Thing | ING</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Font : Open Sans & Montserrat -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Plugins -->
    <link href="css/plugins/animate.css" rel="stylesheet">
    <link href="css/plugins/slick.css" rel="stylesheet">
    <link href="css/plugins/magnific-popup.css" rel="stylesheet">
    <link href="css/plugins/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/streamline-icons.css" rel="stylesheet">

    <!-- Event Style -->
    <link href="css/event.css" rel="stylesheet">

    <!-- Color Theme -->
    <!-- Options: green, purple, red, yellow, mint, blue, black  -->
    <link href="css/themes/red.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="js/ie/respond.min.js"></script>
  <![endif]-->

    <!-- Modernizr -->
    <script src="js/modernizr.min.js"></script>
    <!-- Subtle Loading bar -->
    <script src="js/plugins/pace.js"></script>
</head>

<body class="animate-page" data-spy="scroll" data-target="#navbar" data-offset="100">
    <!--Preloader div-->
    <div class="preloader"></div>

    <!-- Fixed navbar -->
    <!-- <nav class="navbar navbar-default navbar-fixed-top reveal-menu js-reveal-menu reveal-menu-hidden">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h5>WHAT'S YOUR THING</h5></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#top">Home</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#sponsors" class="hidden-sm">Sponsors</a></li>
                    <li><a href="#venue" class="hidden-sm">Venue</a></li> 
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Header Layouts</li>
                            <li><a href="index.html">Solid Color</a></li>
                            <li><a href="index-slider.html">Content Slider</a></li>
                            <li><a href="index-parallax.html">Image Parallax</a></li>
                            <li><a href="index-video.html">Video Background</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Form Variations</li>
                            <li><a href="index.html">Paypal Registration</a></li>
                            <li><a href="index-email.html">Email Registraion</a></li>
                            <li><a href="index-mailchimp.html">Mailchimp Subscription</a></li>
                            <li><a href="index-eventbrite.html">Eventbrite Integration</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            #nav-collapse
        </div>
    </nav> -->
    <!-- // End Fixed navbar -->

    <header id="top" class="header">
        <div class="container">

            <div class="header_top-bg">
                <div class="logo">
                    <a href="#"><img src="images/event-logo.png" width="250px" alt="event-logo"></a>
                    <!-- <h3 class="headline-support wow fadeInDown">ING</h3> -->
                </div>
            </div>

            <h1 class="headline wow fadeInDown" data-wow-delay="0.1s">WHAT'S YOUR THING</h1>

            <div class="when_where wow fadeIn" data-wow-delay="0.4s">
                <p class="event_when">November 9, 2020</p>
                <p class="event_where">Location of Event</p>
            </div>

            <div class="header_bottom-bg">
                <a class="btn btn-default btn-xl wow zoomIn" data-wow-delay="0.3s" href="#" data-toggle="modal" data-target="#email-register">REGISTER NOW</a>
                <p class="cta_urgency wow fadeIn" data-wow-delay="0.5s"><small>ANY TEXT THAT YOU WANT TO ADD</small></p>
            </div>

        </div>
        <!-- end .container -->
    </header>
    <!-- end .header -->

    <!-- 
     Highlight Section
     ====================================== -->

    <section class="highlight">

        <div class="container">
            <p class="lead text-center">"What's Your Thing is an event from ING.</p>

            <div class="countdown_wrap">

                <h6 class="countdown_title text-center">EVENT WILL START IN</h6>

                <!-- Countdown JS for the Event Date Starts here.
    TIP: You can change your event time below in the Same Format.  -->

                <ul id="countdown" data-event-date="9 november 2020 08:00:00">
                    <li class="wow zoomIn" data-wow-delay="0s"> <span class="days">00</span>
                        <p class="timeRefDays">days</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.2s"> <span class="hours">00</span>
                        <p class="timeRefHours">hours</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.4s"> <span class="minutes">00</span>
                        <p class="timeRefMinutes">minutes</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.6s"> <span class="seconds">00</span>
                        <p class="timeRefSeconds">seconds</p>
                    </li>
                </ul>
            </div>
            <!-- end .countdown_wrap -->

            <div class="text-center">

                <!-- Add to Calendar Plugin. 
                     For Customization, Visit https://addtocalendar.com/ -->

                <span class="addtocalendar atc-style-theme">
                <a class="atcb-link"><i class="fa fa-calendar"> </i> Add to My Calendar</a>
                  <var class="atc_event">
                      <var class="atc_date_start">2020-11-09 00:00:00</var>
                      <var class="atc_date_end">2020-11-09 24:00:00</var>
                      <var class="atc_timezone">Philippines/Singapore</var>
                      <var class="atc_title">What's Your Thing | ING Event</var>
                      <var class="atc_description">What's your thing is an event from ING</var>
                      <var class="atc_location">Philippines, Manila</var>
                      <var class="atc_organizer">ING</var>
                      <var class="atc_organizer_email"></var>
                  </var>
               </span>

            </div>

        </div>
        <!-- end .container -->

    </section>
    <!-- end section.highlight -->

    <!-- 
     Our Speakers
     ====================================== -->

    <section class="speakers" id="speakers">
        <div class="container">

            <div class="section-title wow fadeInUp">
                <h4>OUR SPEAKERS</h4>
            </div>

            <div class="speaker-slider">

                <div class="speaker-info wow fadeIn" data-wow-delay="0s">
                    <img src="images/avatar_1.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.1s">
                    <img src="images/avatar_2.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.2s">
                    <img src="images/avatar_3.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.3s">
                    <img src="images/avatar_4.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.4s">
                    <img src="images/avatar_5.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.5s">
                    <img src="images/avatar_6.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>

                <!-- end .speaker-info -->
                <div class="speaker-info wow fadeIn" data-wow-delay="0s">
                    <img src="images/avatar_1.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.1s">
                    <img src="images/avatar_2.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

                <div class="speaker-info wow fadeIn" data-wow-delay="0.2s">
                    <img src="images/avatar_3.png" alt="avatar" class="img-responsive center-block">
                    <p>Speaker's Name</p>
                    <span>Position</span>
                </div>
                <!-- end .speaker-info -->

            </div>

        </div>
        <!-- end .container -->
    </section>
    <!-- end section.speakers -->

    <!-- 
     What to Expect : Benefits
     ====================================== -->

    <!-- TODO: Change Icons to Fonts for better theming. -->

    <section class="benefits">

        <div class="container">
            <div class="section-title wow fadeInUp">
                <h4>WHAT TO EXPECT</h4>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="benefit-item wow fadeInLeft">
                                <div class="benefit-icon"><i class="icon icon-bubble-love-streamline-talk"> </i></div>
                                <h6 class="benefit-title">Benefit 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie libero metus, vel sodales ante lacinia eget. Donec sodales metus quis neque aliquam, nec cursus ex hendrerit. Praesent quam ex, varius id leo tristique, tempus porttitor arcu. Aenean ornare in est nec consequat. Vestibulum euismod vestibulum odio et semper. </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-item wow fadeInRight">
                                <div class="benefit-icon"><i class="icon icon-map-pin-streamline"> </i></div>
                                <h6 class="benefit-title">Benefit 2</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie libero metus, vel sodales ante lacinia eget. Donec sodales metus quis neque aliquam, nec cursus ex hendrerit. Praesent quam ex, varius id leo tristique, tempus porttitor arcu. Aenean ornare in est nec consequat. Vestibulum euismod vestibulum odio et semper. </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="benefit-item wow fadeInLeft">
                                <div class="benefit-icon"> <i class="icon icon-cocktail-mojito-streamline"> </i></div>
                                <h6 class="benefit-title">Benefit 3</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie libero metus, vel sodales ante lacinia eget. Donec sodales metus quis neque aliquam, nec cursus ex hendrerit. Praesent quam ex, varius id leo tristique, tempus porttitor arcu. Aenean ornare in est nec consequat. Vestibulum euismod vestibulum odio et semper. </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-item wow fadeInRight">
                                <div class="benefit-icon"> <i class="icon icon-armchair-chair-streamline"> </i></div>
                                <h6 class="benefit-title">Benefit 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie libero metus, vel sodales ante lacinia eget. Donec sodales metus quis neque aliquam, nec cursus ex hendrerit. Praesent quam ex, varius id leo tristique, tempus porttitor arcu. Aenean ornare in est nec consequat. Vestibulum euismod vestibulum odio et semper. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end .container -->
    </section>
    <!-- end section.benefits -->

    <!-- 
     Footer Call to Action
     ====================================== -->

    <section class="footer-action">

        <div class="container">

            <h4 class="headline-support wow fadeInDown">WHAT'S YOUR THINGS?</h4>
            <h2 class="headline wow fadeInDown" data-wow-delay="0.1s">JOIN THE EVENT</h2>

            <div class="footer_bottom-bg">
                <a class="btn btn-success btn-xl wow zoomIn" data-wow-delay="0.3s" href="#" data-toggle="modal" data-target="#email-register">REGISTER NOW</a>
            </div>

        </div>

    </section>
    <!-- end section.footer-action -->

    <footer>

        <div class="social-icons">
            <a href="#" class="wow zoomIn"> <i class="fa fa-twitter"></i> </a>
            <a href="#" class="wow zoomIn" data-wow-delay="0.2s"> <i class="fa fa-facebook"></i> </a>
            <a href="#" class="wow zoomIn" data-wow-delay="0.4s"> <i class="fa fa-linkedin"></i> </a>
        </div>
        <p> <small class="text-muted">Copyright © 2020. All rights reserved.</small></p>

    </footer>

    <a href="#top" class="back_to_top"><img src="images/back_to_top.png" alt="back to top"></a>

    <!-- 
     Registration Popup (EMAIL)
     ====================================== -->

    <div class="modal fade" id="email-register" tabindex="-1" role="dialog" aria-labelledby="register-now-label">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="register-now-label">Event Registration
</h4>
                </div>
                <div class="modal-body">

                    <div class="registration-form">

                        <form action="php/register.php" method="POST" target="_top" id="email-registration-form" data-redirect="success.php">

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company" placeholder="Company" required>
                            </div>

                            <!-- <div class="row"> -->

                                <!-- <div class="col-sm-7">

                                    <div class="form-group">
                                        <label>Choose a Pass</label>
                                        <select class="form-control" name="pass" required>
                                            <option value="">Choose...</option>
                                            <option value="Silver Pass">Silver Pass $49.00 USD</option>
                                            <option value="Gold Pass">Gold Pass $99.00 USD</option>
                                            <option value="VIP Pass">VIP Pass $149.00 USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">

                                    <div class="form-group">
                                        <label>No. of Seats</label>
                                        <select class="form-control" name="seats" required>
                                            <option value="">Choose...</option>
                                            <option value="1">1 seat</option>
                                            <option value="2">2 seats</option>
                                            <option value="3">3 seats</option>
                                        </select>
                                    </div>

                                </div> -->

                            <!-- </div> -->
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" required> I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>

                            <div class="text-center top-space">
                                <button type="submit" id="register-btn" class="btn btn-success btn-lg js-register-btn">Register</button>
                                <div id="js-register-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- 
     Javascripts : Nerd Stuff :)
     ====================================== -->

    <!-- jQuery Library -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- 3rd party Plugins -->
    <script src="js/plugins/countdown.js"></script>
    <script src="js/plugins/wow.js"></script>
    <script src="js/plugins/slick.js"></script>
    <script src="js/plugins/magnific-popup.js"></script>
    <script src="js/plugins/validate.js"></script>
    <script src="js/plugins/appear.js"></script>
    <script src="js/plugins/count-to.js"></script>
    <script src="js/plugins/nicescroll.js"></script>

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/plugins/infobox.js"></script>
    <script src="js/plugins/google-map.js"></script>
    <script src="js/plugins/directions.js"></script>

    <!-- JS Includes -->
    <script src="js/includes/subscribe.js"></script>
    <script src="js/includes/contact_form.js"></script>
    <script src="js/includes/register.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

</body>

</html>