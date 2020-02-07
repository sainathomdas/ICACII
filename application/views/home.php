<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ICACII</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/css/mdb.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/ribbon.css');?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/css/style.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/impDates.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/navbarMargin.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather|Stylish" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vip_carousel.css');?>">


    <style type="text/css">
        .top-nav-collapse {
            background-color: black;
        }

        html,
        body,
        header,
        .view {
            height: 100vh;
        }

        @media (max-width: 559px) {

            html,
            body,
            header,
            .view {
                height: 120vh;
            }

           
        }

        @media (min-width: 560px) and (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }

        }



        .navbar-brand {
            margin-left: 3%;
        }

        #preloader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('<?php echo base_url('assets/images/preloader.gif');?>') center no-repeat #fff;
        }


        .our-team{
            max-height: 300px;
        }

        .nav-item{
            text-align: center;
        }




#clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;

    font-size: 25px;

    font-size: 30px;

}

#clockdiv > div{
    padding: 10px;

    width:10rem;
    border-radius: 3px;
    background: #f1f1f1;

    border-radius: 3px;
    background: orange;

    display: inline-block;
}

#clockdiv div > span{

    padding: 10px;
    border-radius: 50px;

    padding: 15px;
    border-radius: 3px;

    background: teal;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;

    font-size: 14px;
    color:black;
    font-weight:bold;

    font-size: 16px;

}




    </style>

</head>


<body>

    <div id="preloader"></div>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar ">
        <div class="container-fluid">


            <a title="ICACII" href="<?php echo base_url('index.php/Home');?>" class="navbar-brand h4-responsive p-0"><img src="<?php echo base_url();?>/assets/images/horse.png" class="img img-fluid " style="width: 16%; height: auto;"><strong>
            ICACII-2019</strong></a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mx-auto " style="vertical-align: middle;">
                    <li class="nav-item active cool-link">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home');?>"><strong>Home</strong>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item cool-link">
                        <a class="nav-link" href="<?php echo base_url('index.php/About');?>"><strong>About Us</strong></a>
                    </li>

                    <li class="nav-item dropdown cool-link">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Committee</strong>
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Committee#organizingCommittee');?>">Organizing Committee</a>
                            <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Committee#advisoryCommittee');?>">Advisory Committee</a>
                            <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Committee#technicalCommittee');?>">Techical Program Committee</a>

                        </div>
                    </li>


                    <li class="nav-item dropdown cool-link">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Program</strong>
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program');?>">Keynote Speakers</a>
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program#plenary');?>">Plenary Speaker</a>
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
                              <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('assets/Programme Schedule - ICACII 2019.pdf');?>" target="_blank">Programme Schedule</a>
                            

                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program');?>">Keynote Speaker</a>
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program#plenary');?>">Plenary Speaker</a>
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
                            <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Program');?>">Program Schedule</a>

                            <a class="dropdown-item dropdown-toggle"  style="font-size: 16px;" type="button" data-toggle="dropdown" href="#">Oral Presentation</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('index.php/Program#guidelines');?>">Presentation Guidelines</a>
                                <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('assets/PPT_Template ICACII 2019.ppt');?>" download = "PPT_Template ICACII 2019">Presentation Template</a>

                                <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('assets/ICACII 2019 Paper Presentation Schdule.pdf');?>" target="_blank">Presentation Schedule</a>


                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown cool-link">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>PreConference</strong>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

                       <a class="dropdown-item"  style="font-size: 16px;" href="<?php echo base_url('assets/Data Analytics.pdf');?>" target = "_blank">Data Analytics & Visualization</a>
                       <a class="dropdown-item"  style="font-size: 16px;" href="<?php echo base_url('assets/IoT.pdf');?>" target = "_blank" >Internet of Things</a>
                       <a class="dropdown-item"  style="font-size: 16px;"  href="<?php echo base_url('assets/ip.PDF');?>" target = "_blank" >Computer Vision</a>
                       <a class="dropdown-item"  style="font-size: 16px;" href="<?php echo base_url('assets/MLAI.pdf');?>" target = "_blank" >Machine Learning with Python on IBM Cloud</a>
                       <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('assets/Cyber Security.pdf');?>" target = "_blank"  >Security through Blockchain Technology
                       </a>

                   </div>
               </li>


               <li class="nav-item cool-link">
                <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>"><strong>Call for Papers</strong></a>
            </li>

            <li class="nav-item cool-link">
                <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>"><strong>Registration</strong></a>
            </li>

            <li class="nav-item dropdown cool-link">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Download</strong>
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('assets/Author-kit.rar');?>" download = "Author-kit.rar">Author kit</a>
                    <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Download');?>">Copyrights</a>
                    <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('index.php/Download');?>">Registration form</a>
                    <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('assets/Brochure.pdf');?>" target="_blank">Brochure</a>
                    <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('assets/sponsorship.pdf');?>" target="_blank">Sponsorship</a>
                    <a class="dropdown-item" style="font-size: 16px;"  href="<?php echo base_url('assets/PPT_Template ICACII 2019.ppt');?>" download = "PPT_Template ICACII 2019">PPT Template</a>
                       <a class="dropdown-item" style="font-size: 16px;" href="<?php echo base_url('assets/ICACII Poster Template Updated.pptx');?>" download = "ICACII Poster Template Updated">Poster Template</a>
                </div>
            </li>

            <li class="nav-item dropdown cool-link">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Venue and Travel</strong>
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Venue#reachUs');?>">Travel</a>
                    <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Venue#visaInfo');?>">VISA Info</a>
                    <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Venue');?>">Accomodation</a>
                    <a class="dropdown-item" style="font-size:16px;" href="<?php echo base_url('index.php/Venue#localInfo');?>">Local Info</a>



                </div>
            </li>

            <li class="nav-item cool-link">
                <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>"><strong>Contact Us</strong></a>
            </li>
        </ul>



    </div>

