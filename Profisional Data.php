<?php
include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if(isset($_POST['submit'])){
      $Company=$_POST['Company'];
      $Work_experience=$_POST['Work_experience'];
      $Achievements=$_POST['Achievements'];
      $Project=$_POST['Project'];
      $About=$_POST['About'];

      $sql="insert in to 'profisional_data'(Company, Work_experience, Achievements, Project, About)
      values('$Company', '$Work_experience' ,'$Achievements', '$Project' , '$About')";
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
        <div class="title"> Professional Ditails </div>
        <form action="connect.php" method="post">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Company :</span>
                    <input type="text" placeholder="company" required  name="Company">
                </div>

               <div class="input-box">
                <span class="details">Work experience:</span>
                <textarea class="textarea" placeholder="Enter......" name="Work_experience">
                </textarea>
                </div>

                <div class="input-box">
                    <span class="details">Achievements :</span>
                    <textarea class="textarea" placeholder="Enter......" name="Achievements">
                    </textarea>
                    </div>

                 <div class="button">
                        <input type="submit" value="+Add" >
                </div>

                <div class="input-box">
                    <span class="details">Project :</span>
                    <input type="text" placeholder="project.." required  name="Project">
                </div>

           
               <div class="input-box">
                <span class="details">About:</span>
                <textarea class="textarea" placeholder="Enter......" name="About">
                </textarea>
                </div>

                
                <div class="button">
                    <input type="submit" value="+Add" >
                </div>
                
             </div>
            </form>
        </div>


</body>
</html>



              