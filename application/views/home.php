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
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/css/style.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/impDates.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/navbarMargin.css');?>">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather|Stylish" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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



    .navbar-brand{
      margin-left: 3%;
    }
  </style>

</head>


<body >

  <div id="preloader"></div>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " >
    <div class="container-fluid">


      <a title="ICACII" href="<?php echo base_url('index.php/Home');?>" class="navbar-brand h4-responsive"><strong>ICACII</strong></a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="<?php echo base_url('index.php/About');?>"><strong>About us</strong></a>
          </li>

      <li class="nav-item dropdown cool-link">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><strong>Committee</strong>
      </a>
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url('index.php/Committee#organizingCommittee');?>">Organizing committee</a>
        <a class="dropdown-item" style="font-size:14px;" href="<?php echo base_url('index.php/Committee#advisoryCommittee');?>">Advisory committee</a>
        <a class="dropdown-item" style="font-size:14px;" href="<?php echo base_url('index.php/Committee#technicalCommittee');?>">Techical programming committee</a>
        
      </div>
    </li>


    <li class="nav-item dropdown cool-link">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false"><strong>Program</strong>
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item"  style="font-size: 14px;"  href="<?php echo base_url('index.php/Program');?>">Keynote Speaker</a>
      <a class="dropdown-item"  style="font-size: 14px;" href="<?php echo base_url('index.php/Program');?>">Plenary Speaker</a>
      <a class="dropdown-item" style="font-size: 14px;"  href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
      <a class="dropdown-item" style="font-size: 14px;"  href="<?php echo base_url('index.php/Program');?>">Program Schedule</a>
    </div>
  </li>


  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>"><strong>Call for Papers</strong></a>
  </li>

  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>"><strong>Registration</strong></a>
  </li>

  <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false"><strong>Download</strong>
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url('index.php/Download');?>">Paper format</a>
    <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url('index.php/Download');?>">Copyrights</a>
    <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url('index.php/Download');?>">Registration form</a>
    <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url('index.php/Download');?>">Brochure</a>
  </div>
</li>

<li class="nav-item dropdown cool-link">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false"><strong>Venue and Travel</strong>
</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
  <a class="dropdown-item" style="font-size:14px;" href="<?php echo base_url('index.php/Venue');?>">Accomodation</a>
  <a class="dropdown-item" style="font-size:14px;" href="<?php echo base_url('index.php/Venue#localInfo');?>">Local Info</a>
  <a class="dropdown-item"style="font-size:14px;"  href="<?php echo base_url('index.php/Venue#visaInfo');?>">VISA Info</a>
</div>
</li>

<li class="nav-item cool-link">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>"><strong>Contact us</strong></a>
</li>
</ul>



</div>

</div>
</nav>
<!-- Navbar -->