</div>
</nav>
<!-- Navbar -->

<div class="navbarMargin_home"></div>


<!-- Full Page Intro -->
<div class="view">



    <video class="video-intro" poster="<?php echo base_url('assets/images/bg.jpg');?>" playsinline autoplay muted loop>
        <source src="<?php echo base_url('assets/images/video.mp4');?>" type="video/mp4" controls="true" autoplay loop>
        </video>


        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn mt-lg-5 pt-lg-5">
                <h4 class="display-4" style="font-family: 'Merriweather', sans-serif;"> <strong><br>1<sup>st</sup> International Conference <br></strong></h4>
                <span style="font-family: 'Stylish', sans-serif;" class="display-4">on</span>
                <h1 class="display-2">
                    <strong style="font-family: 'Merriweather', sans-serif;"> Advances in Computational Intelligence and Informatics</strong>
                </h1>

                <!-- Time Counter -->
                <center>
                    <h1 style="font-family: 'Stylish',sans-serif;">Dec 20-21, 2019</h1>
                </center>

                <h1 class="form-control-warning mt-3 mb-3" style="font-family: 'Merriweather', sans-serif;">Anurag Group of Institutions, Hyderabad, India</h1>


          <!--       <div class="container mb-4">
                    <a href="<?php //  echo base_url('index.php/CallForPapers#paperSubmission')?>" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Paper Submission</a>
                    <a href="<?php  // echo base_url('index.php/Registration');?>" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Registration</a>
                    <a href="#importantDates" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Important dates</a>
                    <a href="" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;pointer-events: none;">Accepted papers</a>
                    <a href="" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;pointer-events: none;">Program schedule</a>
                </div>

 -->

     <!-- Time Counter -->
<!--      <center>
        <p id="time-counter" class="p-2 border border-light text-center my-4" style="font-family: 'Merriweather', sans-serif;display: table-cell;border-radius: 5px;"></p>
</center>
         -->



<div id="clockdiv" class="text-center mt-2 mb-2 pt-0">
  <div>
    <span class="days" id="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours" id="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes" id="minutes"></span>
    <div class="smalltext">Minutes</div>

  </div>
  <div class="seconds_div">
    <span class="seconds" id="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>

  </div>
  <div class="seconds_div">
    <span class="seconds" id="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>

