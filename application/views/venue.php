<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Venue and Travel</title>
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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Plenary Speaker</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Accepted Papers</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Program');?>">Program Schedule</a>
    </div>
  </li>

  <li class="nav-item cool-link">
    <a class="nav-link" href="<?php echo base_url('index.php/CallForPapers');?>" >Call for Papers</a>
  </li>

  <li class="nav-item cool-link ">
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
</li>

<li class="nav-item dropdown cool-link active">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Venue and Travel
</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#reachUs');?>">Travel</a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#visaInfo');?>">VISA Info</a>
  <a class="dropdown-item" href="<?php echo base_url('index.php/Venue');?>">Accomodation</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#localInfo');?>">Local Info</a>
          
      <a class="dropdown-item" href="<?php echo base_url('index.php/Venue#reachUs');?>">How to reach us?</a>
      
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
<div class="navbarMargin" id="reachUs"></div>



<div class="jumbotron hoverable ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4 " style="border-radius: 10px;" style="font-family: 'Lato', sans-serif;">

<span ></span>
<h3 class="h3-responsive pt-4 text" style="color: #0d47a1;"><strong>Travel</strong></h3>
<div class="container-fluid">
  <p class="text-justify" style="font-family: 'Lato', sans-serif;">Our campus is well connected by road, rail and airways. One can easily reach by using any modes these transports.</p>

  <p  class="text-justify mb-0" style="font-family: 'Lato', sans-serif;"><b><strong>Railways:</strong></b>
    <br>Nearest major railway stations and their distance to our institute is as follows:
    <ul style="font-family: 'Lato', sans-serif;">

<li>From Kachiguda railway station: 20 Kms</li>
<li>From Secunderabad railway station: 21.4 Kms</li>
<li>From Nampally railway station: 24 Kms</li>
Some of the trains stop at Ghatkesar station and this station is at a distance of 7 Kms from our institute.
</ul>
  </p>

    <p  class="text-justify mb-0" style="font-family: 'Lato', sans-serif;"><b><strong>Metro train:</strong></b><br>
<ul style="font-family: 'Lato', sans-serif;">
   <li> Nearby metro station to our institute is Uppal which is at a distance of 13 Kms from our institute. </li>
    </ul>
 <span  style="font-family: 'Lato', sans-serif;">   Daily college buses ply from stops near to these railway stations and conference participants can avail college bus facility.</span>
  </p>

  <p  class="text-justify mb-0" style="font-family: 'Lato', sans-serif;"><b><strong>Airport:</strong></b>
    <ul style="font-family: 'Lato', sans-serif;">
  <li>Rajeev Gandhi International Airport is the nearby airport at a distance of 55 Kms from our institute. Assistance for booking cabs will be provided to the participants to reach our institute on payment basis on prior request.</li>

</ul>
  </p>


   <p  class="text-justify mb-0" style="font-family: 'Lato', sans-serif;"><b><strong>Roadways:</strong></b>
    <ul style="font-family: 'Lato', sans-serif;">
  <li>Our institute is situated on the way to Warangal at Jodimetla. Nearby bus hub is Mahatma Gandhi Bus Station (MGBS) which connects inter and intra state transport buses. MGBS bus station is at a distance of 22 Kms from our institute. </li>

</ul>
  </p>
</div>

<hr>

<span id="visaInfo"></span><br>
<h3 class="h3-responsive text" style="color: #0d47a1;"><strong>VISA Information</strong></h3>
<br>
<p class="text-justify" style="font-family: 'Lato', sans-serif;">Request for an invitation to obtain VISA may be made through an e-mail to Convenor (convenor_icacii@cvsr.ac.in) attaching first and last papers of your passport. You will receive the official invitation within three working days.

Please note that this invitation will be given to only registered delegates and invited speakers of ICACII 2019.  </p>
<hr>



  <h3 class="h3-responsive pt-2 text-left" style="color: #0d47a1;"><strong>Accomodation</strong></h3>

  <!--
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
        <tr >
          <td>Transit Hotel</td>
          <td>Shamshabad</td>
        

        </tr>
      
      </tbody>
    </table>
  </div>
  </center>


-->

<center> (Under Process)</center>

    <hr id="localInfo">
   

<section >
  

<div class="title">
          <h3 >Carousel</h3>
        </div>
      
    <center>
    <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-thumbnail" src="<?php echo base_url('assets/images/charminar.jpg');?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Charminar.
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-thumbnail" src="<?php echo base_url('assets/images/sagar.jpg');?>" alt="Second slide" >
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Hussain Sagar
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-thumbnail" src="<?php echo base_url('assets/images/golconda.jpg');?>" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Golconda Fort
                      </h4>
                    </div>
          </div>
          
          <div class="carousel-item">
                    <img class="d-block w-100 img-thumbnail" src="<?php echo base_url('assets/images/birla.jpg');?>" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Birla Mandir
                      </h4>
                    </div>
          </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
</center>
</section>

  <center><a style="text-align: center;border-radius: 10px;" title="Click here to know more" target="_blank" href = "https://telanganatourism.gov.in/" class="btn btn-success">Hyderabad Tourism Local Information</a></center>




  </div>
</div>

<?php $this->load->view('common/footer.php');?>
