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

    ul li{
     min-width: 40px;
     margin-left: 20px;
     font-size: 16px;
   }

   .navbar-brand{
    margin-left: 4%;
  }
</style>

</head>


<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " >
    <div class="container-fluid">


      <a href="" class="navbar-brand h4-responsive"><strong>ICACII</strong></a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active cool-link">
          <a class="nav-link" href="#"><strong>Home</strong>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown cool-link">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><strong>About us</strong>
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" style="font-size:14px;" href="<?php echo base_url('index.php/About#aboutAgi');?>">About AGI</a>
          <a class="dropdown-item" style="font-size:14px;" href="index.php/About#aboutIEEE">About IEEE</a>
        </div>
      </li>

      <li class="nav-item dropdown cool-link">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><strong>Committee</strong>
      </a>
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        <a class="dropdown-item" style="font-size: 14px;" href="#">Organizing committee</a>
        <a class="dropdown-item" style="font-size:14px;" href="#">Advisory committee</a>
      </div>
    </li>

    <li class="nav-item cool-link">
      <a class="nav-link" href="" target="_blank"><strong>Call for Papers</strong></a>
    </li>
    <li class="nav-item cool-link">
      <a class="nav-link" href="" target="_blank"><strong>Important Dates</strong></a>
    </li>
    <li class="nav-item cool-link">
      <a class="nav-link" href="" target="_blank"><strong>Registration</strong></a>
    </li>

    <li class="nav-item dropdown cool-link">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false"><strong>Venue and Travel</strong>
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item" style="font-size:14px;" href="#">Accomodation</a>
      <a class="dropdown-item" style="font-size:14px;" href="#">Local Info</a>
      <a class="dropdown-item"style="font-size:14px;"  href="#">VISA Info</a>
    </div>
  </li>
</ul>



</div>

</div>
</nav>
<!-- Navbar -->


<!-- Full Page Intro -->
<div class="view" >

  <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay
  muted loop >
  <source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
  </video>

  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

    <!-- Content -->
    <div class="text-center white-text mx-5 wow fadeIn">

      <h4 class="display-1" style="font-family: 'Merriweather', sans-serif;"> <strong><br>1<sup>st</sup> International Conference <br></strong></h4>
       <span style="font-family: 'Stylish', sans-serif;" class="display-4">on</span> 
      <h1 class="display-1">
        <strong style="font-family: 'Merriweather', sans-serif;">  Advances in Computational Intelligence and Informatics</strong>
      </h1>

      <!-- Time Counter -->
      <center>
        <h1 ><p id="time-counter" class="border-light my-4" style="text-align: center;font-family: 'Stylish', sans-serif;"></p></h1></center>


        <h4 class="mb-4" style="max-width: 90%">
          <strong><marquee>Imporant Dates : Advances in Computational Intelligence and Informatics : 20th and 21st December 2019</marquee> </strong>
        </h4>

        <a target="_blank" href="" class="btn btn-outline-white btn-lg">
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
        <strong>
          <p><br>It gives us immense pleasure to invite you to join ICACII - 2019, “International Conference on Advances in Computational Intelligence and Informatics”, to be held at one of the most ancient and culturally rich cities of India “Hyderabad”, Telangana from 20th - 21st December 2019. The conference is being organized by Anurag Group of  Institutions (AGI), Hyderabad with an aim to provide a platform for researchers, scientists, technocrats, academicians and engineers to exchange their innovative ideas in the field of Computer Science & Engineering till the end of 2019. </p>


          <p>
            The conference will boost excellent innovations in terms of day to day life and academics. The proceedings of the conference will unleash a package platform for innovative ideas into a single unit. 

          </p></strong>
        </div> 
        <div class="col-lg-4 mt-4">
          <div class="box jumbotron raisedbox" data-aos="fade-in"
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
                      <div class="timeline__post">
                        <div class="timeline__content">
                          <p><strong>Paper submission</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="timeline__box">
                      <div class="timeline__date">
                        <span class="timeline__day">19</span>
                        <span class="timeline__month">Oct 2019</span>
                      </div>
                      <div class="timeline__post">
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
                      <div class="timeline__post">
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
                      <div class="timeline__post">
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
                      <div class="timeline__post">
                        <div class="timeline__content">
                          <p><strong>Conference on Advances in Computational Intelligence and Informatics</strong></p>
                        </div>
                      </div>
                    </div>




                  </div>
                </div>
              </div><center>
               <a class="btn btn-success btn-lg" href="" style="font-size: 12px;border-radius: 5px;">Register now</a>
             </center>

           </div>

         </div>

       </div>
     </div>
   </div>

 </div>





 <!-- Time Counter -->
 <script type="text/javascript">

   var endDate = new Date("Dec 20, 2019 12:00:00").getTime();

   var timer = setInterval(function() {

    var now = new Date().getTime();
    var t = endDate - now;
    
    if (t >= 0) {

      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
      var secs = Math.floor((t % (1000 * 60)) / 1000);

      document.getElementById("time-counter").innerHTML = days + "d " + hours + "h " +
      mins + "m " + secs + "s ";

    } else {

      document.getElementById("time-counter").innerHTML = "Expired!";

    }
    
  }, 1000);











   


</script>

<?php $this->load->view('common/footer.php');?>
