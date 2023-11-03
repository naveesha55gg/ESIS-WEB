<?php
include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if (isset($_GET['deleteid'])) {
    if (mysqli_query($connection, "DELETE FROM report WHERE id = " . $_GET['deleteid'])) {
        header('location: viewReport.php?msg=1');
    } else {
        header('location: viewReport.php?msg=0');
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $jobtitle = $_POST['job_title'];
    $workexperience = $_POST['work_experience'];
    $eduinformation = $_POST['education_information'];
    $others = $_POST['other'];

    mysqli_query($connection, " UPDATE report SET id = '$id', name = '$name' , email= '$email',jobtitle='$jobtitle',workexeperience='$workexperience', eduinformation='$eduinformation', others='$others' WHERE id = '$id'");

    header('location: viewReport.php');
}
