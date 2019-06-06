


 <?php
    include ("navbar.php");
    include ("db.php");


$id = isset($_GET["id"]) ? $_GET["id"] : null;

    $query = "SELECT * FROM `recipe` WHERE id={$id} LIMIT 1";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('on noe');}
        else {echo("");}
 ?>



<?php while ($recipe = mysqli_fetch_assoc($result)) { ?>

 
    <div id="wrapper">
		<div id="content">
				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["image"]?>" alt="Completed Dish" id="topimg">
		</div>
		<br>
		<div id="extra">
			<h1><?php echo $recipe["title"] ?></h1>
			<h2>With <?php echo $recipe["side"]?></h2>
			<h3>A <?php echo $recipe["category"]?> Dish</h3>
			<p>4 Boneless, Skinless Chicken Breasts</p>
			<p>1 Tbsp Ancho Chile Paste</p>
			<p>2 Tbsps Crème Fraîche</p>
			<p>3 Tbsps Golden Raisins</p>
			<p><?php echo $recipe["time"]?>minutes to cook, serves <?php echo $recipe["servings"]?> people.</p>
			<p>About <?php echo $recipe["nutrition"]?> calories per serving.</p>
			<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["ingredientsimage"]?>" alt="Your ingredients awaits" id="recipesimg">
			<div id="instructions">

				<p class="instructionstext"><?php echo $recipe["description"] ?></p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage1"]?>" alt="Prep" class="stepimgs">

				<p class="instructionstext">Step One</p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage2"]?>" alt="Step 1 image" class="stepimgs">
					
				<p class="instructionstext">Step Two</p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage3"]?>" alt="Step 2 image" class="stepimgs">
					
				<p class="instructionstext">Step Three</p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage4"]?>" alt="Step 3 image" class="stepimgs">
				
				<p class="instructionstext">Step Four</p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage5"]?>" alt="Step 4 image" class="stepimgs">

				<p class="instructionstext">Step Five</p>

				<img src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["stepimage6"]?>" alt="Step 5 image" class="stepimgs">

				<p class="instructionstext">Step Six</p>



				</div>

			</div>

            <?php } mysqli_free_result($result); ?>

			</body>
</html>