</div>
<br>






                <a target="_blank" title="Springer LNNS" href="https://www.springer.com/series/15179" class="btn btn-outline-white btn-sm ">
                    <img src="<?php echo base_url('assets/images/springer1.png');?>" class="rounded" style="max-height: 40px">
                </a>


            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="container mt-md-4 p-4" style="border-radius: 10px;background-color: #fff;">
                    <h3 class="h3-responsive" style="color: #0d47a1;font-family: 'Baloo Bhai', cursive;
                    "><strong>ICACII - 2019</strong></h3>
                    <strong>
                        <p><br>It gives us immense pleasure to invite you to join ICACII - 2019, “International Conference on Advances in Computational Intelligence and Informatics”, to be held at one of the most ancient and culturally rich cities of India “Hyderabad”, Telangana from 20th - 21st December 2019. The conference is being organized by Anurag Group of Institutions (AGI), Hyderabad with an aim to provide a platform for researchers, scientists, technocrats, academicians and engineers to exchange their innovative ideas in the field of Computer Science & Engineering till the end of 2019. </p>


                        <p>
                            The conference will boost excellent innovations in terms of day to day life and academics. The proceedings of the conference will unleash a package platform for innovative ideas into a single unit.

                        </p>
                    </strong>
                </div>
                <br>
                <div class="jumbotron raisedbox " style="border-radius: 10px;">
                    <div class="row">
                        <div class="offset-sm-1 col-sm-10">
                            <h2 class="h2 mb-4" style="color: darkblue"><i class="fas fa-map-marker-alt"></i>&nbsp;Venue :</h2>
                            <h3 class="h3 mb-4" style="color: black;"><i class="fa fa-university" aria-hidden="true"></i>&nbsp; Anurag Group of Institutions</h3>
                            <strong>
                                <p class=" mb-4" style="color: black;">&nbsp;Venkatapur, Ghatkesar,</p>
                                <p class=" mb-4" style="color: black;">&nbsp;Medchal District, Hyderabad,</p>
                                <p class=" mb-4" style="color: black;">&nbsp;Telangana, India - 500 088.</p>
                                <p class=" mb-4" style="color: black;">&nbsp;Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=convenor_icacii@cvsr.ac.in" target="_blank">convenor_icacii@cvsr.ac.in</a></p>
                            </strong>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 mt-4" id="importantDates">
                <div class="jumbotron raisedbox" data-aos="fade-in" data-aos-duration="2500" style="border-radius: 10px;box-shadow: all;">

                    <h3 class="h3-responsive ">
                        <p class="bq-title" style="color: #0d47a1">Important dates <i class="far fa-calendar-alt"></i></p>
                    </h3>

                    <div class="page">
                        <div class="page__demo">
                            <div class="main-container page__container">
                                <div class="timeline">
                                    <div class="timeline__group">




                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__day"> 15</span>
                                                <span class="timeline__month">Oct 2019</span>
                                            </div>
                                            <div class="timeline_post_postponed hoverable">
                                                <div class="timeline__content">
                                                    <p><strong><span style="color: red;"><b><strike>30<sup>th</sup>Sep 2019</strike></b></span><br>Paper submission</strong></p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__day">19</span>
                                                <span class="timeline__month">Oct 2019</span>
                                            </div>
                                            <div class="timeline__post hoverable">
                                                <div class="timeline__content">
                                                    <p><strong>Acceptance notification for papers</strong></p>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__day">10</span>
                                                <span class="timeline__month">Nov 2019</span>
                                            </div>
                                            <div class="timeline__post hoverable">
                                                <div class="timeline__content">
                                                    <p><strong>Camera ready & last date for early bird registration</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__day">16</span>
                                                <span class="timeline__month">Nov 2019</span>
                                            </div>
                                            <div class="timeline__post hoverable">
                                                <div class="timeline__content">
                                                    <p><strong>Camera ready & last date for late registration </strong></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__day">20,21</span>
                                                <span class="timeline__month">Dec 2019</span>
                                            </div>
                                            <div class="timeline__post hoverable">
                                                <div class="timeline__content">
                                                    <p><strong>Conference on Advances in Computational Intelligence and Informatics</strong></p>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <center>
                                <a class="btn btn-success btn-lg" href="<?php echo base_url('index.php/Registration');?>" style="font-size: 12px;border-radius: 5px;">Register now</a>
                            </center>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--  <div class="jumbotron-fluid">
  <h2 class="display-4 mb-4" style="color: darkblue"><strong>Recognitions</strong></h2>
  <div class="container">
    <div class="row">

      <div class="r-imgs">
        <div><img src="<?php echo base_url('assets/images/nirf.png');?>" alt=""> </div>
        <div><img src="<?php echo base_url('assets/images/naac.png');?>" alt=""> </div>
        <div><img src="<?php echo base_url('assets/images/nba.png');?>" alt=""> </div>
        <div><img src="<?php echo base_url('assets/images/ugc.png');?>" alt=""></div>
        <div><img src="<?php echo base_url('assets/images/tcs.png');?>" alt=""></div>

      </div>

      <div class="clear"></div>
      <a href="https://anurag.edu.in/about-us/accreditation-awards/" class="read-more-txt" target="_blank">Read More</a> </div>
    </div>


    <br>

