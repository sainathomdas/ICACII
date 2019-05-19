<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ICACII-Call for Papers</title>
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

  <li class="nav-item cool-link active">
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
<div class="navbarMargin"  ></div>

<div class="jumbotron ml-sm-1 mr-sm-1 ml-lg-3 mr-lg-3 p-3 pl-4 pr-4" style="border-radius: 10px;">
  <div class="jumbotron hoverable">
    <h3 class="h3-responsive" style="color: #0d47a1;"><strong>Call for Papers</strong></h3>
    <p class="p-2 text-justify text-body " style="font-family: 'Lato', sans-serif;">
      The aim of the 1st International Conference on Advances in Computational Intelligence and Informatics (ICACII- 2019), is to provide a platform for researchers, scientists, technocrats, academicians and engineers to exchange their innovative ideas and new research findings in the field of Computational Intelligence and Informatics till the end of 2019. The conference will boost excellent innovations in terms of day to day life and academics. The proceedings of the conference will unleash a package platform for innovative ideas into a single unit. Prospective authors are invited to submit manuscripts reporting original unpublished research and recent developments in the topics related to the field of Computational Intelligence and Informatics. All the submitted papers will be double blind peer reviewed by Technical Reviewer Committee. All accepted & registered high-quality papers will be published in  <b><strong> Springer “Lecture Notes in Networks and Systems” indexed in ISI Proceedings, SCOPUS, Google Scholar and Springerlink.</strong></b><br>
