<?php
require 'config.php';

if (isset($_POST['Reply'])) {

    $comName = $_POST['company_name'];
    $mess = $_POST['message'];
    $IDS = $_POST["COOID"];

    ?>

    <!doctype html>
    <html>
        <head>
        <link rel="stylesheet" href="css/support_reply.css ">
        </head>
        <body>
           <h1>Customer Support</h1>
           <div>
            <h3>Compnay name :</h3>
            <h3 style="font-weight:300;"><?php echo $comName; ?></h3>
            <h3>Problem :</h3>
            <h3><?php echo $mess; ?></h3>

            <div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h3><lable>Reply :</lable></h3><br>
                    <textarea name="solution" rows="15" cols="150"></textarea><br>
                    <input type="hidden" name="COMID" value="{$IDS}" >
                    <input type="submit" value="submit" name="company">
                </form>
            </div>


           </div>

        </body>
    </html>

    <?php

} else {
    echo $connection->error;
}

?>




<?php

if (isset($_POST['company'])) {

    $reply = $_POST['solution'];
    $IDR = $_POST['COMID'];

    $updateReply = "UPDATE company_customer_support SET Reply = '$reply' WHERE CcsID= $IDR";
    $RUNS = $connection->query($updateReply);

    if (isset($RUNS)) {
        header('location:dashboard.php');

    } else {
        echo $connection->error;
    }
}
$connection->close();
?>

