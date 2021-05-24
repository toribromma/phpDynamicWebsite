<?php
	define("TITLE", "Menu | Franklin's Fine Dining");
	
	include('includes/header.php');

    if(isset($_GET["item"])) {
        $menuItem - $_GET["item"];

        $dish = $menuItems[$menuItem];
    }
?>

<?php include('includes/footer.php'); ?>