</div> -->



<div class="ribbon col-md-12">
    <strong class="ribbon-content " style="font-size: 24px;">Dignitaries during the Conference</strong>
</div>

<center>
    <div class="container owl-carousel owl-theme">

       <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/somayajulu.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. D.V.L.N.Somayajulu</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Director, IIITDM Kurnool</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/govardan.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. A Govardhan</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Professor & Rector, JNTUH</b></h5>
            </div>
        </div>
    </div>



    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/raghavendra.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. C Raghavendra Rao</b></strong></h3>
                <h5 style="color: #081d3f;"><b>University of Hyderabad, Central University</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/che.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Salvatore Distefano</b></strong></h3>
                <h5 style="color: #081d3f;"><b>University of Messina</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/aninda.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Aninda Bose</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Hard Sciences Publishing, SPRINGER - New Delhi</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/claire.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Claire F. Komives</b></strong></h3>
                <h5 style="color: #081d3f;"><b>&nbsp;&nbsp;Professor & Fullbright - Nehru Senior Scholar, 
                SAN JOSÉ STATE UNIVERSITY, USA</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/kamakshi.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Prof. V Kamakshi Prasad</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Professor & Director of Evaluation, JNTUH</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/samir.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Samir Goswami </b></strong></h3>
                <h5 style="color: #081d3f;"><b>Director (MIS) & Advisor Centre for Information & Communication Technology, NIRD-PR</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/vishnuvardhan.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. B. Vishnu Vardhan</b></strong></h3>
                <h5 style="color: #081d3f;"><b>JNTU Jagityal - CSE Dept</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/supreethi.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. K. P. Supreethi</b></strong></h3>
                <h5 style="color: #081d3f;"><b>JNTUH - CSE Dept</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/salman.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Salman Abdul Moiz</b></strong></h3>
                <h5 style="color: #081d3f;"><b>HCU - School of Computer and information Sciences</b></h5>
            </div>
        </div>
    </div>


   <!--  <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php //echo base_url('assets/images/rajeev.png')?>">

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/rajeev.png')?>">

            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Rajeev Wankar</b></strong></h3>
                <h5 style="color: #081d3f;"><b>HCU - School of Computer and information Sciences</b></h5>
            </div>
        </div>

    </div> -->
    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/damaraju.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Damaraju Pavan Kumar</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Tata Consultancy Services</b></h5>
            </div>
        </div>
    </div>
    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/bsr.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>BSR Prasad</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Software Consultant</b></h5>
            </div>
        </div>


    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/avnkrishna.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. A. V. N. Krishna</b></strong></h3>
                <h5 style="color: #081d3f;"><b>CHRIST University (Bangalore) - CSE Dept</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/sasi.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. J. Sasi Kiran</b></strong></h3>

                <h5 style="color: #081d3f;"><b>Lords Institute of Engineering and Technology, Hyderabad</b></h5>

                <h5 style="color: #081d3f;"><b>LORDS - CSE Dept</b></h5>

            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/krishna.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. A. V. Krishna Prasad</b></strong></h3>
                <h5 style="color: #081d3f;"><b>MVSR - CSE Dept</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/Nageswarao.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Moparthi Nageswara Rao</b></strong></h3>
                <h5 style="color: #081d3f;"><b>KL University</b></h5>
            </div>
        </div>
    </div>


    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/sunil.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Sunil Bhutada</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Sreenidhi Institute of Science & Technology</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/raghava.png')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr. Raghava M</b></strong></h3>
                <h5 style="color: #081d3f;"><b>CVR College of Engineering</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/cjl.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Dr.Chivukula Jaya Lakshmi</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Osmania University</b></h5>
            </div>
        </div>
    </div>

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/yuktesh.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>C Yuktesh</b></strong></h3>
                <h5 style="color: #081d3f;"><b>IBM India Pvt Ltd</b></h5>
            </div>
        </div>
    </div>

   <!--  <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/prashant.PNG')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Prasanth Sahoo</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Blockchain Council</b></h5>
            </div>
        </div>
    </div> -->

    <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/pradeepthi.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b>Pradeepthi Duggaraju</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Smart Bridge Educational Services</b></h5>
            </div>
        </div>
    </div>


     <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/subrahmanyam.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b class="text-center">Dr. M. S. L. B. Subrahmanyam</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Srikari Impetus solutions pvt Ltd</b></h5>
            </div>
        </div>
    </div>


      <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/rajini.jpeg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b class="text-center">Dr. T. V. Rajini Kanth</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Sreenidhi Institute of Science and Technology</b></h5>
            </div>
        </div>
    </div>

        <div class="hoverable">
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="<?php echo base_url('assets/images/venkat.jpg')?>">
            </div>
            <div class="team-content">
                <h3 style="color:black;"><strong><b class="text-center">Venkat Aravind</b></strong></h3>
                <h5 style="color: #081d3f;"><b>Blockchain Advisor</b></h5>
            </div>
        </div>
    </div>







