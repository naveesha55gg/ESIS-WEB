<?php
require 'config.php';

if (isset($_POST['Cus_Reply'])) {

    $Name = $_POST['jobseeker'];

    $message = $_POST['message'];
    $IDS = $_POST["jbid"];
    ?>

<!doctype html>
    <html>
        <head>
        <link rel="stylesheet" href="css/support_reply.css">
        </head>
        <body>
           <h1 class="titles">Job Seeker Customer Support</h1>
           <div>
            <h3>Customer name :</h3>
            <h3 class="answer"><?php echo $Name; ?></h3>
            <h3>Problem :</h3>
            <h3 class="answer"><?php echo $message; ?></h3>

            <div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h3><lable>Reply :</lable></h3><br>
                    <textarea name="solution" rows="15" cols="150"></textarea><br>
                    <input type="hidden" name="JobsID" value="{$IDS}" >
                    <input type="submit" value="submit" name="jobseeker" class="button">
                </form>
            </div>


           </div>

        </body>
    </html>



<?php
}
?>

<?php

if (isset($_POST['jobseeker'])) {

    $reply = $_POST['solution'];
    $IDR = $_POST['JobsID'];

    $updateReply = "UPDATE jobseeker_customer_support SET Reply = '$reply' WHERE JbcsID= $IDR";

    $RUNS = $connection->query($updateReply);

    if (isset($RUNS)) {
        header('location:dashboard.php');

    } else {
        echo $connection->error;
    }
}
?>