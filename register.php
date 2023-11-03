<?php

include 'config.php';

if(isset($_POST['submit'])){

   
   $name = mysqli_real_escape_string($connection, $_POST['Name']);
   $email = mysqli_real_escape_string($connection, $_POST['Email']);
   $pass = mysqli_real_escape_string($connection,$_POST['Password']);
   $cpass = mysqli_real_escape_string($connection,$_POST['cPassword']);
   $user_type = $_POST['user_Type'];


   $select = " SELECT * FROM Account WHERE Email = '$email' && Password = '$pass' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO Account(Name, Email, Password, user_Type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($connection, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>register form</title>

<!-- custom css file link  -->

  <link rel="stylesheet" href="style(main).css">

</head>

<body>

<!--top bar-->

  <ul>
    <li><a href="Home.php">Home</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li><a href="#Add link">Help</a></li>

    <li style="float:right"><a class="active" href="Login.php">Login</a></li>


    </div>
    </div>
  </ul>

<!--main Form-->
  
  <div class="form-container">

    <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="Text" name="Name" required placeholder="Enter Your Name or Company Name">
      <input type="email" name="Email" required placeholder="Enter Your Email or Company Email">
      <input type="password" name="Password" required placeholder="Enter Your Password">
      <input type="password" name="cPassword" required placeholder="Confirm Your Password">

      <h4> Select Your Account Type </h4>
      <select name="user_Type">
        <option value="job_Seeker">Job Seeker</option>
        <option value="company">Company</option>
      </select>
      <input onclick="checker()" type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="Login.php">login now</a></p>
    </form>

    <script>
    function checker() {
      alert('Registration complete')
    }
    </script>

  </div>

<!--bottom bar-->

  <div class="footer">
    <a href="#link">User Agreement</a>
    <a href="#link">Brand Policy</a>
    <a href="#link">Copyright policy</a>
    <a href="#link">Privacy policy</a>
  </div>

</body>

</html>