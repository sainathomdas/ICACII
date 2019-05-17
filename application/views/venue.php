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
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <style type="text/css">

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

    ul li{
     min-width: 40px;
     margin-left: 20px;
   }
   .navbar-brand{
    margin-left: 4%;
  }


</style>




</head>


<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " style="background-color: #000009" >
    <div class="container-fluid">


      <a href="<?php echo base_url('index.php/Home');?>" class="navbar-brand"><strong>ICACII</strong></a>

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
        <a class="dropdown-item" href="#">Organizing committee</a>
        <a class="dropdown-item" href="#">Advisory committee</a>
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

  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

  <li class="nav-item cool-link ">
    <a class="nav-link" href="<?php echo base_url('index.php/Registration');?>"><strong>Registration</strong></a>
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

<li class="nav-item dropdown cool-link active">
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
  <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Contact us</a>
</li>
</ul>
</div>

</div>
</nav>
<!-- Navbar -->
<div class="navbarMargin"></div>


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
           <h2 class="h2 mb-4" style="color: darkblue"><i class="fas fa-map-marker-alt"></i>&nbsp;Venue :</h2>
        <h4 class="h4 mb-4" style="color: black;"><i class="fa fa-university" aria-hidden="true"></i></i> Anurag Group of Institutions</h4>
      </a>
        <p style="color: black;"><strong>
         <h5 style="color: black;">Venkatapur (V), Ghatkesar (M),</h5>
         <h5 style="color: black;"> Medchal District, Hyderabad,</h5>
         <h5 style="color: black;">Telangana, India. 500 088.</h5>
         <h5 style="color: black;"> Email: icacii@cvsr.ac.in</h5>
        </strong> </p>


      </div>

     
    </div>
    <!-- Grid column -->
 
  </div>
  <!-- Grid row -->


<div class="jumbotron hoverable ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;" style="font-family: 'Lato', sans-serif;">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.825998838611!2d78.65396351443935!3d17.420136088059014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb76730bf4dccf%3A0x2ca84b53416f0abd!2sAnurag+Group+of+Institutions!5e0!3m2!1sen!2sin!4v1494509805990" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>


<div class="jumbotron hoverable ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;" style="font-family: 'Lato', sans-serif;">

  <h3 class="h3-responsive pt-2 text-left" style="color: #0d47a1;"><strong>Accomodation</strong></h3>
  <p style="font-family: 'Lato', sans-serif;">
    Delegates and participants are requested to make their own arrangements of travel and accommodation. However, necessary information and support will be provided for accommodation in the nearby hotels on request. Double room tariff varies from Rs. 1,500 to Rs. 5,000 per day. The college will provide free local transportation to each the venue. However, a limited accommodation is available in College Hostel at a nominal charge of Rs. 300/- for one night stay.
  </p>
  <center  style="font-family: 'Lato', sans-serif;">
  
    <div class="table-responsive jumbotron">
     <strong>   Few hotels with their tariffs are listed below( Recommended) <br>Fare approx. upto Rs. 5000/-</strong>
    <table class="table table-sm table-striped table-bordered ml-lg-4 mr-lg-4 pl-lg-5 pr-lg-5"  style="font-family: 'Lato', sans-serif;border-radius: 10px;" >
      <thead>
        <tr>
         
          <th scope="col" ><strong>Hotel</strong></th>
          <th scope="col"  ><strong>Address</strong></th>
        </tr>
       

      </thead>
      <tbody>
        <tr>
          <td>Novotel</td>
          <td>Near Airport</td>
        

        </tr>
        <tr>
          <td> Taj Banjara</td>
          <td>Banjara Hills</td>
         

        </tr>
        <tr>
          <td >Taj Krishna</td>
          <td>Banjara Hills</td>
        

        </tr>
        <tr>
          <td>Raddison</td>
          <td>Hitech City, Panjagutta</td>
        

        </tr>
        <tr>
          <td >Lemon Tree</td>
          <td>Hitech City</td>
         
        </tr>
      
      </tbody>
    </table>
  </div>
  
   <div class="table-responsive jumbotron">
    <strong>Fare approx. in the range Rs. 2000/- to 2500/-</strong>
    <table class="table table-sm table-striped table-bordered ml-lg-4 mr-lg-4 pl-lg-5 pr-lg-5"  style="font-family: 'Lato', sans-serif;border-radius: 10px;" >
      <thead>
        <tr>
         
          <th scope="col" ><strong>Hotel</strong></th>
          <th scope="col"  ><strong>Address</strong></th>
        </tr>
       

      </thead>
      <tbody>
        <tr>
          <td>Swagath Grand</td>
          <td>Kothapet, Nagole, Habsiguda</td>
        

        </tr>
        <tr>
          <td> Hotel Vivera</td>
          <td>Bhuvangiri</td>
         

        </tr>
        <tr>
          <td >Hotel Sitara</td>
          <td>LB Nagar</td>
        

        </tr>
        <tr id="localInfo">
          <td>Transit Hotel</td>
          <td>Shamshabad</td>
        

        </tr>
      
      </tbody>
    </table>
  </div>
  </center>
    <hr id="visaInfo">
    <a href="https://telanganatourism.gov.in/" target="_blank">
<h3 class="h3-responsive pt-2 text" style="color: #0d47a1;"><strong>Click here to know about Hyderabad tourism</strong></h3>
</a>
<hr>
<h3 class="h3-responsive pt-2 text" style="color: #0d47a1;"><strong>VISA Information</strong></h3>
<br>
<span style="font-size: 16px;">(Under Construction)</span>


  </div>
</div>

<?php $this->load->view('common/footer.php');?>
