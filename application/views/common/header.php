<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-About Us</title>
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


    .navbar-brand{
      margin-left: 3%;
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

    p{
      font-size: 14px;

    }

    .nav-item{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }

  </style>


</head>


<body>
  <div id="preloader"></div>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " style="background-color: #000009" >
    <div class="container-fluid">


      <a title="ICACII" href="<?php echo base_url('index.php/Home');?>" class="navbar-brand h4-responsive p-0"><img src="<?php echo base_url();?>/assets/images/horse.png" class="img img-fluid " style="width: 16%; height: auto;"><strong>
      ICACII-2019</strong></a>

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
        <li class="nav-item cool-link">
          <a class="nav-link" href="<?php echo base_url('index.php/About');?>">About Us</a>
        </li>

        <li class="nav-item dropdown cool-link">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Committee
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#organizingCommittee');?>">Organizing Committee</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#advisoryCommittee');?>">Advisory Committee</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#technicalCommittee');?>">Techical Program Committee</a>
        </div>
      </li>


      <li class="nav-item dropdown cool-link">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Program
      </a>
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
       <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Keynote Speaker</a>
       <a class="dropdown-item" href="<?php echo base_url('index.php/Program#plenary');?>">Plenary Speaker</a>
       <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
       <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Program Schedule</a>
         <a class="dropdown-item dropdown-toggle" type="button" data-toggle="dropdown" href="#">Oral Presentation</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program#guidelines');?>">Presentation Guidelines</a>
      <a class="dropdown-item" href="<?php echo base_url('assets/PPT_Template ICACII 2019.ppt');?>" download = "PPT_Template ICACII 2019">Presentation Template</a>
    </div>
    
     </div>
   </li>

      <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">PreConference
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

   <a class="dropdown-item" href="<?php echo base_url('assets/Data Analytics.pdf');?>" target = "_blank">Data Analytics & Visualization</a>
   <a class="dropdown-item" href="<?php echo base_url('assets/IoT.pdf');?>" target = "_blank" >Internet of Things</a>
     <a class="dropdown-item"  href="<?php echo base_url('assets/MLAI.pdf');?>" target = "_blank" >Computer Vision</a>
     <a class="dropdown-item" href="<?php echo base_url('assets/Cyber Security.pdf');?>" target = "_blank" >Machine Learning with Python on IBM Cloud</a>
<a class="dropdown-item"href="<?php echo base_url('index.php/PreConference');?>" target = "_blank"  >Security through Blockchain Technology
</a>

 </div>
</li>

   <li class="nav-item cool-link">
    <a class="nav-link text-center" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>">Registration</a>
  </li>

  <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Download
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
  <a class="dropdown-item"  href="<?php echo base_url('assets/Author-kit.rar');?>" download = "Author-kit.rar">Author kit</a>
   <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Copyrights</a>
   <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Registration form</a>
     <a class="dropdown-item" href="<?php echo base_url('assets/Brochure.pdf');?>" target = "_blank">Brochure</a>
     <a class="dropdown-item" href="<?php echo base_url('assets/sponsorship.pdf');?>" target = "_blank">Sponsorship</a>
     <a class="dropdown-item"  href="<?php echo base_url('assets/PPT_Template ICACII 2019.ppt');?>" download = "PPT_Template ICACII 2019">PPT Template</a>
 </div>
</li>

<li class="nav-item dropdown cool-link">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Venue & Travel
</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#reachUs');?>">Travel</a>
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#visaInfo');?>">VISA Info</a>
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue');?>">Accomodation</a>
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#localInfo');?>">Local Info</a>
   
</div>
</li>

<li class="nav-item cool-link">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact Us</a>
</li>
</ul>
</div>

</div>
</nav>