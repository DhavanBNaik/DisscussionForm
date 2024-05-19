<?php
  include 'config.php';
  include 'header.php';
  
  
  
  $qid = $_POST['qid'];
  
  $query = "SELECT qsubcode FROM question WHERE qid={$qid}";
  $result = mysqli_query($conn,$query);
  $usn = $_SESSION['usn'];
  
  while($row = mysqli_fetch_assoc($result)){
    $subcode = $row['qsubcode'];
  }

  if(isset($_POST['qSubmit'])){
    $atext = $_POST['answertext'];
    $query = "INSERT INTO answer (atext,aqid,ausn,asubcode)
              VALUES ('{$atext}',$qid,'{$usn}','{$subcode}')";
    $result = mysqli_query($conn,$query) or die('Error');

    if(isset($result)){
      $message[] = 'Answer Submitted successfully';
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Answer Question</title>
  <link rel="stylesheet" href="css/askQsn.css">
</head>
<body>
  <div class="displayHead">
    <div class="instructions">
      <h1>Instructions</h1>
      <ol>
        <li>
          Choose the relevant semester and subject.
        </li>
        <li>
          Be clear with the questions you are asking,let the content be crisp and clear.
        </li>
        <li>
          Simultaneously you can answer the questions.
        </li>
      </ol>
    </div>

    <div class="dashboard">
      <h2>Dashboard</h2>
      <table class="dashboardTable">
        <tr>
          <td>Total No of Users</td>
          <td class="dashboardData"><b>
            <?php 
              $query = "SELECT COUNT(*) FROM user_form";
              $result = mysqli_query($conn,$query);
              $value = mysqli_fetch_row(($result));
              echo $value[0];
            ?></b>
          </td>
        </tr>
        <tr>
          <td>Total No of Questions</td>
          <td class="dashboardData"><b>
            <?php 
              $query = "SELECT COUNT(*) FROM question";
              $result = mysqli_query($conn,$query);
              $value = mysqli_fetch_row(($result));
              echo $value[0];
            ?></b>
          </td>
        </tr>

        <tr>
          <td>Total No of Answers</td>
          <td class="dashboardData"><b>
            <?php 
              $query = "SELECT COUNT(*) FROM answer";
              $result = mysqli_query($conn,$query);
              $value = mysqli_fetch_row(($result));
              echo $value[0];
            ?></b>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <div class="inputbox">
    <?php
    if(isset($message)){
      foreach($message as $message){
        echo '<div class="message">'.$message.'</div>';
      }
    }
    ?>

    <form action="submitAns.php" method="POST">

    
    <div class="inputBox answerInputBox">
      <textarea  id="" cols="100" rows="7" class="qtext" name="answertext"></textarea>
    </div>

    <div class="checkAns">
    <?php
      echo "<input type='checkbox' name='qid' value = '{$qid}'>Are you sure to submit";
    ?>
    </div>
    
    <div class="submitDiv">
      <input type="submit" value=" Submit " class="submitBtn" name="qSubmit">  
    </div>
    </form>
  </div>

  <?php
    include 'footer.php';
  ?>
</body>
</html>