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

<li class="nav-item cool-link">
  <a class="nav-link" href="<?php echo base_url('index.php/Contact');?>">Contact Us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"  ></div>



<div class="jumbotron " >

  <center>
    <div style="vertical-align: middle;">
      <h3 class="h1-responsive" style="color: #37474F;"><strong>Keynote Speakers</strong></h3>
    </div>
  </center>

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
    #more1 {display: none;}
    #more2 {display: none;}
    #more3{display: none;}
    p{
      
      font-family: bold;
    }
  </style>
<!-- 
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
-->
<div class="container py-3">
  <div class="row  justify-content-center">
    <div class="col-12 col-md-5 hoverable justify-content-center text-center">
      <div class=" text-center ">

        <img src="<?php echo base_url('assets/images/che.jpg');?>" class="img-fluid hoverable " height="180" width="180" style="border-radius: 50%;" alt="hoverable">


      </div>
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title text-dark text-center"><b>Dr. Salvatore Distefano</b></h4>
        <!-- Text -->

        <span id="dots1"></span>
        <span id="more1">
          <p class="text-justify">Dr. Salvatore Distefano is an Associate Professor at University of Messina, Italy, and Fellow Professor at Kazan Federal University, Russia, head of the Social and Urban Computing Group and of the Cisco Innovation Center in Kazan. He was formerly an Assistant Professor at Politecnico di Milano (2011-2015). In 2001 he got the master degree in Computer Engineering from University of Catania, and then, in 2006, he received the Ph.D degree on Computer Science and Engineering from University of Messina.      </p>


          <p class="text-justify">Dr. Salvatore authored and co-authored more than 200 scientific papers and contributions to international journals, conferences and books. He took part to several national and international projects, such as Reservoir, Vision (EU FP7), SMSCOM (EU FP7 ERC Advanced Grant), Beacon, IoT-Open.EU (EU H2020). He is in the editorial boards of IEEE Transactions on Dependable and Secure Computing, International Journal of Performability Engineering, Journal of Cloud Computing, International Journal of Engineering and Industries, International Journal of Big Data, International Journal of Computer Science & Information Technology Applications, International Journal of Distributed Sensor Networks. </p>
        </span>
        <!-- Button -->
        <button  class="btn btn-primary btn-sm waves-effect " onclick="myFunction1()" id="myBtn1">Read More</button>

      </div>
    </div>
    <div class="col-1"></div>
    <div class="col-12 col-md-5 justify-content-center text-center hoverable">
      <div class="card-img-top text-center ">
        <img style="border-radius: 50%;" src="<?php echo base_url('assets/images/AnindaBose.jpg');?>" class=" img-fluid hoverable " height="180" width="180">

      </div>
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title text-dark  text-center"><b>Mr. Aninda Bose</b></h4>
        <!-- Text -->

        <span id="dots2"></span>
        <span id="more2">
          <p class="text-justify">Aninda Bose is presently working as a Senior Publishing Editor with Springer Nature. Mr. Bose is part of the Global Acquisition Team at Springer Nature and responsible for acquisition of scientific content across the globe. He is responsible for acquisition of content in Interdisciplinary Applied Sciences. He has more than 25 years of industrial experience in marketing and different fields of publishing. Mr. Bose has completed Masters in Organic Chemistry from Delhi University and Masters in Marketing Research from Symbiosis Institute of Management Studies, Pune. Mr. Bose has delivered more than 110 invited talks on Scientific Writing and Publishing Ethics in reputed Universities, International Conferences and Author Workshops. He has published books for secondary level in Chemistry and is a member of American Chemical Society, USA.</p>



        </span>
        <!-- Button -->
        <button  class="btn btn-primary btn-sm waves-effect " onclick="myFunction2()" id="myBtn2">Read More</button>

      </div>
    </div>
  </div>
  
</div>

<hr id="plenary">

<!--Plenary speaker start-->
<center>
  <div style="vertical-align: middle;">
    <h3 class="h1-responsive" style="color: #37474F;"><strong>Plenary Speaker</strong></h3>
  </div>

<div class="col-md-6 hoverable justify-content-center text-center">
  <div class=" text-center ">                        
    <img style="border-radius: 50%;" src="<?php echo base_url('assets/images/samir.jpg');?>" class="img-fluid hoverable " height="180" width="180"alt="hoverable">   

  </div>
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title text-dark text-center"><b>Samir Goswami</b></h4>
    <!-- Text -->

    <span id="dots3"></span>
    <span id="more3">
      <p class="text-justify">Software professional having overall 23+ years experience with IT industry in Design & Development for
Engineering Applications Domain (around 12 years)<br>
Financial Applications Domain (around 5 years)<br>
Healthcare Application Domain (around 3 years)</p>


      <p class="text-justify">Involved in forming mission specific teams and logistics.<br>
A member of senior management group and/extensively involved in various organizational building activities like recruitment, training, policy making and its enforcement.<br>
Pioneered implementation of agile development practices (SCRUM Methodology) in the organization for product/software development.<br>
A practicing Enterprise Software Architect specializing in object-oriented architecture-design-analysis and component based designs.<br>
As a Product development manager, efficiently handle product development and support issues depending upon priorities, interact with clients and resolve outstanding issues. </p>
    </span>
    <!-- Button -->
    <button  class="btn btn-primary btn-sm waves-effect " onclick="myFunction3()" id="myBtn3">Read More</button>

  </div>
</div>
</center>


<!-- end of plenary speaker -->

</div>
<!-- jumbotron close -->











<script>
  function myFunction1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("myBtn1");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";

    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";

    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }



 function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }


</script>
<?php $this->load->view('common/footer.php');?>

