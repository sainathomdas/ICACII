<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Program</title>
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
      <ul class="navbar-nav mx-auto">
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


    <li class="nav-item dropdown cool-link active">
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

  <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Download
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item" href="<?php echo base_url('assets/ICACII 2019_MS_Word_Template.doc');?>" download = "ICACII 2019_MS_Word_Template.doc">Paper format</a>
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Copyrights</a>
    <a class="dropdown-item" href="<?php echo base_url('index.php/Download');?>">Registration form</a>
       <a class="dropdown-item" href="<?php echo base_url('assets/Brochure.pdf');?>" target = "_blank">Brochure</a>
         <a class="dropdown-item" href="<?php echo base_url('assets/sponsorship.pdf');?>" target = "_blank">Sponsorship</a>
  </div>
</li>

<li class="nav-item dropdown cool-link">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Venue and Travel
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
<!-- Navbar -->
<div class="navbarMargin"  ></div>



<div class="jumbotron pt-5 mt-5" >
  <!--
  <center>
    <div style="vertical-align: middle;">
      <br><br><br><br><br><br>
      <h3 class="h3-responsive" style="color: #37474F;"><strong>(In progress)</strong></h3>
    </div>
  </center>
-->
<style type="text/css">
  .avatar-flip {
  border-radius: 90px;
  overflow: hidden;
  height: 180px;
  width: 180px;
  position: relative;
  margin: auto;
  top: -60px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  box-shadow: 0 0 0 13px #f0f0f0;
  -webkit-box-shadow: 0 0 0 13px #f0f0f0;
  -moz-box-shadow: 0 0 0 13px #f0f0f0;
}

</style>

<div class="container">
  <div class="avatar-flip">
    <img src="<?php echo base_url('assets/images/che.jpg');?>" height="180" width="180">
 
  </div>
  <center>
  <h2 style="color: black">Dr. Salvatore Distefano</h2>
  </center>
  <p class="text-justify">Dr. Salvatore Distefano is an Associate Professor at University of Messina, Italy, and Fellow Professor at Kazan Federal University, Russia, head of the Social and Urban Computing Group and of the Cisco Innovation Center in Kazan. He was formerly an Assistant Professor at Politecnico di Milano (2011-2015). In 2001 he got the master degree in Computer Engineering from University of Catania, and then, in 2006, he received the Ph.D degree on Computer Science and Engineering from University of Messina.      </p>


  <p class="text-justify">Dr. Salvatore authored and co-authored more than 200 scientific papers and contributions to international journals, conferences and books. He took part to several national and international projects, such as Reservoir, Vision (EU FP7), SMSCOM (EU FP7 ERC Advanced Grant), Beacon, IoT-Open.EU (EU H2020). He is in the editorial boards of IEEE Transactions on Dependable and Secure Computing, International Journal of Performability Engineering, Journal of Cloud Computing, International Journal of Engineering and Industries, International Journal of Big Data, International Journal of Computer Science & Information Technology Applications, International Journal of Distributed Sensor Networks. </p>
</div>
</div>

<?php $this->load->view('common/footer.php');?>

