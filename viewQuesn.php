<?php
  include 'config.php';
  include 'header.php';


  $usn = $_SESSION['usn'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/viewQsns.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="instructions">
    <ol>
      <li>
        Choose the relevant semester and subject.
      </li>
      <li>
        Be clear with the questions you are asking,let the content be crisp and clear.
      </li>
      <li>
        Simultaneously you can answer the questions,but make sure to check the checkbox before you click on submit.
      </li>
    </ol>
  </div>
          
  <div class="ssem">
  <table>
    <!-- SELECTING SEMESTER -->
    <tr>
      <td>
      <label for="semester">Choose the semester</label>
      </td>
      <td>
      <select name="semester" id="semester" >
      <?php
        $query = 'SELECT DISTINCT semNo FROM sem_sub ORDER BY semNo';
        $result = mysqli_query($conn,$query);
        if(!isset($row['semNo'])){
          echo '<option>Select Semester</option>';
        }
      ?>
      </select>
      </td>
    </tr>

    <!-- SELECTING SUBJECT subCode -->

    <tr>
      <td>
      <label for="subject">Choose the subject</label>
      </td>
      <td>
        <select name="subject" id="subject" >
        <?php
          echo '<option value = "">Select Subject</option>';
        ?>
        </select>
      </td>
    </tr>
  </table>
  
  

  <br>
        
  
  
  </div>
        <!-- DISPLAYING QUESTIONS -->
  
  <div  id = "questions">
    
  </div>
  
  <?php
    include 'footer.php';
  ?>
  <script src="qsn.js"></script>

</body>
</html>