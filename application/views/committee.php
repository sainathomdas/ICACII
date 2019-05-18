<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Committee</title>
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

      <li class="nav-item dropdown cool-link active">
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
    <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>">Registration</a>
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

<li class="nav-item cool-link">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"  id="organizingCommittee"></div>


<div class="jumbotron">
  <center>
    <h2 class="h2-responsive ml-lg-4" style="color: #0d47a1;font-family: 'Baloo Bhai', cursive;"><strong>Organising Committee</strong></h2></center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>Cheif patron</strong></h3>
    <div class="container ">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/palla.jpg');?>" alt="Chairman">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Dr. Palla Rajeshwar Reddy</h4>
              <h6 class="card-subtitle mb-2 text-body">Chairman, Anurag Group of Institutions</h6>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top img-thumbnail "  src="<?php echo base_url('assets/images/neelima.jpg');?>" alt="Secretary">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Ms. S. Neelima</h4>
              <h6 class="card-subtitle mb-2 text-body">Secretary, Anurag Group of Institutions </h6>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!--end of cheif patron-->
    <hr>
    <!--patron and gen chair-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
         <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>Patron</strong></h3>
         <div class="card">
          <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/ksrao.jpg');?>" alt="Director">
          <div class="card-body">
            <h4 class="card-title" style="color: black;">Dr. K. S. Rao</h4>
            <h6 class="card-subtitle mb-2 text-body">Director, Anurag Group of Institutions</h6>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>General Chair</strong></h3>
       <div class="card">
        <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Director">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Dr. V. Vijaya Kumar</h4>
          <h6 class="card-subtitle mb-2 text-body">Dean, CSE & IT, Anurag Group of Institutions</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end of patron and gen chair-->
<hr>
<!--Program chair and convenor-->


<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
     <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>Program Chair</strong></h3>
     <div class="card">
      <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/vishnu.jpg');?>" alt="Director">
      <div class="card-body">
        <h4 class="card-title" style="color: black;">Dr. G. Vishnu Murthy</h4>
        <h6 class="card-subtitle mb-2 text-body">Deputy Director, Anurag Group of Institutions</h6>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
   <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>Convenor</strong></h3>
   <div class="card">
    <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Director">
    <div class="card-body">
      <h4 class="card-title" style="color: black;">Dr. Sandeep Singh Rawat</h4>
      <h6 class="card-subtitle mb-2 text-body">Professor, CSE, Anurag Group of Institutions</h6>
    </div>
  </div>
</div>
</div>
</div>


<!--End of Program chair and convenor -->
<!--steering committee-->


<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>Steering Committee</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>

        <td>Dr. Anuj Sharma, Iowa State University, USA</td>

        <td>Dr. San Murugesan, Fellow IEEE, Adjunct Professor, Western Sydney University, Australia</td>
      </tr>
      <tr>
        <td>Dr. X Z Gao, University of Eastern Finland, Finland</td>
        <td>Dr. Amjad Gawanmeh, Khalifa University of Science and Technology, Abu Dhabi, UAE</td>
      </tr>
      <tr>

        <td>Mr. Bala Prasad Peddigari, Technology Head, TCS, Hyderabad</td>


        <td id="advisory-committee">Mr. M. Harikrishna, Lead Data Scientist, SpOvum Technologies Pvt. Ltd.</td>
      </tr>
      <tr>
        <td colspan="2" id="advisoryCommittee">Mr. Neeraj Kapre, Cap Gemini, Hyderabad</td> 

      </tr>

    </tbody>
  </table>
  
</div>
<!--end of steering committee-->
<hr>

<!--advisory board international-->
<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>ADVISORY BOARD-INTERNATIONAL</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>       
        <td>Prof. Dharma P. Agrawal, OBR Distinguished Professor, Fellow IEEE, University of Cincinnati, Cincinnati, USA</td>

        <td>Dr. Chilukuri Mohan, Professor, Electrical Eng. & Computer Science, Syracuse University, USA</td>
      </tr>
      <tr> 
        <td>Dr. Ljiljana Trajkovic, Professor, Fellow IEEE, Simon Fraser University, Canada</td>
        <td>Dr. Radim Burget, Sildenafil sales Brno University of Technology, Brno, seek sales Czech Republic, European Union</td>
      </tr>
      <tr> 
        <td>Dr. Thinagaran Perumal, University Putra Malaysia, Malaysia</td>
        <td>Dr. Mohammad S. Obaidat, Professor, Fellow IEEE and Fellow IEEE SCS, The University of Jordan, Amman, Jordan</td>
      </tr>
      <tr> 
        <td>Dr. Salvatore Distefano, University of Messina, Italy</td>
        <td>Dr. Alex James, Head, Electrical and Computer Engineering, Nazarbayev University, Republic of Kazakhstan</td>
      </tr>
      <tr> 



        <td>Dr. Joel J. P. C. Rodrigues, National Institute of Telecommunications (Inatel), Portugal</td>
        <td>Dr. Xavier Fernando, Professor, Department of Electrical, Computer & Biomedical Engineering, Ryweson University, Canada</td>
      </tr>
      <tr> 
        <td>Dr. Kithsiri Liyanage, Professor, Department of Electrical & Electronic Engineering, University of Peradeniya, Sri Lanka.</td>
        <td>Dr. Shivakumara P, Senior Lecturer, Faculty of Computer Science & Information Technology, University of Malaysia, Malaysia</td>
      </tr>
      <tr> 
        <td>Dr. Michael Sheng, Head, Macquarie University, Sydney, Australia</td>
        <td>Dr. P N Suganthan, Nanyang Technological University, Singapore</td>
      </tr>
      <tr> 
        <td>Dr. Vincenzo Piuri, Universita' degli Studi di Milano Dipartimento di Informatica Via Celoria, Italy</td>
        <td>Dr. Khan M. Iftekharuddin, Old Dominion University (ODU), USA</td>
      </tr>
      <td colspan="2">Dr. Dhananjay Singh, Hankuk(Korea) University of Foreign Studies(HUFS) School of Engineering, South Korea</td>
    </tr>

  </tbody>
