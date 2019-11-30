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
   <a class="dropdown-item"  href="<?php echo base_url('assets/Author-kit.rar');?>" download = "Author-kit.rar">Author kit</a>
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

<li class="nav-item cool-link active">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact Us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"  ></div>
<div class="container">
  <div class="jumbotron mt-4 p-3 pl-4">
    
    <h3 style="color: green;">Contact Information</h3>
    <div class="row">
      <div class="col-md-6">
        <table class="table table-borderless" style="overflow-x: auto;display: block; overflow-y: auto;">
          <thead>
            <tr>
              <th scope="col"><b>Type of Query</b></th>
              <th scope="col"><b>Contact Person</b></th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Sponsorship</th>
              <td>P. RAVINDER RAO<br>
                Assoc. Professor, AGI<br>
                Phone: +91 94404 85784<br>
              Email: ravinderraocse@cvsr.ac.in</td>
              
            </tr>
            

            <tr>
              <th scope="row">Registration</th>
              <td>B. JYOTHI<br>
                Assoc. Professor, AGI<br>
                Phone: +91 92904 49469<br>
              Email: registration_icacii2019@cvsr.ac.in</td>
            </tr>


            
            <tr>
              <th scope="row">Accommodation</th>
              <td>Mr. Madar Bandu       <br>
                Asst. Professor, AGI<br>
                Phone: +91 97040 56521<br>
                Email:  madarbanducse@cvsr.ac.in
                <hr>
                Mrs. Hima Bindu<br>
                Asst. Professor, AGI<br>
                Phone: +91 98485 02406<br>
                Email:  himabinducse@cvsr.ac.in   



              </td>
            </tr>

            <tr>
              <th scope="row">Transport</th>
              <td>V. AMARNADH      <br>
                Asst. Professor, AGI<br>
                Phone: +91 96668 23999<br>
              Email: amarnadhcse@cvsr.ac.in</td>
            </tr>


          </tbody>
        </table>
      </div>

      <div class="col-md-2"></div>
      <div class="col-md-4 mt-lg-3 text-left">
        <!--mailing address-->
        <div class="container">
          <h5 style="color: black;"><b>Mailing address</b></h5>
          Convenor - ICACII 2019<br>
          Anurag Group of Institutions<br>
          Venkatapur, Ghatkesar,<br>
          Medchal District, Hyderabad,<br>
          Telangana, India - 500 088.<br>
          Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=convenor_icacii@cvsr.ac.in" target="_blank">convenor_icacii@cvsr.ac.in</a><br>
          Ph.No: +91 70329 29075
        </div>
        <!--End of mailing address-->

        <!--map-->
        <div class="ml-sm-1 mr-sm-1  mr-lg-5 p-1 pl-1 pr-1 pb-1 col-lg-11 mt-lg-3" >

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.825998838611!2d78.65396351443935!3d17.420136088059014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb76730bf4dccf%3A0x2ca84b53416f0abd!2sAnurag+Group+of+Institutions!5e0!3m2!1sen!2sin!4v1494509805990" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen="" class="hoverable mt-4"></iframe>
        </div>

        <!--End of map-->



      </div>

    </div>

  </div>
</div>


<?php $this->load->view('common/footer.php');?>