<a href="https://easychair.org/account/signin?l=W7DWJ73tNHS0coVuVD4X0U" target="_blank">Submit your paper now</a>
    </p>
    <br>

    <div class="jumbotron p-1 hoverable">
      <ul class="nav nav-tabs md-tabs p-2" style="background-color: #1C2331;border-radius: 10px;" id="myTabEx" role="tablist">
        <li class="nav-item" style="border-radius: 10px;">
          <a class="nav-link active show" id="tab-topics" data-toggle="tab" href="#topics" role="tab" aria-controls="home-ex"
          aria-selected="true">Topics</a>
        </li>
        <li class="nav-item" style="border-radius: 10px;">
          <a class="nav-link" id="tab-authorInstructions" data-toggle="tab" href="#authorInstructions" role="tab" aria-controls="profile-ex"
          aria-selected="false">Author Instructions</a>
        </li>
        <li class="nav-item" style="border-radius: 10px;">
          <a class="nav-link" id="tab-paperSubmission" data-toggle="tab" href="#paperSubmission" role="tab" aria-controls="contact-ex"
          aria-selected="false">Paper Submission</a>
        </li>
      </ul>
      <div class="tab-content pt-5" id="myTabContentEx">
        <div class="tab-pane fade active show pl-4 pr-4 pt-0" id="topics" role="tabpanel" aria-labelledby="topics">
         <ul style="font-family: 'Lato', sans-serif;">
           <li>Computational Intelligence</li>
           <li>Data Mining and Data Warehousing</li>
           <li>High Performance Computing</li>
           <li>Parallel and Distributed Computing</li>
           <li>Soft Computing</li>
           <li>Big Data</li>
           <li>Cloud Computing</li>
           <li>Grid Computing</li>
           <li>Cognitive Computing</li>
           <li>Image Processing</li>
           <li>Wireless Networks</li>
           <li>Social Networks</li>
           <li>Wireless Sensor Networks</li>
           <li>Information and Network Security</li>
           <li>Web Security</li>
           <li>Internet of Things</li>
           <li>Bio Informatics</li>
           <li>Geo Informatics</li>
           <li>Computer Networks</li>
           <li>Mathematical models</li>
           <li>Theoretical/Statistical investigations</li>
           <li>Other Topics Related to ICACII theme</li>

         </ul>
       </div>
       <div class="tab-pane fade pl-4 pr-4 pt-0" id="authorInstructions" role="tabpanel" aria-labelledby="paperSubmission"  style="font-family: 'Lato', sans-serif;">
        <h5 style="color: black;">Manuscript Preparation</h5>
        <p>
          The manuscript should be prepared in <a href="https://www.springer.com/series/15179" target="_blank"> Springer</a> format using <a href="https://resource-cms.springernature.com/springer-cms/rest/v1/content/3318/data/v4"> MS WORD </a>and/or <a href="https://resource-cms.springernature.com/springer-cms/rest/v1/content/20568/data/v8"> LaTeX template </a>available respectively in MS word (.doc).
          The guidelines given here may help you to prepare the manuscript. You are advised to go through Manuscript Guidelines and Key Style Points provided by Springer for a flawless representation of your work in the article. These templates and guidelines can also be found in publisher's homepage (link here) by clicking on 'Instructions for Authors' section
          The articles should be own work of the authors. If any work is referred from others (or some other work by the author), proper acknowledgement should be given. Plagiarism of any type, if detected, will lead to rejection of the articles anytime.
        </p>

        <hr>
        <h5 style="color: black;">Submitting for Review</h5>
        <p>
          Create / sign up for an Easychair account if you do not have one.
          Fill proper metadata of the article in Easychair as they exist in your paper. Title, Abstract, Keywords, list of authors (in order) and their affiliation should be mentioned in Easychair while submitting.
          You will be assigned an unique paper ID of your submitted paper, which you should remember and use for any correspondence.
          You need not upload editable source files ( .doc or .docx or LaTeX files) for review. Submit single PDF files only. If your article is selected, you will later be asked for the source files.
          Follow the link here and submit your article with properly mentioning article title, authors names and other details that will be asked. Offline submission (through e-mail / through submitting postal hard copy of article) will be subjected to outright rejection without any consideration.
          DO NOT submit multiple copies of same article, which will cause rejection. Any revision / uploading a new version / updating author information can be done on a submission through Easychair.
        </p>
        <hr>

        <h5 style="color: black;">After Acceptance</h5>
        <p>
          <h6 style="color: black;"><b>Preparing Camera Ready Paper:</b></h6>

          The final camera-ready copy of the papers must be in Springer format with a length of maximum 10 pages. Over-length charges will apply for each extra page beyond 6 pages. However, it is desired that maximum number of pages in an article should not exceed 10 pages in any circumstance
        </p>
        <p>
          <h6 style="color: black;"><b>Paying Registration Fee:</b></h6>

          Calculate the registration fee according to your page length and type of authorship as directed in REGISTRATION page and make payment using Foreign Telegraphic Transfer or Direct Transfer or NEFT Transfer or Wire transfer (preferable). Do not forget to keep the pay-in-slip or online payment receipt. You need the scanned copy of it to complete next steps.
        </p>
        <p>
          <h6 style="color: black;"><b>Filling up of the Registration Form:</b></h6>

          Click here for the MS Word Format. (Will be updated soon...)
        </p>
        <p>
          <h6 style="color: black;"><b>Filling up of the Consent to Publish Form:</b></h6>

          Click here for publish form. (Will be updated soon...)
        </p>
        <p>
          <span >Mailing the following items in .zip / .rar format to: icacii@cvsr.ac.in</span><br>
          Step 1: The Camera-ready Article source files, in MS Word format & PDF.<br>
          Step 2: Scanned copy of filled in Registration Form<br>
          Step 3: Scanned copy of filled in Consent to Publish Form<br>
          Step 4: Proof of studentship (valid on 20th and 21st December, 2019) for availing Student Registration (if applicable) signed by head of the department / course coordinator / registrar / director / principal.<br>
          Step 5: Scan of registration fee pay-in-slip/voucher of online transfer payable to ICACII-2019. <br>
        </p>
      </div>


      <div class="tab-pane fade pl-4 pr-4 pt-0" id="paperSubmission" role="tabpanel" aria-labelledby="paperSubmission">
          <p style="font-family: 'Lato', sans-serif;">Submissions must include title, abstract, keywords, author and affiliation with email address. Please double-check the paper size in your page setup according to Springer format. Authors of accepted papers will be allowed to resubmit camera-ready papers after incorporating reviewers’ comments within the stipulated deadline. Authors of accepted papers have to register for the conference and personally present their paper(s) in the Conference 
      </p><br>
      <center><a href="https://easychair.org/conferences/?conf=icacii2019" target="_blank" class="btn btn-success" title="Paper submission" style="border-radius: 10px;">Submit Paper</a></center>

      <br>  <br>  
      </div>
    </div>
  </div>

</div>
</div>




<?php $this->load->view('common/footer.php');?>