</table>

</div>
<!--end of advisory board international-->
<hr>

<!--ADVISORY BOARD-NATIONAL-->
<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>ADVISORY BOARD-NATIONAL</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>

        <td>Dr. A. Govardhan, Rector, JNTUH</td>
        <td>Dr. SVL Narasimham, Director – SIT, JNTUH</td>
      </tr>
      <tr>

        <td>Dr. D.C Jindwala, Professor, IIT, Jammu</td>

        <td>Dr. Naveen Kumar, Professor, IGNOU, New Delhi</td>
      </tr><tr>

        <td>Dr. DVLN Somayajulu, Professor & Dean, Department of CSE, NIT Warangal</td>

        <td>Dr. P. Radha Krishna, Professor, NIT Warangal</td>
      </tr><tr>
        <td>Dr. B. Vishnu Vardhan. Professor, JNTUH</td>

        <td>Mr. Richard King Chatragadda, Tata Consultancy Services, Hyderabad</td>
      </tr><tr>

        <td>Prof. Atul Negi, School of CIS, University of Hyderabad, Hyderabad.</td>

        <td>Dr. Chandra Mouli PVSSR, NIT Jamshedpur
        </tr><tr>



          <td>Dr. Satya Bagchi, NIT Durgapur</td>

          <td>Mr. C. Yuktesh, IBM, Hyderabad</td>
        </tr><tr>

          <td>Dr. Kandarpa Kumar Sarma, Gauhati University, Assam</td>

          <td>Dr. Suryakanth Gangashetty, IIIT, Hyderabad</td>
        </tr><tr>

          <td>Dr. Rajesh R., Central University, Kerala</td>

          <td>Dr. K. Chandra Sekharan, Professor, NITK</td>
        </tr><tr>

          <td>Dr. S. V. Rao, Professor, IIT Gouhathi</td>

          <td>Dr. M. Krishna Mohan, Professor, IIT Hyderabad</td>
        </tr><tr>

          <td colspan="2">Dr. SALMAN ABDUL MOIZ, Assoc. Prof., University of Hyderabad, Hyderabad</td>
        </tr>


      </tbody>
    </table>

  </div>
  <!--end of ADVISORY BOARD-NATIONAL-->
  <hr>
  <!--ORGANIZING COMMITTEE-->

  <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>ORGANIZING COMMITTEE</strong></h3></center>
    <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

      <tbody>
        <tr>
          <td>Mr. Vidyasagar Tejomurtula, Chair, IEEE CS Chapter, Hyderabad Section</td>

          <td>Dr. A.V. Krishna Prasad, Secretary, Computer Society of India, Hyderabad</td>
        </tr><tr>

          <td>Dr. Manjanna, IIIT, Dharwad</td>

          <td>Dr. Selvakumar R., Senior Professor, VIT, Vellore</td>
        </tr><tr>
          <td>Dr. AVN Krishna, Professor, Christ University, Bangalore</td> 
          <td>Dr. M. Mutha Reddy, Dean, AGI</td>
        </tr><tr>


          <td>Dr. Sunil B., Professor, SNIST, Hyderabad</td>
          <td>Mr. Mohan Raidu, Director Informatics India, Hyderabad</td>
        </tr><tr>
          <td>Dr. Manjaiah, Mangalore University, Mangalore</td>

          <td>Dr. Soanpet Rajender, Professor , SCETW, Hyderabad</td>
        </tr><tr>

          <td colspan="2">Dr. Ahmed Abdul Moiz Qyser, Professor, MJCET, Hyderabad</td>

        </tr>


      </tbody>
    </table>

  </div>
  <!--end of ORGANIZING COMMITTEE-->
  <hr>

  <!--WEB & PUBLICITY - INTERNATIONAL-->

  <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>WEB & PUBLICITY - INTERNATIONAL</strong></h3></center>
    <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

      <tbody>
        <tr>
          <td>Dr. K. S. Reddy, HOD, Dept of IT</td>

          <td> Dr. C. Pavan Kumar, Prof., Dept of CSE</td>
        </tr><tr>

          <td> Mrs. P Srilatha, Asst. Prof, Dept of CSE </td>


          <td> Mr. P Ravinder Rao, Asst. Prof, Dept of CSE</td>
        </tr><tr>
          <td>Mr. V Amarnadh, Asst. Prof, Dept of CSE</td>
          <td>Mrs. V Jyothi, Asst. Prof, Dept of CSE</td>
        </tr><tr>
          <td colspan="2">Mrs. G Lavanya, Asst. Prof, Dept of CSE </td>     

        </tr>


      </tbody>
    </table>

  </div>
  <!--end of WEB & PUBLICITY - INTERNATIONAL-->
  <hr>


  <!--WEB & PUBLICITY - NATIONAL-->

  <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>WEB & PUBLICITY - NATIONAL</strong></h3></center>
    <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

      <tbody>
        <tr>
          <td>Dr. Prashanth Rao, Professor, Department of CSE</td>

          <td>Mrs. N Swapna Goud, Asst. Prof, Dept of CSE</td>
        </tr><tr>

          <td> Mr. B Ravinder Reddy, Asst. Prof, Dept of CSE</td>
          <td>Mrs. A Durga Bhavani, Asst. Prof, Dept of CSE </td>   
        </tr>
      </tbody>
    </table>
  </div>
  <!--end of WEB & PUBLICITY - NATIONAL-->
  <hr>
  <!-- ORGANIZING COMMITTEE - LOCAL -->

  <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>ORGANIZING COMMITTEE - LOCAL</strong></h3></center>
    <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

      <tbody>
        <tr>
          <td>Mrs. M. Sridevi, Assoc. Prof., Dept of CSE</td>

          <td>Mrs. D. Lakshmi  Padmaja, Assoc. Prof., Dept of IT</td>
        </tr><tr>

          <td>Mr. K Raghavendar Rao, Asst. Prof, Dept of CSE</td>

          <td>Mr. P Raja Shekar Reddy, Asst. Prof, Dept of CSE</td>
          </tr><tr>

          <td>Mrs. G Bindu Madhavi, Asst. Prof, Dept of CSE</td>

          <td>Ms. B Jyothi, Asst. Prof, Dept of CSE</td>
          </tr><tr>

          <td>Mr. Dasu Vaman Ravi Prasad, Asst. Prof, Dept of CSE</td>

          <td>Mrs. B Ujwala, Asst. Prof, Dept of CSE </td>
          </tr><tr>

          <td>Mr. G Kiran Kumar, Asst. Prof, Dept of CSE </td>

          <td>Mr. A Mallikarjun Reddy, Asst. Prof, Dept of CSE</td>
          </tr><tr>

          <td>Mr. G Bala Krishna, Asst. Prof, Dept of CSE</td>
          <td>Mr. V Rama Krishna, Asst. Prof, Dept of CSE</td>
          </tr><tr>
          <td>Mr. Jayendra Kumar, Asst. Prof, Dept of CSE</td>




          <td>Mr. A Obulesu, Asst. Prof, Dept of CSE </td>
          </tr><tr>
          <td>Mr. C Rama Krishna, Asst. Prof, Dept of CSE </td>

          <td>Mr. Madar Bandu, Asst. Prof, Dept of CSE </td>
          </tr><tr>

          <td>Mrs. M Madhavi, Asst. Prof, Dept of CSE</td>

          <td>Mr. P Ravi, Asst. Prof, Dept of CSE</td>
</tr><tr>
          <td>Mrs. K Shailaja, Asst. Prof, Dept of CSE </td>

          <td>Mrs. P Vinay Sree, Asst. Prof, Dept of CSE </td>
          </tr><tr>

          <td>Mr. J Shiva Prashanth, Asst. Prof, Dept of CSE</td>

          <td>Ms. S Deepika, Asst. Prof, Dept of CSE</td>
          </tr><tr>
          <td>Mrs. A Jyothi, Asst. Prof, Dept of CSE</td>
          <td>Mr. G. Balram, Asst. Prof, Dept of CSE</td>
          </tr><tr>
          <td colspan="2" id="technicalCommittee">Mr. Hari Prasad, Asst. Prof, Dept of CSE</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- end of ORGANIZING COMMITTEE - LOCAL -->
<hr>
<!--technical committee-->
 <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;font-family: 'Baloo Bhai', cursive;"><strong>TECHNICAL PROGRAMMING COMMITTEE</strong></h3>
    <p>(Under construction)</p></center>
</div>
<!--end of technical committee-->
</div>

<?php $this->load->view('common/footer.php');?>

