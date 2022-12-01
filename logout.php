<?php require "includes/header.php"; ?>
<?php
// destroying variables and data of the session.
session_start();
session_unset();
session_destroy();
echo "Loggout";
header("location: index.php");
?>
<?php require "includes/footer.php"; ?>