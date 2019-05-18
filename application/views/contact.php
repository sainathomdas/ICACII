<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Contact</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../assets/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/navbarMargin.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/hover.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <style type="text/css">

    .top-nav-collapse {
      background-color: black;
    }
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 559px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 700px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 600px;
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
   }
   .navbar-brand{
    margin-left: 4%;
  }

  .box {
    background: white;
    margin: auto;


    padding: 20px 25px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  }

  .box:hover {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    animation-name: example;
    animation-duration: 0.25s;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  }

</style>




</head>


<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " style="background-color: #000009" >
    <div class="container-fluid">


      <a title="Home" href="<?php echo base_url('index.php/Home');?>" class="navbar-brand"><strong>ICACII</strong></a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item  cool-link">
          <a class="nav-link" href="<?php echo base_url('index.php/Home');?>">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown cool-link  ">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">About us
        </a>
        <div class="dropdown-menu dropdown-default"  aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?php echo base_url('index.php/About#aboutAgi');?>">About AGI</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/About#aboutIEEE');?>">About IEEE</a>
        </div>
      </li>

      <li class="nav-item dropdown cool-link">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Committee
      </a>
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        <a class="dropdown-item" href="#">Organizing committee</a>
        <a class="dropdown-item" href="#">Advisory committee</a>
      </div>
    </li>


    <li class="nav-item dropdown cool-link">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Program
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item" href="#">Keynote Speaker</a>
      <a class="dropdown-item" href="#">Plenary Speaker</a>
      <a class="dropdown-item" href="#">Accepted Papers</a>
      <a class="dropdown-item" href="#">Program Schedule</a>
    </div>
  </li>

  <li class="nav-item cool-link ">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

 <li class="nav-item cool-link">
      <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>"><strong>Registration</strong></a>
    </li>

  <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Download
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item" href="#">Paper format</a>
    <a class="dropdown-item" href="#">Copyrights</a>
    <a class="dropdown-item" href="#">Registration form</a>
    <a class="dropdown-item" href="#">Brochure</a>
  </div>
</li>

<li class="nav-item dropdown cool-link">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Venue and Travel
</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
   <a class="dropdown-item" href="<?php echo base_url('index.php/Venue');?>">Accomodation</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#localInfo');?>">Local Info</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#visaInfo');?>">VISA Info</a>
</div>
</li>

<li class="nav-item cool-link active">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"  ></div>


<div class="jumbotron ml-sm-1 mt-xl-2 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;">
<div class="container hvr-float-shadow ml-lg-5 ml-sm-1 pl-sm-1">
  
  <h2 class="h2-responsive pt-2" style="color: #0d47a1;"><strong>Contact</strong></h2>
  <div class="container ">
    <h3 class="h3-responsive pt-2" style="color: black;"><strong>Dr.Sandeep Singh Rawat</strong></h3>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>The Organizing Chair</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>ICACII 2019</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>Department of CSE</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>Anurag Group of Institutions</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>Venkatapur (V), Ghatkesar (M),</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>Medchal District, Hyderabad,Telangana, India-500 088.</strong></h5>
    <h5 class="h5-responsive pt-2" style="color: black;"><strong>Email: icacii2019@cvsr.ac.in</strong></h5>
    
  </div>

</div>
  
</div>






<?php $this->load->view('common/footer.php');?>
