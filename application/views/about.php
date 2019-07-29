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
        <li class="nav-item cool-link active">
          <a class="nav-link" href="#">About Us</a>
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
 </div>
</li>

<li class="nav-item dropdown cool-link">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Venue and Travel
</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
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
<div class="navbarMargin" id="aboutAgi" ></div>

<!-- News jumbotron -->
<div class="jumbotron text-center hoverable ">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="">
        <iframe style="width: 80%;" height="260" src="https://www.youtube.com/embed/ZPPy8bL_lv4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6 text-md-left ml-lg-3 mt-3">






      <div class="jumbotron p-4 pb-5  ">
       <a href="#!" class="green-text">
        <h4 class="h4 " style="color: black;"><i class="fa fa-university" aria-hidden="true"></i> Anurag Group of Institutions</h4>
      </a>
      <p style="font-family: 'Lato', sans-serif;font-size: 14px;" class="p-0 pt-2">AGI established in 2002, has evolved into one of the top institutions of Telangana and is well reputed for its pursuit of excellence by providing world class education. Under the leadership of our Founder and Chairman, Dr.Palla Rajeshwar Reddy (MLC, Whip in Govt of Telangana), the institution has grown phenomenally and now offers a total of 10 UG and 13 PG programs in the fields of Engineering, Pharmacy and Business Management.   
        <a class="btn btn-success btn-sm" target="_blank" href="https://anurag.edu.in/">Visit AGI website</a></p>


      </div>


    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <!-- News jumbotron -->
  <div class=" offset-md-2 col-md-11  mx-lg-3 my-3 " style="color: black;">

    <p class="ml-lg-5" style="font-family: 'Lato', sans-serif;font-size: 14px;">
      Anurag Group of Institutions sprawling over more than 50 acres, with its aesthetic architecture, lush greenery and avant-garde infrastructure, AGI provides an exciting academic environment, with more than 400 dedicated faculty members including 87 doctorates, training our students to become a truly global citizen. AGI uses Outcome Based Education techniques and blended pedagogy to help our students navigate the rapidly changing landscape of modern-day technological world. As success of our students is the only measurable metric in the quality of education given here, AGI boasts of a whopping 900+ placements in the academic year 2018-19 alone.  

    </p>
  </div>
  <div class="col-md-11 offset-md-1 mx-lg-4 my-3 ">
    <h4 class="h4 mb-2 text-left" style="color: black;">Special Achievements</h4>


    <ul style="font-family: 'Lato', sans-serif;font-size: 14px;" class="text-left">
     <li> All India 169th Rank in Engineering in National Institutional Ranking Framework (NIRF)- 2019 </li>
     <li> All India 76-100 Rank Band in Pharmacy in National Institutional Ranking Framework (NIRF)- </li>2019  
     <li> Ranked  4th Best Engineering College in Telangana with AAA+ Rating by Careers360- 2019</li>
    <li>  Times of India Rankings -2019:
      <ul>
      <li>Ranked  49th  Best Engineering College in India</li>
     <li> Ranked  7th Best Engineering College in Telangana</li>
    <li>  Ranked  3rd Best Engineering College in Telangana in ‘Infrastructure’ category </li>
    <li>  Ranked  3rd Best Engineering College in Telangana in ‘Research’ category </li>
     <li> Ranked  6th Best Engineering College in Telangana in ‘Placement’ category  </li>
      </ul>
      </li>
     <li> Ranked  74th   in  Top 100 Private Engineering Colleges category by Times of India Rankings- </li>2018
     <li> Ranked  8th Best Engineering College in Telangana by The Week 2016</li>
     <li> Ranked 7th Best Engineering College in Telangana by INDIA TODAY Rankings</li>
     <li> Best Engineering Education Award 2019 by CIMSME</li>
     <li> Received NSS- Best Performing College Award from Hon’ble President of India (NSS) -2017</li>
     <li> The Top Performing College Award for the years  2013 and 2015 by IBM</li>
     <li> The Best Engineering College Award by Indian Society for Technical Education -2012</li>
     <li> Accredited with Grade ‘A’ by National Assessment & Accreditation Council (NAAC)</li>
     <li> All UG programs are Accredited by National Board Accreditation (NBA)</li>
     <li> Accredited by Tata Consultancy Services (TCS)</li>
     <li> Granted Autonomous status by University Grants Commission (UGC)</li>
     <li> Included Under 2(f ) and 12(b) of UGC</li>
     <li> Recognized as a Research Centre by JNTU Hyderabad </li>


      <span class="text-left" style="text-align: left;"> To know more about department of CSE :<a href="https://anurag.edu.in/academics/schools/engineering/computer-science-and-engineering-2/" target="blank" class="text-primary">Click here</a></span>
    </ul>

  </div>

</div>
</div>

<?php $this->load->view('common/footer.php');?>