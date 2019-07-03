

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

.card{
  height: 250px;
  width: 300px;
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
    .card-img-top{
      padding-top:2vh;
      height:auto;
      width:50%;
    }
    .card {
      
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .card-title{
      font-size: 18px;
    }
    .card-subtitle{
      font-size: 14px;
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
      <ul class="navbar-nav mx-auto">
        <li class="nav-item  cool-link">
          <a class="nav-link" href="<?php echo base_url('index.php/Home');?>">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
       <li class="nav-item cool-link">
            <a class="nav-link" href="<?php echo base_url('index.php/About');?>">About Us</a>
          </li>


      <li class="nav-item dropdown cool-link active">
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
<div class="navbarMargin"  id="organizingCommittee"></div>


<div class="jumbotron">
  <center>
    <h2 class="h2-responsive ml-lg-4 pt-0 mt-0" style="color: #0d47a1;"><strong>Organizing Committee</strong></h2></center>
    <h3 class="h3-responsive ml-lg-4 text-center" style="color: green;"><strong>Chief patron</strong></h3>
    <div class="container ">
      <div class="row justify-content-center align-items-center ">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top rounded-circle "   src="<?php echo base_url('assets/images/palla.jpg');?>" alt="Chairman">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Dr. Palla Rajeshwar Reddy</h4>
              <h6 class="card-subtitle mb-2 text-body">Chairman, Anurag Group of Institutions</h6>
            </div>
          </div>
        </div>



      </div>
    </div>
    <!--end of cheif patron-->
    <hr>
    <!--patron and gen chair-->
    <div class="container">
      <center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>Patrons</strong></h3>
      <div class="row justify-content-center align-items-center pb-5">

         <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top rounded-circle"  src="<?php echo base_url('assets/images/neelima.jpg');?>" alt="Secretary">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Ms. S. Neelima</h4>
              <h6 class="card-subtitle mb-2 text-body">Secretary, Anurag Group of Institutions </h6>
            </div>
          </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       
         <div class="card">
          <img class="card-img-top rounded-circle"   src="<?php echo base_url('assets/images/ksrao.jpg');?>" alt="Director">
          <div class="card-body">
            <h4 class="card-title" style="color: black;">Dr. K. S. Rao</h4>
            <h6 class="card-subtitle mb-2 text-body">Director, Anurag Group of Institutions</h6>
          </div>
        </div>
      </div>

      
       
</div>





      <div class="row col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>General Chair</strong></h3>
       <div class="card">
        <img class="card-img-top rounded-circle"   src="<?php echo base_url('assets/images/vijay.png');?>" alt="General_Chair">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Dr. V. Vijaya Kumar</h4>
          <h6 class="card-subtitle mb-2 text-body">Dean, CSE & IT, Anurag Group of Institutions</h6>
        </div>
      </div>
    </div>
  </div>


<!--end of patron and gen chair-->
<hr>
<!--Program chair and convenor-->


<div class="container">
  <div class="row justify-content-center align-items-center pb-3">

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
     <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>Program Chair</strong></h3>
     <div class="card">
      <img class="card-img-top rounded-circle"   src="<?php echo base_url('assets/images/vishnu.jpg');?>" alt="Program_chair">
      <div class="card-body">
        <h4 class="card-title" style="color: black;">Dr. G. Vishnu Murthy</h4>
        <h6 class="card-subtitle mb-2 text-body">Deputy Director, Anurag Group of Institutions</h6>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
   <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>Convenor</strong></h3>
   <div class="card">
    <img class="card-img-top rounded-circle" style="max-height: 300px;"  src="<?php echo base_url('assets/images/sandeep1.jpg');?>" alt="Convenor"  >
    <div class="card-body">
      <h4 class="card-title" style="color: black;">Dr. Sandeep Singh Rawat</h4>
      <h6 class="card-subtitle mb-2 text-body">Professor, CSE, Anurag Group of Institutions</h6>
    </div>
  </div>
  </div>

</div>
</div>
<hr>
</center>
<!--End of Program chair and convenor -->
<!--steering committee-->


<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>Steering Committee</strong></h3></center>
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
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>ADVISORY BOARD-INTERNATIONAL</strong></h3></center>
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
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>ADVISORY BOARD-NATIONAL</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>

        <td>Dr. A. Govardhan, Rector, JNTUH</td>
        <td>Dr. SVL Narasimham, Director – SIT, JNTUH</td>
      </tr><tr>
       <td>Dr. D. C. Jindwala, Professor, IIT, Jammu</td>
       <td>Dr. Naveen Kumar, Professor, IGNOU, New Delhi</td>
     </tr><tr>
      <td>Prof. V Kamakshi Prasad, Director of Evaluation, JNTUH</td>
      <td>Dr. B. Vishnu Vardhan, Professor, JNTUH</td>
    </tr><tr>
     <td>Dr. DVLN Somayajulu, Director, IIIT DM, Kurnool</td>
     <td>Dr. P. Radha Krishna, Professor, NIT Warangal</td>
   </tr><tr>
     <td>Mr. Richard King Chatragadda, Tata Consultancy Services, Hyderabad</td>
     <td>Prof. Atul Negi, School of CIS, University of Hyderabad, Hyderabad</td>
   </tr><tr>
     <td>Dr. Chandra Mouli PVSSR, NIT Jamshedpur</td>
     <td>Dr. Satya Bagchi, NIT Durgapur</td>
   </tr><tr>
     <td>Mr. C. Yuktesh, IBM, Hyderabad</td>
     <td>Dr. Kandarpa Kumar Sarma, Gauhati University, Assam</td>
   </tr><tr>
    <td>Dr. Suryakanth Gangashetty, IIIT, Hyderabad</td>
    <td>Dr. Rajesh R., Central University, Kerala</td>
  </tr><tr>
   <td>Dr. K. Chandra Sekharan, Professor, NITK</td>
   <td>Dr. S. V. Rao, Professor, IIT Gouhathi</td>
 </tr><tr>
   <td>Dr. M. Krishna Mohan, Professor, IIT Hyderabad</td>
   <td>Dr. Salman Abdul Moiz, Assoc. Prof., University of Hyderabad, Hyderabad</td>
 </tr>


</tbody>
</table>

</div>
<!--end of ADVISORY BOARD-NATIONAL-->
<hr>
<!--ORGANIZING COMMITTEE-->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>ORGANIZING COMMITTEE</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
        <td>Dr. M. Mutha Reddy, Dean - Examinations, AGI</td>
        <td>Dr Vasudha Bakshi, Dean, School of Pharmacy, AGI</td>
      </tr><tr>
       <td> Mr. Vidyasagar Tejomurtula, Chair, IEEE CS Chapter, Hyderabad Section</td>
       <td> Dr. Manjanna, IIIT, Dharwad</td>
     </tr><tr>
       <td> Dr. K. S. Reddy, Head – IT, AGI</td>
       <td> Dr. A.V. Krishna Prasad, Professor, MVSR College of Engineering, Hyderabad</td>
     </tr><tr>
       <td> Dr. S. Satheeskumaran, Head – ECE, AGI</td>
       <td> Dr. Selvakumar R., Senior Professor, VIT, Vellore</td>
     </tr><tr>
       <td> Dr. Sunil B., Professor, SNIST, Hyderabad</td>
       <td> Mr. Mohan Raidu, Director Informatics India, Hyderabad</td>
     </tr><tr>
       <td> Dr. T. Anil Kumar, Head – EEE, AGI</td>
       <td> Dr. Manjaiah, Mangalore University, Mangalore</td>
     </tr><tr>
       <td> Dr. R. Venkat Reddy - Mechanical Engineering, AGI</td>
       <td> Dr. Savitha Belwal, - Head – Chemistry, AGI</td>
     </tr><tr>
       <td> Dr. G. V. S. Anantha Lakshmi, - Head, English, AGI</td>
       <td> Dr. K. Shiva Reddy, Head – Mathematics, AGI</td>
     </tr><tr>
       <td> Dr. M. Srinivasa Reddy, Head – Physics, AGI</td>
       <td> Dr. Soanpet Rajender, Professor, SCETW, Hyderabad</td>
     </tr><tr>
       <td> Dr. M. MukundaVani, Head – Chemical Engineering, AGI </td>
       <td> Dr. G. Sabitha, Head - School of Management, AGI</td>
     </tr><tr>
       <td> Dr. A. Vimala, Head – Civil Engineering, AGI</td>
       <td> Dr. Ahmed Abdul Moiz Qyser, Professor, MJCET, Hyderabad</td>

     </tr>


   </tbody>
 </table>

</div>
<!--end of ORGANIZING COMMITTEE-->
<hr>

<!--WEB & PUBLICITY - INTERNATIONAL-->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>PROGRAM COMMITTEE </strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
       <th>  Dr. G. Vishnu Murthy, Professor<span class="text-muted">(Program committee chair)</span></th>

       <td> Mrs. M. Sridevi, Assoc. Professor</td>
     </tr><tr>
       <td>    Mrs. K Shailaja, Assoc. Professor</td>
       <td>    Mrs. A. Jyothi, Assoc. Professor</td>
     </tr><tr>
       <td>    Mr. P. Raja Shekar Reddy, Asst. Professor</td>
       <td>Mr. K. Raghavendar Rao, Asst. Professor</td>



     </tr>


   </tbody>
 </table>

</div>
<!--end of PROGRAM COMMITTEE CHAIR: -->
<hr>


<!--PUBLICATION COMMITTEE CHAIR-->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>PUBLICATION COMMITTEE</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
        <td>Dr. Sandeep Singh Rawat, Professor<span class="text-muted"><bR>(Publication committee chair)</span></td>
        <td> Mr. V. Rama Krishna, Assoc. Prof.</td>
      </tr><tr>
       <td> Mrs. M Madhavi, Assoc. Prof.</td>
       <td> Mr. Dasu Vaman Ravi Prasad, Assoc. Prof.</td>
     </tr><tr>
       <td> Ms. B. Jyothi, Asst. Prof.</td>
       <td> Mrs. Veda Reddy, Asst. Prof.</td>
     </tr>
   </tbody>
 </table>
</div>
<!--end of PUBLICATION COMMITTEE CHAIR-->
<hr>


<!-- PUBLICITY COMMITTEE CHAIR INTERNATIONAL -->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>PUBLICITY COMMITTEE INTERNATIONAL</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
        <td>  Dr. C. Pavan Kumar, Assoc. Professor<span class="text-muted"><Br>(Publicity Committee Chair International)</span></td>
        <td>  Mrs. D. Lakshmi Padmaja, Assoc. Prof.</td>
      </tr><tr>
        <td>  Mrs. P. Srilatha, Assoc. Prof.</td>
          <td>Dr.Tilottama Goswami, Professor</td>
       
      </tr><tr>
         <td>  Mrs. V. Jyothi, Assoc. Prof.</td>
        <td>Mr. P Ravi, Asst. Prof.</td></tr>
        <tr>

        <td colspan="2">  Mr. G Bala Krishna, Asst. Prof.</td>

      </tr>
    </tbody>
  </table>
</div>

<!--end of PUBLICITY COMMITTEE CHAIR INTERNATIONAL -->
<hr>

<!-- PUBLICITY COMMITTEE CHAIR NATIONAL -->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>PUBLICITY COMMITTEE NATIONAL</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
       
        <td>  Dr. Prashanth Rao, Professor</td>
             <td> Dr. A Mallikarjuna Reddy, Assoc. Professor</td>
      </tr><tr>
   
        <td> Mrs. G Bindu Madhavi, Assoc. Prof.</td>
             <td> Mrs. N. Swapna Goud, Assoc. Prof.</td>
      </tr><tr>
   
        <td> Mr. B. Ravinder Reddy, Asst. Prof.</td>
          <td> Mrs. A Durga Bhavani, Asst. Prof.</td>
      </tr><tr>
      
        <td colspan="2"> Mr. G. Balram, Asst. Prof.</td>


      </tr>
    </tbody>
  </table>
</div>

<!--end of PUBLICITY COMMITTEE CHAIR NATIONAL -->
<hr>


<!-- SPONSORSHIP COMMITTEE CHAIR -->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>SPONSORSHIP COMMITTEE</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
        <td>  Mr. P. Ravinder Rao, Assoc. Professor<span class="text-muted"><br>(Sponsorship Committee Chair)</span></td>
        <td>  Mr. J. Siva Prashanth, Assoc. Prof.</td>
      </tr><tr>
        <td>  Mrs. S. Deepika, Asst. Prof.</td>
        <td> Mr. M. Ravi Kishore, Asst. Prof.</td>
      </tr>
    </tbody>
  </table>
</div>

<!--end of SPONSORSHIP COMMITTEE CHAIR -->
<hr>


<!-- ACCOMMODATION COMMITTEE CHAIR -->

<div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>ACCOMMODATION COMMITTEE</strong></h3></center>
  <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

    <tbody>
      <tr>
       <td> Dr. A. Obulesh, Assoc. Professor<span class="text-muted"><br>(Accommodation Committee Chair)</span></td>
       <td>Mr. V. Amarnadh, Asst. Prof.</td></tr><tr>
         <td> Mr. Jayendra Kumar, Asst. Prof.</td>
         <td> Mr. Madar Bandu, Asst. Prof.</td></tr><tr>
          <td colspan="2">Mr. Hari Prasad, Asst. Prof.</td>

        </tr>
      </tbody>
    </table>
  </div>

  <!--end of ACCOMMODATION COMMITTEE CHAIR -->
  <hr>


  <!-- ORGANIZING COMMITTEE – LOCAL -->

  <div class="table-responsive  offset-lg-3 col-lg-6"><center>
    <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>ORGANIZING COMMITTEE – LOCAL</strong></h3></center>
    <table class="table table-bordered table-sm p-lg-4" style="font-family: 'Lato', sans-serif;border-radius: 10px;">

      <tbody>
        <tr>
          <td>Mrs. B. Ujwala, Asst. Prof.</td>
          <td>Mr. G. Kiran Kumar, Asst. Prof.</td></tr><tr>
            <td>Mrs. P. Vinay Sree, Asst. Prof.</td>
         <td>Mrs. G. Lavanya, Asst. Prof.</td></tr><tr>
         <td>Mr. V. Rama Krishna, Asst. Prof.</td>
         <td>Mrs. P Rajeshwari, Asst. Prof.</td></tr><tr>
         <td>Mr. Ravinder Naik R, Asst. Prof.</td>
         <td>Mrs. M. Sandhya Rani, Asst. Prof.</td></tr><tr>
         <td>Mrs. J. Hima Bindu Priyanka, Asst. Prof.</td>
         <td>Mr. K. Naresh, Asst. Prof.</td></tr><tr>
        <td> Ms. K. Shanthi Latha, Asst. Prof.</td>
        <td> Ms. Ch. Hyma, Asst. Prof.</td></tr><tr>
        <td> Mr. K. Shravan Kumar, Asst. Prof.</td>
        <td> Mr. N. Ravi, Asst. Prof.</td>

       </tr>
     </tbody>
   </table>
 </div>

 <!--end of ORGANIZING COMMITTEE – LOCAL -->
 <hr id="technicalCommittee">


 <!--technical committee-->
 <div class="table-responsive  offset-lg-3 col-lg-6"><center>
  <h3 class="h3-responsive ml-lg-4" style="color: green;"><strong>TECHNICAL PROGRAM COMMITTEE</strong></h3>
  <p>(Under construction)</p></center>
</div>
<!--end of technical committee-->
</div>

<?php $this->load->view('common/footer.php');?>

