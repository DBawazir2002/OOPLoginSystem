<?php

if(isset($_POST["submit"]))
{

    // Grabbing Data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiat LoginContr class
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../classes/login-contr.class.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user login
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error:none");
}