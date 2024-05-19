<?php
  include 'config.php';
  include_once 'header.php';
  session_start();

  $usn = $_SESSION['usn'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  <div class="navbar">
    
    <nav>
      <h2>BMS DISCUSSION FORUM</h2>
      <div class="links">
        <a href="welcomed.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="viewQuesn.php">View Questions</a>
        <a href="askQsn.php">Ask Questions</a>
        <a href="contactus.php">Contact Us</a>
        <a href="logout.php">Logout</a>
      </div>
      
    </nav>
  </div>
  <script src="qsn.js"></script>
</body>
</html>

