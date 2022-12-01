<?php require "includes/header.php"; ?>

<?php if(isset($_SESSION['username'])){
    // Adding a welcome message if the user is logged in
    echo "<h1>You are welcome in the main page</h1>";
}else{
    echo "<h1>You are not logged right now</h1>";
}
?>

<?php require "includes/footer.php"; ?>
