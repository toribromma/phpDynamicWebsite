<?php
    define("TITLE", "Team | Franklin's Fine Dining");
    include('includes/header.php');
?>

    <div id="team-members" class="cf">
        <h1>Our Team at Franklin's</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque velit quas veritatis magni dicta quisquam, est porro dolores sequi perferendis eveniet, assumenda iusto sed officiis illo modi nam ut et.</p>
        
        <hr>

        <?php 
            foreach ($teamMembers as $member) {
        ?>

        <div class="member">
                <img src="img/<?php echo $member["img"];?>.png" alt="<?php echo $member["name"];?>">
                <h2><?php echo $member["name"];?></h2>
                <p><?php echo $member["bio"];?></p>
        </div><!-- member -->
        <?php
            }
        ?>
    
    </div><!-- team-members -->

    <hr>

<?php

    include('includes/footer.php');
    
?>