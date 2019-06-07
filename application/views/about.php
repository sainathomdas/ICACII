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
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item  cool-link">
            <a class="nav-link" href="<?php echo base_url('index.php/Home');?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         <li class="nav-item cool-link active">
            <a class="nav-link" href="#">About us</a>
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
          
        <li class="nav-item cool-link">
      <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>">Registration</a>
    </li>

            <li class="nav-item dropdown cool-link">
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
<div class="navbarMargin" id="aboutAgi" ></div>





<!-- News jumbotron -->
<div class="jumbotron text-center hoverable ">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class=" overlay">
        <iframe style="width: 100%;" height="300" src="https://www.youtube.com/embed/ZPPy8bL_lv4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6 text-md-left ml-lg-3 mt-3">

      
   

     

      <div class="jumbotron box">
           <a href="#!" class="green-text">
        <h4 class="h4 mb-4" style="color: black;"><i class="fa fa-university" aria-hidden="true"></i> Anurag Group of Institutions</h4>
      </a>
        <p style="color: black;"><strong>
        Telangana’s top-ranked Autonomous institution provides best-in class education in Engineering, Pharmacy and Business Management over the past decade and half. Anurag Group of Institution (AGI) has been recognized by the Government, AICTE, UGC, NBA, NAAC, PCI, Industry, Apex Bodies, and other Societies of repute. AGI has been accredited by Tata Consultancy Services and first in southern Indian state to sign the MoU with “The Open Group” to promote high level academic research standards.</strong>   <a class="btn btn-success btn-sm" target="_blank" href="https://anurag.edu.in/">Visit AGI website</a></p>


      </div>

     
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

<!-- News jumbotron -->
<div class="col-md-11 offset-md-1 mx-lg-2 my-3 " style="color: black;">
  <strong>
  <p>
    AGI is awarded for “Distinguished College Award” by CSI Technxt”, “The Top Performing College Award” for the year 2013 & 2015 by IBM “, “The Best Engineering College Award” by ISTE and ranked 8th among the Engineering colleges in the State of Telangana by the Week magazine. Most recently, AGI is recognized as Research Centre in the Computer Science & Engineering, MBA and Pharmacy departments by JNTUH. The institution offers seven Undergraduate and 11 Postgraduate programs in Engineering, two undergraduate and five Postgraduate programs in Pharmacy and one Postgraduate program in Management. The institution is spread over 50+ acres with a total built-up area of over 700,000 sft. AGI has maintained a record crowning in academics and securing high pay MNC placements for its students who have become symbols of brilliance.
  </p>
  <div class="col-md-11 offset-md-1 mx-lg-2 my-3 ">
  <h4 class="h4 mb-2 text-left" style="color: black;">Special Achievements</h4>

<ul style="font-family: 'Lato', sans-serif;" class="text-left">
          <li> UGC Autonomous Institution, Govt. of India.</li>
<li>Accredited by NBA, AICTE, New Delhi.</li>
<li>Accredited by NAAC-A Grade, UGC, Govt. of India.</li>
<li>TCS Accreditation.</li>
<li>MoU signed with IIT Hyd for all academic relations</li>
<li>NIRF India Rankings 2019: All India 169th Rank in Engineering and All India 76-100 Rank-band in Pharmacy</li>
<li>AAA+ Rating by Careers360 Ranking 2019</li>
<li>Received Best Performing College award from Hon’ble President of India, by Ministry of Youth affairs & Sports, Govt. of India, on 21st Dec. 2017</li>
<li>Ranked 74th Best Engineering College in India - by Times Top 100 Private Engineering Institute Rankings 2018.</li>
<li>Anurag Group of Institutions has achieved “Distinguished College Award” from CSI TechNext India 2017.</li>
<li>Ranked “8th Best Engineering College” in Telangana by The Week 2016.</li>
<li>Winner of “Top Performing College Award” by IBM TGMC-2013 & 2015.</li>
<li>“The Best Engineering College Award” by ISTE for All Round Performance of the year 2012.</li>
       <span class="text-left" style="text-align: left;"> To know more about department of CSE :<a href="https://anurag.edu.in/academics/schools/engineering/computer-science-and-engineering-2/" target="blank" class="text-primary">Click here</a></span>
         </ul>




</div>



  </strong>
</div>


</div>

<?php $this->load->view('common/footer.php');?>