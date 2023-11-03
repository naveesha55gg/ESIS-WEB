<?php
include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if (isset($_GET['deleteid'])) {
    if (mysqli_query($connection, "DELETE FROM background_cheker WHERE BcID = " . $_GET['deleteid'])) {
        header('location: bccheckreqs.php?msg=1');
    } else {
        header('location: bccheckreqs.php?msg=0');
    }
}
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $jobtitle = $_POST['job_title'];
    $workexperience = $_POST['work_experience'];
    $eduinformation = $_POST['education_information'];
    $others = $_POST['other'];

    mysqli_query($connection, "INSERT INTO report (id, name, email, jobtitle,workexperience,eduinformation,others) VALUES ('$id','$name', '$email','$jobtitle','$workexperience','$eduinformation','$others')");

    header('location: bccheckreqs.php');

}