<!-- Full Page Intro -->
<div class="view" >



  <video class="video-intro" poster="<?php echo base_url('assets/images/background.jpg');?>" playsinline autoplay
  muted loop >
  <source src="<?php echo base_url('assets/images/video.mp4');?>" type="video/mp4" controls = "true" autoplay loop>
  </video>
    

  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

    <!-- Content -->
    <div class="text-center white-text mx-5 wow fadeIn ">

      <h4 class="display-4" style="font-family: 'Merriweather', sans-serif;"> <strong><br>1<sup>st</sup> International Conference <br></strong></h4>
      <span style="font-family: 'Stylish', sans-serif;" class="display-4">on</span> 
      <h1 class="display-2">
        <strong style="font-family: 'Merriweather', sans-serif;">  Advances in Computational Intelligence and Informatics</strong>
      </h1>

      <!-- Time Counter -->
      <center>
        <h1 style="font-family: 'Stylish',sans-serif;font-style: italic;">Dec 20-21,2019</h1></center>

        <h1 class="form-control-warning my-5" style="font-family: 'Merriweather', sans-serif;">Anurag Group of Institutions,Venkatapur,Hyderabad</h1>

       
        <div class="container mb-4">
        <a href="<?php echo base_url('index.php/CallForPapers#paperSubmission')?>" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Paper Submission</a>
        <a href="<?php echo base_url('index.php/Registration');?>" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Registration</a>
        <a href="#importantDates" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;">Important dates</a>
        <a href="" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;pointer-events: none;" >Accepted papers</a>
        <a href="" class="btn btn-outline-white btn-sm px-2 mx-2" style="font-size: 14px;pointer-events: none;">Program schedule</a>
        </div>
        <a target="_blank" title="Springer LNNS" href="https://www.springer.com/series/15179" class="btn btn-outline-white btn-sm ">
          <img src="<?php echo base_url('assets/images/springer1.png');?>" class="rounded" style="max-height: 40px">
        </a>
 <h4 class="mb-4" style="max-width: 90%;">
          <a title="Register" href="<?php echo base_url('index.php/Registration');?>" >
            <strong style="color: white;"><marquee><span style="color: yellow;">Imporant Dates :</span> Advances in Computational Intelligence and Informatics : 20th and 21st December 2019</marquee> </strong>
          </a>
        </h4>

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
            <p><br>It gives us immense pleasure to invite you to join ICACII - 2019, “International Conference on Advances in Computational Intelligence and Informatics”, to be held at one of the most ancient and culturally rich cities of India “Hyderabad”, Telangana from 20th - 21st December 2019. The conference is being organized by Anurag Group of  Institutions (AGI), Hyderabad with an aim to provide a platform for researchers, scientists, technocrats, academicians and engineers to exchange their innovative ideas in the field of Computer Science & Engineering till the end of 2019. </p>


            <p >
              The conference will boost excellent innovations in terms of day to day life and academics. The proceedings of the conference will unleash a package platform for innovative ideas into a single unit. 

            </p></strong>
          </div>
          <br>
          <div class="jumbotron raisedbox hoverable" style="border-radius: 10px;"> 
            <div class="row" ><div class="offset-sm-1 col-sm-10">
             <h2 class="h2 mb-4" style="color: darkblue"><i class="fas fa-map-marker-alt"></i>&nbsp;Venue :</h2>
             <h3 class="h3 mb-4" style="color: black;"><i class="fa fa-university" aria-hidden="true"></i>&nbsp; Anurag Group of Institutions</h3>
             <strong>
              <p class=" mb-4" style="color: black;">&nbsp;Venkatapur (V), Ghatkesar (M),</p>
              <p class=" mb-4" style="color: black;">&nbsp;Medchal District, Hyderabad,</p> 
              <p class=" mb-4" style="color: black;">&nbsp;Telangana, India. 500 088.</p> 
              <p class=" mb-4" style="color: black;">&nbsp;Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=convenor_icacii@cvsr.ac.in" target="_blank">convenor_icacii@cvsr.ac.in</a></p> 
            </strong> 
          </div>
          <div class="col-sm-1" ></div>
        </div>
      </div>

    </div> 
    <div class="col-lg-4 mt-4" id="importantDates">
      <div class="jumbotron raisedbox" data-aos="fade-in"
      data-aos-duration="2500" style="border-radius: 10px;box-shadow: all;">

      <h3 class="h3-responsive "><p class="bq-title" style="color: #0d47a1">Important dates <i class="far fa-calendar-alt"></i></p></h3>

      <div class="page">
        <div class="page__demo">
          <div class="main-container page__container">
            <div class="timeline">
              <div class="timeline__group">
                <div class="timeline__box">
                  <div class="timeline__date">
                    <span class="timeline__day">2</span>
                    <span class="timeline__month">Sep 2019</span>
                  </div>
                  <div class="timeline__post hoverable" >
                    <div class="timeline__content">
                      <p><strong >Paper submission</strong></p>
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
                    <span class="timeline__day">2</span>
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
<div class="jumbotron-fluid">
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
</div>
</div>
</div>
</div>

  




<?php $this->load->view('common/footer.php');?>
