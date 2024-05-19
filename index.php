<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstarp  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/3ee3faddbe.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Syling -->
  <link rel="stylesheet" href="home.css">

  <!-- Setting Icon -->
  <link rel="icon" href="icon/question.ico">

  <!-- Footer Styling -->
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  

  <title>Welcome Page</title>
</head>

<body>

  <section class="intro">
    <nav class="navbar navbar-expand-lg">
      <div class="col-lg-6">
      <a class="navbar-brand" href="#">BMS Discussion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>

      <div class="collapse navbar-collapse col-lg-6" id="navbarNavDropdown" >
        <ul class="navbar-nav" >
          <li class="nav-item active">
            <a class="navig-link" href="#" style="color: white;margin:20px;" onmouseover="changeBack(this)">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="navig-link" href="login.php" style="color: white;margin:20px;">Profile</a>
          </li>
          <li class="nav-item">
            <a  href="login.php" class="navig-link" style="color: white;margin:20px;">View Questions</a>
          </li>
          <li class="nav-item">
            <a  href="login.php" class="navig-link" style="color: white;margin:20px;">Ask Questions</a>
          </li>
          <li class="nav-item">
            <a class="navig-link" href="login.php" style="color: white;margin:20px;">LogIn</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="left:780px">
              <a class="dropdown-item" href="register.php">Sign-Up</a>
              <a class="dropdown-item" href="login.php">Sign-In</a>
            </div>
          </li> -->
        </ul>
      </div>
    </nav>

    <div class="row title-content">
      <div class="col-lg-6 ">
        <h1 class="title-word">Welcome to<h1 class="subtitle">BMSCE DISCUSSION FORUM</h1>
        </h1>
      </div>
      <div class="col-lg-6 title-img" >
        <img src="images/bulb4.png" alt="title-image" id="bulb-img" onmouseover="changeImg(this)" onmouseleave="changeImg2(this)">
      </div>
    </div>

  </section>

  <!-- Quotes -->


  <section class="quotes">
    <div id="Motivational-Quotes" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img  src="images/quote1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img  src="images/quote2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img  src="images/quote3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev prev-button" href="#Motivational-Quotes" role="button" data-slide="prev">
        <i class="fa-solid fa-circle-left fa-xl"></i>
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next nxt-button" href="#Motivational-Quotes" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        <i class="fa-solid fa-circle-right fa-xl"></i>
      </a>
    </div>
  </section>

  <!-- WHAT WE DO , WORKING -->

  <section class="work" id="work">
    <!-- <div class="working-intro">
      Our site works on <em>3 A</em> principle
    </div> -->
    <div class="working">
      <div class="ask working-items">
        <h1 class="working-heading">ASK</h1>
        <p class="working-info">Here's a great platfrom,where you can ask your doubts and get it cleared</p>
      </div>
      <div class="analyse working-items">
        <h1 class="working-heading">ANALYSE</h1>
        <p class="working-info">View various kind of solutions and imporve your analysis</p>
      </div>
      <div class="answer working-items">
        <h1  class="working-heading">ANSWER</h1>
        <p class="working-info">Also have a look at queries of peers, and possibly be a solution to them</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <section class="footer">
    <div class="footer-div" >
      <footer class="footer-distributed">
  
        <div class="footer-left">
    
          <h3>BMS<span>Discuss</span></h3>
    
          <p class="footer-links">
            <a href="#">Home</a>
            <br>
            <a href="profile.html">Profile</a>
            <br>
            <a href="contact2.html">Contact Us</a>
          </p>
    
          <p class="footer-company-name">BMS Discuss &copy; 2022</p>
        </div>
    
        <div class="footer-center">
          <h2 class="col">Follow us on:</h2>
          <div class="icons">
            <a  href="#" class="fa-brands fa-facebook fa-3x"></a>
            <a  href="#" class="fa-brands fa-twitter fa-3x"></a>
            <a  href="#" class="fa-brands fa-instagram fa-3x"></a>
            <a  href="#" class="fa-brands fa-skype fa-3x"></a>
          </div>
        </div>
        <div class="footer-right">
    
          <p class="footer-about">
            <span1>Designed by:</span1>
            <span>Bhuvan G</span>
            <span>Chethan Kumar K</span>
            <span>Dhavan B Naik</span>
            <span>Dinesh Kumar G</span>
          </p>
          
        </div>
    
      </footer>
    </div>
    
  </section>

  <!-- Our JavaScript -->
  <script src="home.js"></script>


</body>
</html>