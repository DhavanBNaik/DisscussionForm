<?php
  include 'config.php';
  session_start();
  error_reporting(0);

  if(isset($_POST['update_profile'])){
    $update_usn = mysqli_real_escape_string($conn,$_POST['update_usn']);
    $update_name = mysqli_real_escape_string($conn,$_POST['update_user_name']);
    $update_sem = mysqli_real_escape_string($conn,$_POST['update_sem']);
    $update_dept = mysqli_real_escape_string($conn,$_POST['update_dept']);

    mysqli_query($conn,"UPDATE `user_form` SET name ='$update_name',
      usn ='$update_usn',
      sem ='$update_sem',
      dept ='$update_dept'
      WHERE id = '$usn'") or die('query failed');
      $message1[] = 'Information updated successfully';
  }

  if(isset($_POST['change_pass'])){
    $old_pass = $_POST['old_pass'];
    $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
    $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
    $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

    if(!empty($update_pass) || !empty($new_pass) ||!empty($confirm_pass)){
      if($update_pass != $old_pass){
        $message[] = 'Old password do not match';
      }
      elseif($new_pass != $confirm_pass){
        $message[] = 'New Passwords do not match';
      }
      else{
        mysqli_query($conn,"UPDATE `user_form` SET password ='$confirm_pass', WHERE id = '$usn'") or die('query failed');
        $message[] = 'Password Updated Succesfully';
      }
    }
  }

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <script src="https://kit.fontawesome.com/1dd17ed2b4.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <?php
       $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE usn = '$usn'") or die('query failed');
       if(mysqli_num_rows($select) > 0){
          $fetch = mysqli_fetch_assoc($select);
       }
      ?>
    <form action="" method="post" enctype ="multipart/form-data">
    <a href=home.php>
    <header>BMS DISCUSS</header></a>
    <input type="radio" name="slider" checked id="dash">
    <input type="radio" name="slider" id="profile">
    <input type="radio" name="slider" id="sett">
    <input type="radio" name="slider" id="priv">
    <input type="radio" name="slider" id="signo">
    <nav>
      <label for="dash" class="dash"><i class="fa-solid fa-clipboard"></i>Dashboard</label>
      <label for="profile" class="profile"><i class="fa-solid fa-user"></i>Profile</label>
      <label for="sett" class="sett"><i class="fa-solid fa-gear"></i>Settings</label>
      <label for="priv" class="priv"><i class="fa-solid fa-user-shield"></i>Privacy</label>
      <label for="signo" class="signo"><i class="fa-solid fa-right-from-bracket"></i>Sign out</label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="content content-1">
        <div class="title">DASHBOARD</div>
        <div class="cardox">
          <div class="card">
            <div>
              <div class="number">0</div>
              <div class="cardname">Views</div>
            </div>
            <div class="iconbx"><i class="fa-regular fa-eye"></i></div>
          </div>
          <div class="card">
            <div>
              <div class="number">0</div>
              <div class="cardname">Questions Answered</div>
            </div>
            <div class="iconbx"><i class="fa-solid fa-check-double"></i></div>
          </div>
          <div class="card">
            <div>
              <div class="number">0</div>
              <div class="cardname">Questions Asked</div>
            </div>
            <div class="iconbx"><i class="fa-regular fa-comment"></i></div>
          </div>
          <div class="card">
            <div>
              <div class="number">0</div>
              <div class="cardname">Points</div>
            </div>
            <div class="iconbx"><i class="fa-solid fa-award"></i></div>
          </div>
        </div>
        <div class="title">RECENT ANSWERED QUESTION
        </div>
        <div class="cardbox">
          <div class="card">
            <div>
              <div class="cardname">----</div>
            </div>
          </div>
          <br><div class="card">
            <div>
              <div class="cardname">-------</div>
            </div>
          </div>
        </div>
      </div>
      <div class="content content-2">
        <div class="title">PERSONAL INFORMATION</div><br>
        <?php
        if(isset($message1)){
           foreach($message1 as $message1){
              echo '<div class="message">'.$message1.'</div>';
           }
         }
        ?>
        <h2>USN</h2>
        <input type="text" name ="update_usn" value="<?php echo $fetch['usn'] ?>"
        class="input">
        <h2>Username</h2>
        <input type="text" name ="update_user_name" class="input" value="<?php echo $fetch['name'] ?>">
        <h2>Department</h2>
        <input type="text" name ="update_dept" class="input" value="<?php echo $fetch['dept'] ?>">
        <h2>Semester</h2>
        <input type="text" name ="update_sem" class="input" value="<?php echo $fetch['sem'] ?>">
        <br><input type="submit" name="update_profile" value="Update" class="btn">

      </div>
      <div class="content content-3">
        <div class="title">SETTINGS</div><br>
        <?php
        if(isset($message)){
           foreach($message as $message){
              echo '<div class="message">'.$message.'</div>';
           }
        }
        ?>
        <h2>Email</h2>
        <input type="text" name=email class="input" value="<?php echo $fetch['email'] ?>">
        <br><h2>Change Password</h2>
        <input type="hidden" name ="old_pass"  class="input" value="<?php echo $fetch['password'] ?>">
        <h3>Old Password</h3>
        <input type="password" name ="update_pass" placeholder="Enter Previous Password" class="input">
        <h3>New Password</h3>
        <input type="password" name ="new_pass" placeholder="Enter New Password" class="input">
        <h3>Confirm Password</h3>
        <input type="password" name ="confirm_pass" placeholder="Confirm Password" class="input">
        <br><input type="submit" name="change_pass" value="register now" class="btn">


      </div>
      <div class="content content-4">
        <div class="title">PRIVACY</div>
        <br><h2>Manage Notifications</h2>
        <button class ="btn">email notifications</button>
        <br><button class ="btn">phone notifications</button>
        <br>
        <br><h2>appeareance</h2>
        <button class ="btn">Hide full name</button>
        <br><button class ="btn">make account private</button>
        <br><button class ="btn">make account public</button>


      </div>
      <div class="content content-5">
        <div class="title">Do You wish to sign out?</div>
        <a href="home.php?logout=<?php echo $usn; ?>" class="btn">yes</a>&nbsp<a href="home.php" class="btn">no</a>
      </div>
    </section>


        </form>
  </div>


</body>
</html>
