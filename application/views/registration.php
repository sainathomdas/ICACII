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


<body style="background-color: #fff;">

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
     <a class="dropdown-item" href="<?php echo base_url('assets/Brochure.pdf');?>" target = "_blank">Brochure</a>
     <a class="dropdown-item" href="<?php echo base_url('assets/sponsorship.pdf');?>" target = "_blank">Sponsorship</a>
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
<div class="navbarMargin"></div>
<div class="container-fluid">
  <div class="jumbotron hoverable ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;">

    <h3 class="h3-responsive pt-4" style="color: #0d47a1; "><strong>Registration</strong></h3>
    <p  style="font-family: 'Lato', sans-serif;">
      To ensure publication of a paper in the Proceedings, at least one author has to register by submitting a normal registration fee within deadline. The authors are requested to make the registration of their accepted paper using the following steps and guidelines. Please pay the registration fee by 2nd November 2019 to avoid the late-fee penalty. The registration charges for early bird and late registration are also stated below. 

    </p>
    <div class="table-responsive">
      <table class="table table-sm table-striped table-bordered"  style="font-family: 'Lato', sans-serif;border-radius: 10px;" >
        <thead>
          <tr>
            <th scope="col" rowspan="2" style="text-align: center;vertical-align: middle;"><strong></strong></th>
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
            <td rowspan="6" style="vertical-align: middle;">Paper</td>
            <td>Regular Authors (Max. 6 pages )</td>
            <td>7000</td>
            <td>175</td>
            <td>8500</td>
            <td>225</td>
          </tr>
          <tr>
            <td>Regular Authors ([IEEE/CSI Member] Max. 6 pages )</td>
            <td>6000</td>
            <td>150</td>
            <td>7500</td>
            <td>200</td>
          </tr>
          <tr>
            <td>Full time Research Scholar (Max. 6 pages )</td>
            <td>6000</td>
            <td>125</td>
            <td>7500</td>
            <td>175</td>
          </tr>
          <tr>
            <td>
              Additional Page charges (Max. 2 pages )
            </td>
            <td>1000</td>
            <td>10</td>
            <td style="text-align: center;">-</td>
            <td style="text-align: center;">-</td>
          </tr>
          <tr>
            <td>Second and subsequent papers by same authors</td>
            <td>6000</td>
            <td>100</td>
            <td>7500</td>
            <td>150</td>
          </tr>
          <tr>
            <td>Participation Fee </td>
            <td>3000</td>
            <td>75</td>
            <td>4000</td>
            <td>100</td>
          </tr>
          <tr>
            <td>Poster</td>
            <td>Poster presentation</td>
            <td>1500</td>
            <td>40</td>
            <td style="text-align: center;">-</td>
            <td style="text-align: center;">-</td></tr>
          </tbody>          
        </table>
        <br>

        <h6 style="color: blue;"><strong>Payment of registration Fee (Online Payment using SBI Collect or Account Transfer):</strong></h6>
        <div class="container mt-1" style="font-family: 'Lato', sans-serif;">
          <p >
           <center> <strong>1)Payment of registration Fee (Online Payment using SBI Collect or Account Transfer):</strong></center>
           Step 1: Open the URL: <strong><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">https://www.onlinesbi.com/sbicollect/icollecthome.htm</a>  </strong> to access the SBI Collect page, Agree & Proceed.<br>
           Step 2: Select- State of Corporate/Institution as <strong>"Telangana"</strong>, Select- Types of Corporate/ Institution as <strong>"Educational Institutions"</strong>, and then click "Go" button to proceed.<br>
           Step 3: Select- Educational Institutions Name as <strong>"Anurag Group of Institutions"</strong>, and click submit button to proceed. <span style="color: green;">(There are two entries with the name Anurag Group of Institutions. Pl. select the 2nd entry)</span><br>
           Step 4: Select Payment Category as <strong>"ICACII – 2019 Conference"</strong>, then proceed to fill all the asked details & Submit.<br>
           Step 5: Take the print out of the SBI collect challan (after fee payment), sign it, write the Paper ID on it, and then scan it to have its soft copy, and mail the scanned copy of the SBI Collect Challan to: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=registration_icacii2019@cvsr.ac.in" target="_blank">registration_icacii2019@cvsr.ac.in</a>. While sending mail, put in Subject field of mail "Fee payment_Paper ID........."
         </p>
         <hr>
         <p>
                 <center> <strong>2) Registration Fee payment by Account Transfer:
</strong>

  <table class="table table-sm table-borderless table-responsive" >
    <tr><td>Account Name :</td><td>ANURAG GROUP OF INSTITUTIONS</td></tr>
    <tr><td>Bank :</td><td>STATE BANK OF INDIA, GHATKESAR</td></tr>
    <tr><td>Branch  :</td><td>Ghateskar</td></tr>
    <tr><td>Account   :</td><td>62030885098</td></tr>
    <tr><td>IFSC Code  :</td><td>SBIN0020450</td></tr>
  </table>
  </center>

  After successful transaction, take the print out of the transaction receipt (after fee payment), sign it, write the Paper ID on it, and then scan it to have its soft copy, and mail the scanned copy of the transaction receipt to:  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=registration_icacii2019@cvsr.ac.in" target="_blank">registration_icacii2019@cvsr.ac.in</a>. While sending mail, Put in Subject field of mail "Fee payment_Paper ID........."

         </p>
       </div>
     </div>
   </div>


   <?php $this->load->view('common/footer.php');?>

