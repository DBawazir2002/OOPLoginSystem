<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Login System</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <h3>Dawood Mohmmed Bawazir</h3>
                <ul class = "nav-bar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Current Sales</a></li>
                    <li><a href="#">Members+</a></li>
                </ul>
            </div>
            <ul class = "nav-bar">
                    <?php
                        if(isset($_SESSION["userid"]))
                        {
                    ?>
                            <li><a href="#"><?php echo $_SESSION["useruid"] ?></a></li>
                            <li> <button type = "submit" name = "submit"><a href="includes/logout.inc.php">LOGOUT</a></button></li>
                    <?php

                        }
                        else
                        {
                    ?>
                    <li> <button type = "submit" name = "submit"><a href="#">SING UP</a></button></li>
                    <li> <button type = "submit" name = "submit"><a href="#">LOGIN</a></button></li>
                    
                    <?php
                        }
                    ?>
            </ul>
        </nav>
    </header>
    
            <div id = "w1">
            <br /><br /><br /><br /><br />
            <h4>SING Up</h4>
            <p> Don't have an account yet? Sing up here </p>
            <form action = "includes/singup.inc.php" method = "post">
            User Name<br /><input type = "text" name = "uid" /><br /><br />
            Password<br /><input type = "password" name = "pwd"/><br /><br />
                Repeat Password<br /><input type = "text" name = "pwdrepeat" /><br /><br />
                E-mail<br /><input type = "text" name = "email"/><br /><br />
                <button type = "submit" name = "submit">SING UP</button>
            </form>
        </div>
    

    
        <br /><br />
        <div id = "w2">
            <h4>LOGIN</h4>
            <form action = "includes/login.inc.php" method = "post" id = "big_wrapper">
            User Name<br /><input type = "text" name = "uid" /><br /><br />
            Password<br /><input type = "password" name = "pwd"/><br /><br />
                <button type = "submit" name = "submit">LOGIN</button>
            </form>
        </div>
    
</body>
</html>