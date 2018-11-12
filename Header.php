<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
     <title> Login Sladank™</title>
</head>
<link rel="stylesheet" type="text/css" href="Login_Sladank.css">
<body>
    <header>
        <nav>
            <div clas="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                        if (isset($_SESSION['u_id'])) {
                           echo '<form action="includes/login.inc.php" method="POST">
                            <button type="submit" name="Logout">Logout</button>
                          </form>';

                        } else {
                            echo '<form action="includes/login.inc.php" method="POST"> 
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>;';
                        }
                        ?>   
                </div>
            </div>
        </nav>
    </header>