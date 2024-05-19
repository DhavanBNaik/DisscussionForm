<?php
  include 'config.php';
  session_start();
  $usn = $_SESSION['usn'];
  $name = $_SESSION['name'];
  

  if($_POST['type'] == ""){
    $query = 'SELECT DISTINCT semNo FROM  sem_sub ORDER BY semNo';
    $result = mysqli_query($conn,$query);
  
    $str = "";
    
    while($row = mysqli_fetch_assoc($result)){
      $str .= "<option value = '{$row['semNo']}'>{$row['semNo']}</option>";
    }
  }
  else if($_POST['type'] == "subjectData"){
    $query = "SELECT * FROM sem_sub WHERE semNo = {$_POST['id']}";
    $result = mysqli_query($conn,$query);

    $str = "";
    
    while($row = mysqli_fetch_assoc($result)){
      $str .= "<option value = '{$row['subCode']}'>{$row['subName']}</option>";
    }
  }


      // DISPLAYING QUESTION

  else if($_POST['type'] == "questionData"){
    
    $query = "SELECT * FROM question WHERE qsubCode = '{$_POST['id']}' ORDER BY qid DESC";
    $result = mysqli_query($conn,$query);

    $str = "";
    
    while($row = mysqli_fetch_assoc($result)){
      $str .= "<div class='question'>";
      $str .= "<p class='questionClass' value = '{$row['qid']}'>{$row['qtext']}</p>";
      $str .= "<p class='qasked' value = '{$row['qusn']}'>Asked by @{$row['qusn']}</p>";
      $str .= "<button class='viewansbtn'>Display / Hide Answers</button>";
      $str .= "<form action='submitAns.php' method='POST'>";
      
      $str .= "<p class='answerlabel'><input  name='qid' value='{$row['qid']}' type='checkbox'> Are you willing to answer<br></p>";
      $str .= "<button class='qbtn' type='submit'>Submit</button>";
      $str .= "</form>";
      $str .= "</div>";

      $iquery = "SELECT * FROM answer WHERE aqid= '{$row['qid']}'";
      $iresult = mysqli_query($conn,$iquery);
      
      $istr = "";
      
      while($irow = mysqli_fetch_assoc($iresult)){
        $istr .= "<div class='answers'>";
        $istr .= "<p class='answerClass' value = '{$irow['aid']}'>{$irow['atext']}</p>";
        $istr .= "<p class='answered' value = '{$irow['ausn']}'>Answered by @{$irow['ausn']}</p>";
        $istr .= "</div>";
      }  
      $str .= $istr;
    }

  }

  echo $str;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <script>
    $(".viewansbtn").click(function(){
      $(".answers").toggle();

    });
  </script>
</body>
</html>