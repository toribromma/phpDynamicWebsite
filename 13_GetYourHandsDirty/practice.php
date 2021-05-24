<?php
	
	// Constants
	define("TITLE", "If, Else, Elseif");
	
	// Custom Variables
	$my_name = "Tori Bromma";
	$species = "Black Rhino";
	$nativeLanguage = "English";
	$yearsOnEarth = 25;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE;?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php
					if($species == "Black Rhino") {
						echo "<p>Welcome, Black Rhino. You and the rest of the rhinos will love this lake!</p>";
					} elseif($species == "Human"){
						echo "<p>Welcome, Human! please leave the black rhino alone</p>";
					} else {
						echo "<p>Welcome to Earth! Your kind is unknown to us.</p>";
					}
				?>

<?php	
				
				if ($yearsOnEarth == 20) {
					
					echo "<p>Congratulations for being on Earth for 20 years!</p>";
					
				} elseif ($yearsOnEarth < 20) {
					
					echo "<p>Not quite 20 yet, young grasshopper.</p>";
					
				} else {
					
					echo "<p>You must be more than 20 years old.</p>";
					
				}
			
			?>
				<h5>A combination:</h5>
				
<?php

				if ($nativeLanguage == "German") {
					
					echo "<p>Willkommen</p>";
					
				} elseif ($species == "Black Rhino") {
					
					echo "<p>Oh! You must be a rhino.</p>";
					
				} else {
					
					echo "<p>Well then, you do not speak German, nor are you a rhino.</p>";
					
				}
			
			?>

				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y");?> - <?php echo $my_name;?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
