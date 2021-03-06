<?php 

if (!empty($_POST)) {
  if (!empty($_POST['name']) && !empty($_POST['company']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $name         = $_POST['name'];
    $company      = $_POST['company'];
    $contactEmail = $_POST['email'];
    $message      = $_POST['message'];
    $ip           = $_SERVER['REMOTE_ADDR'];
    $to           = 'wesdowney@gmail.com'; 
    $subject      = 'Message from Portfolio';
    $body         = "From: $name\n Company: $company\n E-Mail: $contactEmail\n Message: $message\n Sent by IP: $ip";
    $from         = 'Wes Downey Portfolio';

    if (mail ($to, $subject, $body, $from)) {
      echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Message Sent!</strong> Thank you for reaching out to me. I look forward to talking to you soon.</div>";
    } else {
      echo "<div class=\"alert alert-danger\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Sorry</strong> There was an error sending your message. </div>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wes Downey Web Development Portfolio</title>

    <!-- Bootstrap v4.0.0-alpha.5 with Flexbot -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" /> 
    <link href="assets/css/custom.css" rel="stylesheet" /> 
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">
  <div class="row">
    <nav class="navbar navbar-light bg-faded navstyle">
      <a class="navbar-brand" href="#">Wes Downey</a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-toggleable-md" id="navbarResponsive">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>

        <ul class="nav navbar-nav float-lg-right social">
          <li class="nav-item"><a class="nav-link" href="https://www.freecodecamp.com/wesdowney" target="_blank"><i class="fa fa-lg fa-free-code-camp"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="https://github.com/WesDowney" target="_blank"><i class="fa fa-lg fa-github"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="https://codepen.io/wesdowney" target="_blank"><i class="fa fa-lg fa-codepen"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="https://twitter.com/wesdowney" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/wesdowney" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="row">
    <div class="col-xs-12 col-lg-8 jumbotron animated wobble" id="about">
      <h1 class="display-3">Hi, I'm Wes</h1>
      <p class="lead">I'm a web developer who enjoys building new things. </p>
      <hr class="my-2">
      <p>What idea are you looking to build?</p>
      <p class="lead">
        <a class="btn btn-lg btn-green" href="#contact" role="button">Contact Me</a>
      </p>
    </div>

    <div class="col-xs-12 col-lg-4">
      <img id="me" class="img-fluid img-thumbnail" src="assets/img/photo.jpg" alt="Wes Downey">
    </div>
  </div>

<!-- Portfolio Row 1 -->
  <div class="row no-bottom-margin"> 
    <h2 class="fadeInBlock bolder-headline" id="portfolio">Portfolio</h2>
    <div class="card-deck-wrapper">
      <div class="card-deck">

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/bttrboothsCallCenter.jpg" alt="BTTR Booths Call Center">
          <div class="card-block">
            <h4 class="card-title">BTTR Booths Call Center</h4>
            <p class="card-text">Form for outbound sales that saves to database. Reports are generated on another page from the data. Graphic art by <a href="http://www.td-portfolio.com" target="_blank">Timothy Derouin</a>.
            <p class="card-text"><small class="text-muted">HTML, CSS, Bootstrap, MySQL</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/incentive-admin.jpg" alt="Incentive Site Admin">
          <div class="card-block">
            <h4 class="card-title">Incentive Site Admin</h4>
            <p class="card-text">Admin panel for loading advertisers and offers into a custom incentive site.</p>
            <p class="card-text"><small class="text-muted">PHP, MySQL, HTML, CSS, Bootstrap</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/publisherrevEmail.jpg" alt="Email Templates">
          <div class="card-block">
            <h4 class="card-title">PublisherRev Email Template</h4>
            <p class="card-text">Email template for sending offer updates to affiliates.
            <p class="card-text"><small class="text-muted">MJML Framework, Photoshop</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/offerImporter.jpg" alt="Offer Importer">
          <div class="card-block">
            <h4 class="card-title">Offer Importer</h4>
            <p class="card-text">Admin interface to pull affiliate offers from an advertiser on HasOffers to your HasOffers platfrom via API. 
            <p class="card-text"><small class="text-muted">PHP, MySQL, HTML, CSS, Bootstrap, HasOffers API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

      </div>
    </div>
  </div>

<!-- Portfolio Row 2 -->

  <div class="row no-bottom-margin">
    <div class="card-deck-wrapper">
      <div class="card-deck">

        <div class="card fadeInBlock">
          <img class="card-img-top" src="assets/img/offerChecker.jpg" alt="Offer Checker">
          <div class="card-block">
            <h4 class="card-title">Offer Checker</h4>
            <p class="card-text">Automatically checks advertiser API to see if offers are live and pauses them if they aren't.</p>
            <p class="card-text"><small class="text-muted">PHP, MySQL, HasOffers API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top" src="assets/img/advertiserAPI.jpg" alt="Advertiser APIs">
          <div class="card-block">
            <h4 class="card-title">Advertiser Offer APIs</h4>
            <p class="card-text">Automatically import all offers from a custom advertiser API, remove duplicates, format, add app store icons, update payouts and pause as needed.</p>
            <p class="card-text"><small class="text-muted">PHP, Custom Advertiser APIs, HasOffers API, iTunes API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/clickTracker.jpg" alt="Click Manager">
          <div class="card-block">
            <h4 class="card-title">Click Tracker</h4>
            <p class="card-text">Simple click tracker to save some details about a click to a database and redirect the user to the appropriate offer.</p>
            <p class="card-text"><small class="text-muted">PHP, MySQL</small><br><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled" target="_blank">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/mobileDuplicate.jpg" alt="Mobile Duplicate Checker">
          <div class="card-block">
            <h4 class="card-title">Mobile Duplicate Checker</h4>
            <p class="card-text">Algorithm that determines if an offer is a duplicate based on the unique combination of app store ID, conversion point, country targeting, allowed promotions and payout. </p>
            <p class="card-text"><small class="text-muted">PHP, HasOffers API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled" >Private Project</a>
          </div>
        </div>

      </div>
    </div>
  </div>

<!-- Portfolio Row 3 -->

  <div class="row no-bottom-margin">
    <div class="card-deck-wrapper"> 
      <div class="card-deck">

        <div class="card fadeInBlock">
          <img class="card-img-top" src="assets/img/elonmusk.jpg" alt="Elon Musk">
          <div class="card-block">
            <h4 class="card-title">Elon Musk Tribute</h4>
            <p class="card-text">A timeline of Elon Musk's life and businesses.</p>
            <p class="card-text"><small class="text-muted">HTML, CSS, BootStrap</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="http://codepen.io/wesdowney/pen/Pbepwj" class="btn btn-green btn-block" target="_blank">View</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/voluumToHasOffers.jpg" alt="Voluum to HasOffers">
          <div class="card-block">
            <h4 class="card-title">Voluum 2 HasOffers</h4>
            <p class="card-text">A script to send clicks through Voluum while conversions still post to HasOffers for a <strong>20X</strong> click cost savings.</p>
            <p class="card-text"><small class="text-muted">PHP, Voluum, HasOffers API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled" >Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/capManager.jpg" alt="Cap Manager">
          <div class="card-block">
            <h4 class="card-title">Cap Manager</h4>
            <p class="card-text">Admin interface to manage ad budgets. When one daily budget is filled, a similar ad replaces it.</p>
            <p class="card-text"><small class="text-muted">PHP, MySQL, HTML, Bootstrap, HasOffers API</small><br><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled" target="_blank">Private Project</a>
          </div>
        </div>

        <div class="card fadeInBlock">
          <img class="card-img-top bottom-border" src="assets/img/hasoffersAPI.jpg" alt="HasOffers API Wrapper">
          <div class="card-block">
            <h4 class="card-title">HasOffers API Wrapper</h4>
            <p class="card-text">A function for interacting with HasOffers API including a pause and retry if API limit reached and error handling.</p>
            <p class="card-text"><small class="text-muted">PHP, HasOffers API</small><br><br><br></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-green btn-block disabled" >Private Project</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Contact -->

  <div class="row fadeInBlock">
    <div class="col-md-6 offset-md-3">
      <h2 class="bolder-headline" id="contact">Contact Me</h2>
      <form action="#" method="post" id="contactme">
        <div class="form-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" class="form-control " name="company" id="company" placeholder="Company" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="message" id="message" placeholder="Message ..."></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6LeSChYUAAAAAEwlk3C0X5Cju8cQ08kV92YMW-2E"></div>
        <button type="submit" class="btn btn-green btn-block">Submit</button>
      </form>
    </div>
  </div>

  <div class="row fadeInBlock" id="footer">
    <p>&copy; 2017 Wes Downey <br/> Made with <i class="fa fa-lg fa-heart"></i>, <i class="fa fa-lg fa-coffee"></i> and <i class="fa fa-lg fa-music"></i>
  </div>

</div> <!-- container -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script src="assets/js/index.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90145405-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>