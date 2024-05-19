<?php

include 'config.php';
session_start();

if(isset($_SESSION['name'])){
   header('Location:welcomed.php');
}


if(isset($_POST['submit'])){
   
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $usn = $_POST['usn'];
   
   $query = "SELECT * FROM user_form WHERE usn = '$usn' AND email = '$email' AND password='$password'";
   $result = mysqli_query($conn,$query);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);

      $_SESSION['name'] = $row['name'];
      $_SESSION['usn'] = $row['usn'];
      header('Location:welcomed.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="text" name="usn" placeholder="enter usn" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <button name="submit"  class="btn">Login</button>
      <p>don't have an account? <a href="register.php">regiser now</a></p>
   </form>

</div>

</body>
</html>