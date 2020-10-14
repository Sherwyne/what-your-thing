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

    <!-- Modernizr -->
    <script src="js/modernizr.min.js"></script>
    <!-- Subtle Loading bar -->
    <script src="js/plugins/pace.js"></script>
</head>

<body class="animate-page" data-spy="scroll" data-target="#navbar" data-offset="100">
    <!--Preloader div-->
    <div class="preloader"></div>
    <section class="message">
        <div class="alert-custom alert-info text-center" role="alert">
            <h4 class="alert-heading ">Welcome!</h4>
            <p>Nice to have you here! Welcome to ING pay virtual launch! <a href="#" class="alert-link"
                    data-toggle="modal" data-target="#email-register">SIGN UP NOW</a> and get ready to do your thing
                with ING!
            <p>
        </div>
    </section>
    <header id="top" class="header">

        <!-- <div class="container" height="100%"> -->
        <a class="btn btn-default btn-xl wow zoomIn btn-position" data-wow-delay="0.3s" href="#" data-toggle="modal"
            data-target="#email-register">REGISTER NOW</a>
        <!-- </div> -->
        <!-- end .container -->
    </header>
    <!-- end .header -->

    <!-- 
     Highlight Section
     ====================================== -->

    <section class="highlight">

        <div class="container">
            <div class="countdown_wrap">
                <h3 class="countdown_title text-center white">EVENT WILL START IN <b>NOVEMBER 9, 2020</b></h6>
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
                        <var class="atc_timezone">Philippines</var>
                        <var class="atc_title">What's Your Thing | ING Event</var>
                        <var class="atc_description">What's your thing is an event from ING</var>
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
     Footer Call to Action
     ====================================== -->

    <section class="footer-action">

        <div class="container">

            <h2 class="headline wow fadeInDown" data-wow-delay="0.1s">JOIN THE EVENT</h2>
            <a class="btn btn-success btn-xl wow zoomIn" data-wow-delay="0.3s" href="#" data-toggle="modal"
                data-target="#email-register">REGISTER NOW</a>

        </div>

    </section>
    <!-- end section.footer-action -->

    <footer>

        <div class="social-icons">
            <a href="#" class="wow zoomIn"> <i class="fa fa-twitter"></i> </a>
            <a href="#" class="wow zoomIn" data-wow-delay="0.2s"> <i class="fa fa-facebook"></i> </a>
            <a href="#" class="wow zoomIn" data-wow-delay="0.4s"> <i class="fa fa-linkedin"></i> </a>
        </div>
        <p class="white"> <small>Copyright © whatsyourthing 2020. All rights reserved.</small></p>

    </footer>

    <a href="#top" class="back_to_top"><img src="images/back_to_top.png" alt="back to top"></a>

    <!-- 
     Registration Popup (EMAIL)
     ====================================== -->

    <div class="modal fade" id="email-register" tabindex="-1" role="dialog" aria-labelledby="register-now-label">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="register-now-label">Event Registration
                    </h4>
                </div>
                <div class="modal-body">

                    <div class="registration-form">

                        <form action="php/register.php" method="POST" target="_top" id="email-registration-form"
                            data-redirect="success.php">

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="First Name" required>

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company" placeholder="Company" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" name="contact" placeholder="Contact Number"
                                    required>
                            </div>


                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" required> I agree to the <a
                                            href="terms.html">Terms</a> and <a href="term_privacy.html">Privacy
                                            Policy</a>
                                    </label>
                                </div>
                            </div>

                            <div class="text-center top-space">
                                <button type="submit" id="register-btn"
                                    class="btn btn-success btn-lg js-register-btn">Register</button>
                                <div id="js-register-result" data-success-msg="Form submitted successfully."
                                    data-error-msg="Oops. Something went wrong."></div>
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