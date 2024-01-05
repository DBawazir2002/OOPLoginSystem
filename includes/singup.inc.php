<?php

if(isset($_POST["submit"]))
{

    // Grabbing Data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiat SignupContr class
    include "../classes/dbh.class.php";
    include "../classes/singup.class.php";
    include "../classes/singup-contr.class.php";
    $singup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user singup
    $singup->singupUser();

    // Going to back to front page
    header("location: ../index.php?error:none");
}