<?php
  include "config.php";
  include "header.php";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ask Question</title>
  <link rel="stylesheet" href="css/askQsn.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>


<body>

  <main>
    <div class="displayHead">

    
    <div class="instructions">
      <h1>Instructions</h1>
      <ol>
        <li>Make sure you select appropriate semester and subject</li>
        <li>Ask your questions clearly so that everyone can understand</li>
        <li>Never hurt anyone's feeling by posting inappropriate</li>
        <li>Kindly use this forum for academic purposes only</li>
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

    

    <div class="question-InputBox">
      <form action="qSubmitted.php" method="POST">
        <div class="input-Header">
          <table class="selectionTable">
            <tr>
              <!-- SELECTING SEMESTER -->
              <td>
                <p>SELECT SEMESTER</p>
              </td>
              <td>
              <div class="form-group">
                <select name="semester" class="form-control semSel" onchange="fetchSubject(this.value)" id="semester">
                  <?php
                    $query = 'SELECT DISTINCT semNo FROM sem_sub ORDER BY semNo';
                    $result = mysqli_query($conn,$query);
                    if(!isset($row['semNo'])){
                      echo '<option>Select Semester</option>';
                    }
                                
                      while($row = mysqli_fetch_assoc($result)){
                        foreach($row as $value){
                          echo '<option value = "' .$row['semNo'] . '">';
                          echo $row['semNo'] . '</option>';
                        }
                      }
                  ?>
                </select>
              </div>
              </td>
            </tr>

            <!-- SELECTING SUBJECT -->
            <tr>
              <td>
              <p>SELECT SUBJECT</p>
              </td>
              <td>
              <div class="form-group">
                <select name="qsubcode" class="form-control subSel" id="subject">
                  
                </select>
              </div>
              </td>
            </tr>
          </table>

          <div class="inputBox">
            <textarea name="qtext" id="" cols="100" rows="7" class="qtext"></textarea>
          </div>
        </div>

        <div class="submitDiv">
        <input type="submit" value=" Submit " class="submitBtn" name="qSubmit">  
        </div>
        
      </form>
      
    </div>
    
  </main>

  <?php
    include 'footer.php';
  ?>
  <script src="qsn.js"></script>
</body>
</html>