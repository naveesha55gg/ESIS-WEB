<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if(isset($_POST['submit'])){
      $alIndex=$_POST['alIndex'];
      $alSub1=$_POST['alSub1'];
      $subGrade1=$_POST['subGrade1'];
      $alSub2=$_POST['alSub2'];
      $subGrade2=$_POST['subGrade2'];
      $alSub3=$_POST['alSub3'];
      $subGrade3=$_POST['subGrade3'];
     

      $sql="insert in to 'education_a.l'(alIndex, alSub1,subGrade1, alSub2,subGrade2, alSub3,subGrade3)
      values('$alIndex', '$alSub1' ,'$subGrade1','$alSub2', ,'$subGrade2','$alSub3','$subGrade3')";
      $result=mysqli_query($connection,$sql);
      if($result){
        echo "Data inserted successfully";
      }else{
        die(mysqli_error($connection));
      }
}
?>
<!DOCTYPE html>
<html lang= "en" dir ="ltr">
 <head>
    <meta charset="UTF-8">
     <title> hiru </title>
       <link rel="stylesheet" href="css/jobseeker_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <!-- Top menu bar -->
  
 <ul>
 <li><a href="Reg_home.php">Home</a></li>
    <li><a href="Job_seeker.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="#Add link">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <div class="dropdown" style="float:right;">
    <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
    <div class="dropdown-content">
    <a href="#">Dashboard</a>
    <a href="#">Setting</a>
    <a onclick="checker()" href="logout.php" class="btn">logout</a>
      
    </div>
  </div>
 
  </ul>
  <script>
  function checker() {
    var result = confirm('Do you want to Log out?');
    if (result === false) {
      event.preventDefault();
    }
  }
  </script>


    <!-- Side navigation -->
    <div class="sidenav">
    <a href="job_seeker_dashbord.php">Dashboard</a>
        <a href="Personal_Data.php">Personal Data</a>
        <a href="educational data.php">Educational Data</a>
        <a href="Profisional Data.php">professional Data</a>
    </div>

    <!--bottom bar-->

  <div class="topnav">
    <a href="#home">User Agreement</a>
    <a href="#news">Brand Policy</a>
    <a href="#contact">Copyright policy</a>
    <a href="#contact">Privacy policy</a>
  </div>


     <div class="container">
        <div class="title"> Education Data</div>
        <form action="#">
            <div class="user-details">

            

                <div class="input-box">
                    <span class="details">O.L Index Number</span>
                    <input type="text" placeholder="Enter your Frist name" required >
                </div>


                <div class="input-box">
                    <span class="details">A.L Index Number</span>
                    <input type="text" placeholder="Enter your Frist name" required name="alIndex">
                </div>

                

                <div class="input-box">
                    <span class="details">O.L Subject 1</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 2</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 3</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 4</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 5</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 6</span>
                    <input type="text" placeholder="Enter your subject " required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 7</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 8</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">O.L Subject 9</span>
                    <input type="text" placeholder="Enter your subject" required>
                </div>
                <div class="grade">
                    <label for="grade">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                   


                <div class="input-box">
                    <span class="details">A.L Subject 1</span>
                    <input type="text" placeholder="Enter your subject" required name="alSub1">
                </div>
                <div class="grade">
                    <label for="grade" name="subGrade1">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">A.L Subject 2</span>
                    <input type="text" placeholder="Enter your subject" required name="alSub2">
                </div>
                <div class="grade">
                    <label for="grade" name="subGrade2">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                <div class="input-box">
                    <span class="details">A.L Subject 3</span>
                    <input type="text" placeholder="Enter your subject" required name="alSub3">
                </div>
                <div class="grade">
                    <label for="grade" name="subGrade3">select Grade</label>
                    <select id ="grade">
                       <option value ="subGrade">A</option>
                       <option value ="subGrade">B</option>
                       <option value ="subGrade">C</option>
                       <option value ="subGrade">S</option>
                       <option value ="subGrade">W</option>
                    </select>
                  </div>

                  <div class="button">
                    <input type="submit" value="Submit">
                </div>

                
             </div>
            </form>
        </div>