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
        <div class="intro-lead-in" style="color:black;">FORM</div>

        <form action="/form/submit" method="post">
        {{csrf_field()}}
          <table class="table table-dark">
            <thead>
              <tr>
                <th class="question_index"></th><th class="gap"></th>
                <th >Yes</th>
                <th >No</th>
                <th class="last_header"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="question_index" >1</td>
                <td class="gap" style="text-align:left;" >If you point at something across the room, does your child look at it?(For example, if you point at a toy or an animal, does your child look at the toy or animal?)</td>
                <td  ><input name="item_1" type="radio" required value="0" /></td>
                <td  ><input name="item_1" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >2</td><td class="gap" style="text-align:left;">Have you ever wondered if your child might be deaf?</td>
                <td><input name="item_2" type="radio" required value="1" /></td><td  >
                <input name="item_2" type="radio" required value="0" /></td>
              </tr>
              <tr>
                <td class="question_index" >3</td>
                <td class="gap" style="text-align:left;">Does your child play pretend or make-believe?(For example, pretend to drink from an empty cup, pretend to talk on a phone, or pretend to feed a doll or stuffed animal)</td>
                <td  ><input name="item_3" type="radio" required value="0" /></td>
                <td  ><input name="item_3" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >4</td>
                <td class="gap" style="text-align:left;">Does your child like climbing on things?(For example, furniture, playground equipment, or stairs)</td>
                <td  ><input name="item_4" type="radio" required value="0" /></td>
                <td  ><input name="item_4" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >5</td>
                <td class="gap" style="text-align:left;">Does your child make unusual finger movements near his or her eyes?(For example, does your child wiggle his or her fingers close to his or her eyes?)</td>
                <td  ><input name="item_5" type="radio" required value="1" /></td>
                <td  ><input name="item_5" type="radio" required value="0" /></td>
              </tr>
              <tr>
                <td class="question_index" >6</td>
                <td class="gap" style="text-align:left;">Does your child point with one finger to ask for something or to get help? (For example, pointing to a snack or toy that is out of reach?)</td>
                <td  ><input name="item_6" type="radio" required value="0" /></td>
                <td  ><input name="item_6" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >7</td>
                <td class="gap" style="text-align:left;">Does your child point with one finger to show you something interesting? (For example, pointing to an airplane in the sky or a big truck in the road)</td>
                <td  ><input name="item_7" type="radio" required value="0" /></td>
                <td  ><input name="item_7" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >8</td>
                <td class="gap" style="text-align:left;">Is your child interested in other children? (For example, does your child watch other children, smile at them, or go to them?)</td>
                <td  ><input name="item_8" type="radio" required value="0" /></td>
                <td  ><input name="item_8" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >9</td>
                <td class="gap" style="text-align:left;">Does your child show you things by bringing them to you or holding them up for you to see – not to get help, but just to share?(For example, showing you a flower, a stuffed animal, or a toy truck)</td>
                <td  ><input name="item_9" type="radio" required value="0" /></td
                ><td  ><input name="item_9" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >10</td>
                <td class="gap" style="text-align:left;">Does your child respond when you call his or her name?(For example, does he or she look up, talk or babble, or stop what he or she is doing when you call his or her name?)</td>
                <td  ><input name="item_10" type="radio" required value="0" /></td>
                <td  ><input name="item_10" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >11</td>
                <td class="gap" style="text-align:left;">When you smile at your child, does he or she smile back at you?</td>
                <td  ><input name="item_11" type="radio" required value="0" /></td>
                <td  ><input name="item_11" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >12</td>
                <td class="gap" style="text-align:left;">Does your child get upset by everyday noises?(For example, a vacuum cleaner or loud music)</td>
                <td  ><input name="item_12" type="radio" required value="1" /></td>
                <td  ><input name="item_12" type="radio" required value="0" /></td>
              </tr>
              <tr>
                <td class="question_index" >13</td>
                <td class="gap" style="text-align:left;">Does your child walk?</td>
                <td  ><input name="item_13" type="radio" required value="0" /></td>
                <td  ><input name="item_13" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >14</td>
                <td class="gap" style="text-align:left;">Does your child look you in the eye when you are talking to him or her, playing with him or her, or dressing him or her?</td>
                <td  ><input name="item_14" type="radio" required value="0" /></td>
                <td  ><input name="item_14" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >15</td>
                <td class="gap" style="text-align:left;">Does your child try to copy what you do?(For example, wave bye-bye, clap, or make a funny noise when you do)</td>
                <td  ><input name="item_15" type="radio" required value="0" /></td>
                <td  ><input name="item_15" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >16</td>
                <td class="gap" style="text-align:left;">If you turn your head to look at something, does your child look around to see what you are looking at?</td>
                <td  ><input name="item_16" type="radio" required value="0" /></td>
                <td  ><input name="item_16" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >17</td>
                <td class="gap" style="text-align:left;">Does your child try to get you to watch him or her? (For example, does your child look at you for praise, or say “look” or “watch me”)</td>
                <td  ><input name="item_17" type="radio" required value="0" /></td>
                <td  ><input name="item_17" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >18</td>
                <td class="gap" style="text-align:left;">Does your child understand when you tell him or her to do something? (For example, if you don’t point, can your child understand “put the book on the chair” or “bring me the blanket”?)</td>
                <td  ><input name="item_18" type="radio" required value="0" /></td>
                <td  ><input name="item_18" type="radio" required value="1" /></td>
              </tr>
              <tr>
                <td class="question_index" >19</td>
                <td class="gap" style="text-align:left;">If something new happens, does your child look at your face to see how you feel about it? (For example, if he or she hears a strange or funny noise, or sees a new toy, will he or she look at your face?)</td>
                <td  ><input name="item_19" type="radio" required value="0" /></td><td  ><input name="item_19" type="radio" required value="1" />
                </td>
              </tr>
              <tr>
                <td class="question_index" >20</td>
                <td class="gap" style="text-align:left;">Does your child like movement activities?(For example, being swung or bounced on your knee)</td>
                <td  ><input name="item_20" type="radio" required value="0" /></td>
                <td  ><input name="item_20" type="radio" required value="1" /></td>
              </tr>
              <tr>
              </tr>
            </tbody>
            </table>&nbsp;
            <div class="center_title"> <input class="btn btn-primary" name="submit" type="submit" value="     Score My Autism Quiz"/></div>
          </form>















      
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
            <img class="card-img-top mx-auto d-block" src="{{ asset('img/2.jpg')}}" align="center" alt="Card image cap" style="width: 150px; height:125px;"><br>

          </span>
          <h4 class="service-heading">Make awareness</h4>
          <p class="text-muted">Happy Child helps community to make awareness about autism.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
            <img class="card-img-top mx-auto d-block" src="{{ asset('img/s1.jpg')}}" align="center" alt="Card image cap" style="width: 150px; height:125px;"><br>
            <!-- <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> -->
          </span>
          <h4 class="service-heading">Children activities</h4>
          <p class="text-muted">We provide simple activities that helps to improve child's brain</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
          <img class="card-img-top mx-auto d-block" src="{{ asset('img/s2.jpg')}}" align="center" alt="Card image cap" style="width: 150px; height:125px;"><br>

            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
            <!-- <i class="fas fa-lock fa-stack-1x fa-inverse"></i> -->
          </span>
          <h4 class="service-heading">To know about your child</h4>
          <p class="text-muted">Parents can themself evaluate their child's behaviour and get to know if there child has autism.</p>
        </div>
      </div>
    </div>
  </section>

 



  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Activities for Children</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <!-- <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt=""> -->
            <img class="img-fluid" src="img/portfolio/s2.jpg" alt="">

          </a>
          <div class="portfolio-caption">
            <h4>Threads</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/s3.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Explore</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/s4.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Finish</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        
  </section>

  
 

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