</div>
</center>



</div>
</div>
</div>


<div class="container-fluid">
  <marquee behavior="scroll" direction = "left">
      <strong class="h4 responsive">Our Sponsors: </strong> &nbsp;
      <a href="https://www.gradient.de/" target="_blank"><img src="<?php echo base_url('assets/images/gradient.png');?>"  style="height: 5rem">  </a>&nbsp; &nbsp;

      <a href="https://www.idp.com/india/" target="_blank"><img src="<?php echo base_url('assets/images/idp.png');?>"  style="height: 5rem"> </a>
  </marquee>
</div>
<?php $this->load->view('common/footer.php');?>
<script type="text/javascript">
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({

                autoPlay: 5000, //Set AutoPlay to 5 seconds
                items: 5,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                itemsMobile: [479, 1],
                itemsTablet: [768, 2],
                responsive: true
            });
    });
</script>



 <!-- Time Counter -->
 <!--  <script type="text/javascript">
   var deadline = new Date("Dec 21, 2019 00:00:00").getTime(); 
var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("time-counter").innerHTML = days + "d "  
+ hours + "h " + minutes + "m " + seconds + "s "; 
    if (t < 0) { 
        clearInterval(x); 
        document.getElementById("time-counter").innerHTML = "EXPIRED"; 
    } 
}, 1000); 

  </script>
 -->
<script type="text/javascript">


 var deadline = new Date("Dec 20, 2019 00:00:00").getTime(); 

 var deadline = new Date("Dec 21, 2019 00:00:00").getTime(); 

var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
if (days < 10)
days = '0' + days;
if(hours<10)
hours = '0' + hours;
if(minutes<10)
minutes = '0' + minutes;
if(seconds < 10)
seconds = '0' + seconds;

document.getElementById("days").innerHTML = days;
document.getElementById("hours").innerHTML = hours;
document.getElementById("minutes").innerHTML = minutes;
document.getElementById("seconds").innerHTML = seconds;

    if (t < 0) { 
        clearInterval(x); 
        document.getElementById("clockdiv").innerHTML = ""; 
    } 
}, 1000); 

</script>