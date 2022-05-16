<?php require ('../Actions/EventsActions/showEventContent.php') ?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Eventify - Event and Conference Template</title>

<?php include ('../includes/links.php'); ?>


</head>

<body>
<?php if (isset($errorMsg)){ ?>
<p> <?= $errorMsg ;?> </p>
<?php }else  {?>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area navbar-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="../assets/images/logo.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#event">Schedules</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Speakers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" href="#">Get a Ticket</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div id="home" class="header-content-area bg_cover d-flex align-items-center" style="background-image: url(../assets/images/header-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div data-countdown="2020/10/01"></div>
                        
                        <div class="header-content text-center">
                            <h2 class="header-title"><?= $event_title;?></h2>
                            <h3 class="sub-title"><?= $event_Date_Event;?></h3>

                            <ul class="header-btn">
                                <li><a class="main-btn main-btn-2" href="#">Register Now</a></li>
                                <li><a class="main-btn" href="#">Learn More</a></li>
                            </ul>
                        </div>  <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pb-130 pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mt-50 wow fadeInLeft" data-wow-duration="1s">
                        <img src="../assets/images/about.png" alt="About">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45 wow fadeInRight" data-wow-duration="1s">
                        <div class="section-title">
                            <h2 class="title">About Our Meetups</h2>
                        </div> <!-- section title -->

                        <p class="text mt-30"><?= $event_desc;?></p>
                        <p class="date"><span>25<sup>th</sup></span> December’ 19</p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->

    <section id="counter" class="counter-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="counter-icon">
                            <i class="lni-mic"></i>
                        </div>
                        <div class="counter-content">
                            <span class="count counter">45</span>
                            <p class="text">Expert Speaker</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="counter-icon">
                            <i class="lni-bulb"></i>
                        </div>
                        <div class="counter-content">
                            <span class="count counter"><?= $event_Remaining_Places;?></span>
                            <p class="text">Seats Available</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="counter-icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <div class="counter-content">
                            <span class="count counter">29</span>
                            <p class="text">Sonsors</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="counter-icon">
                            <i class="lni-coffee-cup"></i>
                        </div>
                        <div class="counter-content">
                            <span class="count counter">56</span>
                            <p class="text">Sessions</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COUNTER PART ENDS ======-->

    <!--====== EVENT SCHEDULE PART START ======-->

    <section id="event" class="event-schedule pt-115 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">EVENT SCHEDULE</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-tab mt-60">
                        <ul class="nav justify-content-between align-items-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="day-1-tab" data-toggle="tab" href="#day-1" role="tab" aria-controls="day-1" aria-selected="true">
                                    <h4 class="nav-title">Day 1</h4>
                                    <span>28 July, 2022</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="day-2-tab" data-toggle="tab" href="#day-2" role="tab" aria-controls="day-2" aria-selected="false">
                                    <h4 class="nav-title">Day 2</h4>
                                    <span>28 July, 2022</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="day-3-tab" data-toggle="tab" href="#day-3" role="tab" aria-controls="day-3" aria-selected="false">
                                    <h4 class="nav-title">Day 3</h4>
                                    <span>28 July, 2022</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="day-4-tab" data-toggle="tab" href="#day-4" role="tab" aria-controls="day-4" aria-selected="false">
                                    <h4 class="nav-title">Day 4</h4>
                                    <span>28 July, 2022</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="day-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <div class="event-content pt-40">
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-1.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-2.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-3.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->
                                </div> <!-- event content -->
                            </div>
                            <div class="tab-pane fade" id="day-2" role="tabpanel" aria-labelledby="day-2-tab">
                                <div class="event-content pt-40">
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-1.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-2.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-3.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->
                                </div> <!-- event content -->
                            </div>
                            <div class="tab-pane fade" id="day-3" role="tabpanel" aria-labelledby="day-3-tab">
                                <div class="event-content pt-40">
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-1.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-2.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-3.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->
                                </div> <!-- event content -->
                            </div>
                            <div class="tab-pane fade" id="day-4" role="tabpanel" aria-labelledby="day-4-tab">
                                <div class="event-content pt-40">
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-1.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-2.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->

                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="../assets/images/event-3.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                            <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->
                                </div> <!-- event content -->
                            </div>
                        </div>
                    </div> <!-- event tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENT SCHEDULE PART ENDS ======-->

    <!--====== FEATURES PART START ======-->

    <section id="features" class="features-area pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h2 class="title">Why You Should Join?</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="features-icon">
                            <i class="lni-microphone"></i>
                            <span>01</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Great Speakers</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                            <i class="lni-users"></i>
                            <span>02</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">New People</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                            <i class="lni-bullhorn"></i>
                            <span>03</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Global Event</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                            <i class="lni-heart"></i>
                            <span>04</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Get Inspired</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                            <i class="lni-cup"></i>
                            <span>05</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Networking Session</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="features-icon">
                            <i class="lni-gallery"></i>
                            <span>06</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Meet New Faces</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-115 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h2 class="title">Who’s Speaking</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="../assets/images/team-1.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Mark A. Parker</a></h4>
                            <span class="sub-title">Web Developer</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="../assets/images/team-2.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Jonathan P Deo</a></h4>
                            <span class="sub-title">UX Speacilist</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="team-image">
                            <img src="../assets/images/team-3.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Adam Smith</a></h4>
                            <span class="sub-title">UX Speacilist</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="../assets/images/team-4.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Robert Jhonson</a></h4>
                            <span class="sub-title">UX Speacilist</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="team-image">
                            <img src="../assets/images/team-5.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Jonathan P Deo</a></h4>
                            <span class="sub-title">UX Speacilist</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="team-image">
                            <img src="../assets/images/team-6.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Steve Jk Jobs</a></h4>
                            <span class="sub-title">UX Speacilist</span>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== GALLERY PART START ======-->

    <section id="gallery" class="event-gallery pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-50">
                        <h2 class="title">Event Gallery</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="single-gallery">
                    <div class="gallery-image">
                        <img src="../assets/images/gallery-1.jpg" alt="Gallery">
                    </div>
                    <div class="gallery-content">
                        <a class="image-popup" href="../assets/images/gallery-1.jpg"><i class="lni-plus"></i></a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-6">
                <div class="row no-gutters">
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="../assets/images/gallery-2.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="../assets/images/gallery-2.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="../assets/images/gallery-3.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="../assets/images/gallery-3.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="../assets/images/gallery-4.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="../assets/images/gallery-4.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="../assets/images/gallery-5.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="../assets/images/gallery-5.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-btn pt-60 text-center">
                        <a class="main-btn main-btn-2" href="#">Browse all</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== GALLERY PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing-area pt-115 pb-200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h2 class="title">Ticket Pricing</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing text-center mt-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="pricing-name">
                            <h4 class="pricing-title">BASIC PASS</h4>
                            <span class="sub-title">Price Excluding 20% VAT</span>
                        </div>
                        <div class="pricing-price">
                            <span>$ 29.00</span>
                            <p class="text">Per Day</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Pro  Regular Seating</li>
                                <li>Best Comfortable Seat</li>
                                <li>Coffee Break With Snacks</li>
                                <li>One Workshop For Practise</li>
                                <li>Course Certificate</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#">Buy Ticket</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing active text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="pricing-name">
                            <h4 class="pricing-title">STANDARD PASS</h4>
                            <span class="sub-title">Price Excluding 20% VAT</span>
                        </div>
                        <div class="pricing-price">
                            <span>$ 39.00</span>
                            <p class="text">Per Day</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Pro  Regular Seating</li>
                                <li>Best Comfortable Seat</li>
                                <li>Coffee Break With Snacks</li>
                                <li>One Workshop For Practise</li>
                                <li>Course Certificate</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn main-btn-2" href="#">Buy Ticket</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing text-center mt-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="pricing-name">
                            <h4 class="pricing-title">PREMIUM PASS</h4>
                            <span class="sub-title">Price Excluding 20% VAT</span>
                        </div>
                        <div class="pricing-price">
                            <span>$ 49.00</span>
                            <p class="text">Per Day</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Pro  Regular Seating</li>
                                <li>Best Comfortable Seat</li>
                                <li>Coffee Break With Snacks</li>
                                <li>One Workshop For Practise</li>
                                <li>Course Certificate</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#">Buy Ticket</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======-->

    <!--====== CLIENT PART START ======-->

    <div id="client" class="client-area pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-50">
                        <h2 class="title">Event Sponsors</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client">
                        <img src="../assets/images/client-1.png" alt="Client">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client">
                        <img src="../assets/images/client-2.png" alt="Client">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client">
                        <img src="../assets/images/client-3.png" alt="Client">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client">
                        <img src="../assets/images/client-4.png" alt="Client">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client">
                        <img src="../assets/images/client-5.png" alt="Client">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== CLIENT PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info pt-40">
                        <div class="section-title pb-10">
                            <h2 class="title">Get In Touch</h2>
                        </div> <!-- section title -->
                        <ul>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">Email address</h6>
                                        <p class="text">contact@yourmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">Phone Number</h6>
                                        <p class="text">+831 546 547</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-money-location"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">Location</h6>
                                        <p class="text">Cesare Rosaroll, 118 80139 Eventine</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form pt-20">
                        <form id="contact-form" action="../assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Your Name">
                                        <i class="lni-user"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Your Email">
                                        <i class="lni-envelope"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Your Subject">
                                        <i class="lni-pencil-alt"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="number" placeholder="Phone Number">
                                        <i class="lni-phone-handset"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                        <i class="lni-comment-alt"></i>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="main-btn main-btn-2">Send Message</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map pt-130">
                        <div class="gmap_canvas">                            
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area bg_cover" style="background-image: url(../assets/images/footer.jpg)">
        <div class="footer-subscribe-area pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-subscribe text-center">
                            <h2 class="subscribe-title">Subscribe Now</h2>
                            <div class="subscribe-form mt-45">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button class="main-btn">Subscribe Now</button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer subscribe -->
        
        <div class="footer-widget">
            <div class="container">
                <div class="widget  pt-80 pb-130">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-address mt-40">
                                <h5 class="f-title">Venue Location</h5>
                                <p class="text">18 - 21 DECEMBER, 2022 <br> 51 Francis Street, Cesare Rosaroll, 118 80139 Eventine</p>
                                <a class="contact-link" href="#">Contact Our Authority</a>
                            </div> <!-- footer address -->
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-contact mt-40">
                                <h5 class="f-title">Social Connection</h5>
                                <p class="text">Don't miss a thing! Receive daily news You should connect social area for Any Proper Updates Anytime</p>
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- widget -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Designed and Developed by <a href="https://graygrids.com/" rel="nofollow">GrayGrids</a>. All Rights Reserved by Us</p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======--> 

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!-- row -->










    <!--====== jquery js ======-->
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>

    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>

    <!--====== Countdown js ======-->
    <script src="../assets/js/jquery.countdown.min.js"></script>

    <!--====== wow js ======-->
    <script src="../assets/js/wow.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="../assets/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>
<?php } ?>
</body>

</html>
