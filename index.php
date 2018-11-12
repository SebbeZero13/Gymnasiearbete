<!DOCTYPE html>
<html>
<body>

<?php
    include_once 'Header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Home</h2>
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "You are logged in as user " . $_SESSION['u_id'] . "!";
            }
        ?>
    </div>
</section>

<?php
    include_once 'footer.php';
?>
</body>
</html>