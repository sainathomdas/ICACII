<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Registration</title>
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


      <a title="ICACII" href="<?php echo base_url('index.php/Home');?>" class="navbar-brand h4-responsive"><img src="<?php echo base_url();?>/assets/images/horse.png" class="img img-fluid " style="width: 20%; height: auto;"><strong>
         ICACII</strong></a>

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
        <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#organizingCommittee');?>">Organizing committee</a>
        <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#advisoryCommittee');?>">Advisory committee</a>
         <a class="dropdown-item" href="<?php echo base_url('index.php/Committee#technicalCommittee');?>">Techical program committee</a>
      </div>
    </li>


    <li class="nav-item dropdown cool-link">
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

  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

  <li class="nav-item cool-link active">
    <a class="nav-link" href="#">Registration</a>
  </li>

  <li class="nav-item dropdown cool-link">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Download
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
   <a class="dropdown-item" href="<?php echo base_url('assets/ICACII 2019_MS_Word_Template.doc');?>" download = "ICACII 2019_MS_Word_Template.doc">Paper format</a>
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
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact Us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"></div>

<div class="jumbotron hoverable ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;">

  <h3 class="h3-responsive pt-2" style="color: #0d47a1;"><strong>Registration</strong></h3>

  <h5 class="p-2 text-justify text-body " style="font-family: 'Lato', sans-serif;">
    Registration charges for paper publications :
  </h5>


  <div class="table-responsive">
    <table class="table table-striped table-bordered"  style="font-family: 'Lato', sans-serif;border-radius: 10px;" >
      <thead>
        <tr>
          <th scope="col" rowspan="2" style="text-align: center;vertical-align: middle;"><strong>Type</strong></th>
          <th scope="col" colspan="2" style="text-align: center;"><strong>Early bird registration</strong></th>
          <th scope="col" colspan="2"  style="text-align: center;"><strong>Late registration</strong></th>
        </tr>
        <tr>
          <th scope="col">INR</th>
          <th scope="col">USD</th>
          <th scope="col">INR</th>
          <th scope="col">USD</th>
        </tr>

      </thead>
      <tbody>
        <tr>
          <th scope="col">Regular Authors (Max. 6 pages )</th>
          <td>7000</td>
          <td>175</td>
          <td>8500</td>
          <td>225</td>

        </tr>
        <tr>
          <th >Regular Authors ([IEEE/CSI Member] Max. 6 pages )</th>
          <td>6000</td>
          <td>150</td>
          <td>7500</td>
          <td>200</td>

        </tr>
        <tr>
          <th >Full time Research Scholar (Max. 6 pages )</th>
          <td>6000</td>
          <td>125</td>
          <td>7500</td>
          <td>175</td>

        </tr>
        <tr>
          <th >Additional Page charges (Max. 2 pages )</th>
          <td>1000/page</td>
          <td>10/page</td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <th >Additional Page charges 
          [same author , limited to 1 page]</th>
          <td>1000/page</td>
          <td>10/page</td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <th >Second and subsequent papers by same authors</th>
          <td>6000</td>
          <td>100</td>
          <td>7500</td>
          <td>150</td>

        </tr>
        <tr>
          <th >Participation Fee / Listener's Fee</th>
          <td>3000</td>
          <td>75</td>
          <td>4000</td>
          <td>100</td>

        </tr>
      </tbody>
    </table>
  </div>
<br><Br>
<ul style="font-family: 'Lato', sans-serif;" class="pl-lg-4 pr-lg-4 pb-lg-4">
    <li><p>At least one author of an accepted paper should register for the conference. (The cost of registration includes conference kit, participation in all the activities of the conference, lunch and snacks.)</p>
    </li>
    <li><p>Co-authors can attend and avail participation certificates by paying Rs.1,500 /- , provided one author of the same paper is registered by paying full registration fee.</p></li>
    <li><p>Separate Registration forms for Author and Co-Author(s), Only Registered co-Authors have to submit the Co-author Registration form.</p></li>
    <li><p>Authors are requested to send Springer(under process) copyright form, Registration forms, Camera ready paper (both in .doc and .pdf xpress) and Scanned copy of DD in a single Zip file. The file should be named as icacii_PAPERID. (Ex. icacii_23).</p></li>
    <li><p>Publication and Indexing: The Accepted and presented papers will be archived in Springer(under process) and will be indexed by Scopus.</p></li>
    
</ul>
  

</div>




<?php $this->load->view('common/footer.php');?>

