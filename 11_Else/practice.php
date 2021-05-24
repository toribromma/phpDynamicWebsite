<?php
	
	// Constants
		define("TITLE", "Else");
	
	// Custom Variables
		$my_name = "Tori Bromma";
		$lesson_num = 11;
		$fav_fruit = "orange";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <
			<?php echo TITLE;?>
			</title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num;?>: <small><?php echo TITLE;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">

				<?php
					if($fav_fruit == "pineapple") {
						echo "YAY! Pineapple is the best!";
					} else {
						echo "so, you like Oranges...";
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
