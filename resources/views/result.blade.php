<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REGULUS</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  
  <!-- Custom fonts for this template -->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <!-- <link href="css/agency.min.css" rel="stylesheet"> -->
  <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">Happy Child</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
         
          <!--<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-warning"  href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-warning" href="#services">Services</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-warning" href="#contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-warning" href="#signin">Sign in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="color:black;">Results</div>
        <h2 style="color:black;">Your score is {{$total}}</h2><br>   
        <div class="table-responsive">
        <table class="table table-dark">
            <col width="150">
                <tr>
                    <th>If your score is...</th>
                    <th>Then..</th>
                </tr>

                <tr>
                    <td>0-2:</td>
                    <td style="text-align:left;">Low Risk: If child is younger than 24 months, screen again after second birthday. No further action required unless surveillance indicates risk for ASD. </td>
                </tr>
                <tr>
                    <td>3-7:</td>
                    <td style="text-align:left;">Medium Risk: Administer the Follow-Up Follow-Up (second stage of M-CHAT-R/F) to get additional information about at-risk responses. If M-CHAT-R/F score remains at 2 or higher, the child has screened positive. Action required: refer child for diagnostic evaluation and eligibility evaluation for early intervention. If score on Follow-Up is 0-1, child has screened negative. No further action required unless surveillance indicates risk for ASD. Child should be rescreened at future well-child visits.<br> <a href="#">Try our app</a> or visit our <a href="/resources">Resources Page</a> </td>
                </tr>
                <tr>
                    <td>8-20:</td>
                    <td style="text-align:left;">High Risk: It is acceptable to bypass the Follow-Up and refer immediately for diagnostic evaluation and eligibility evaluation for early intervention. </td>
                </tr>
        </table>
        </div>
    </div>
    </div>

  
 

  <!-- Bootstrap core JavaScript -->
  
  <script type="text/javascript" src="{{URL::asset('jquery/jquery.min.js')}}"></script>


  <script type="text/javascript" src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->

  <script type="text/javascript" src="{{URL::asset('js/jquery.easing.min.js')}}"></script>

  
  <!-- Contact form JavaScript -->
  <script type="text/javascript" src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>


  <!-- <script src="js/contact_me.js"></script> -->
  <script type="text/javascript" src="{{URL::asset('js/contact_me.js')}}"></script>


  <!-- Custom scripts for this template -->
  <script type="text/javascript" src="{{URL::asset('js/agency.min.js')}}"></script>


</body>

</html>
