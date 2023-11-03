<?php

require_once 'config.php';

if (isset($_GET["deleteID"])) {

    $id = $_GET["deleteID"];

    $sql = "DELETE FROM Job_post WHERE JobPID = {$id}";
    $run_sql = $connection->query($sql);
}
