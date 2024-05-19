<?php
  include "config.php";
  include "header.php";

  
  if(!isset($_SESSION['name'])){
    header("Location: login.html");
  }

  
  $query = "INSERT INTO question 
            (qid,qsubcode,qtext,qusn)
            VALUES
            ('{}',
              '{$_POST['qsubcode']}',
              '{$_POST['qtext']}',
              '{$_SESSION['usn']}'
            )";
  $result = mysqli_query($conn,$query) or die('execution failed');
  if(isset($result)){
    echo '<h2 style="text-align:center;   Verdana, Geneva, Tahoma, sans-serif;">Hurray! your question is successfully inserted</h2>';
    echo '<h2 style="font-size:365px;text-align:center;">&#128512;</h2>';
    
  }
  include 'footer.php';
?>