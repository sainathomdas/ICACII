<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Download</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
   <link href="<?php echo base_url('assets/css/style.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css');?>">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/navbarMargin.css');?>">

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

   .navbar-brand{
    margin-left: 3%;
  }

</style>




</head>


<body>

<div id="preloader"></div>
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
      <ul class="navbar-nav mx-auto">
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
       <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#organizingCommittee');?>">Organizing committee</a>
        <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#advisoryCommittee');?>">Advisory committee</a>
         <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#technicalCommittee');?>">Techical programming committee</a>
      </div>
    </li>


    <li class="nav-item dropdown cool-link ">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Program
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Keynote Speaker</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Plenary Speaker</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Program Schedule</a>
    </div>
  </li>

  <li class="nav-item cool-link ">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

 <li class="nav-item cool-link">
      <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>">Registration</a>
    </li>

  <li class="nav-item dropdown cool-link active">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Download
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Paper format</a>
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Copyrights</a>
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Registration form</a>
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Brochure</a>
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

<li class="nav-item cool-link">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"  ></div>



<div class="jumbotron mb-0 mt-0 " style="height: 70vh;">
  <center>
    <div style="vertical-align: middle;">
      <br><br><br><br><br><br>
      <h3 class="h3-responsive" style="color: #37474F;"><strong>(In progress)</strong></h3>
    </div>
  </center>
</div>

<?php $this->load->view('common/footer.php');?>

