<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace-it</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png" type="image/icon type">
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <li class="nav-item">
         <img src="logo.png" width="25px" height="25px" alt="Company Logo">
     </li>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">ACE-IT</a>
   
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>
    </ul>
    <?php
    if(isset($_SESSION['username'])){
          echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="window.location=\'logout.php\'">Log out</button>';
    }
    else{
      echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="window.location=\'signup.php\'">Sign Up</button><br><button class="btn btn-outline-success mx-2 my-sm-0" type="submit"  onclick="window.location=\'login.php\'">Log In</button>';

    }
    ?>
  </div>
</nav>


<section class="r1 container">
<h1> Ace-It welcomes you to the land of Evaluation! </h1><br>
<br><br>

<div class="col-1">

<video width="600px" height="500px" controls>
  <source src="intro1.mp4" type="video/mp4">
</video>
</div><div class="col-2">
<?php
    if(isset($_SESSION['username'])){
      echo '<a href="test.php">Start the test</a>';
      }
?>
<h2> Ace your exams with us!</h2><br>
<p class="sett">Stay positive, work hard, make it happen. </p>
</div>



</section>
 <img src="3.png" class="d-block w-100" alt="Third"><br>
<img src="4.png" class="d-block w-100" alt="Fourth"><br>

  <!-- Site footer -->
    <footer class="site-footer">
     
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Team Web Trojans</a>.
            </p>
          </div>

        </div>
      </div>
</footer>
    <script type="text/javascript">
      /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
      (function(d, m){
        var kommunicateSettings = {"appId":"24008715841954f2cf0a1d21c5d7c9df1","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
      })(document, window.kommunicate || {});
  </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
