


 <?php
    include ("navbar.php");
    include ("db.php");

    $query = "SELECT * FROM `recipe` ORDER BY 'id' ASC";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('on noe');}
        else {echo("");}

   
    

 ?>



    <div id="wrapper">
		<div id="content">
				<img src="images/house.png" alt="Home Page" id="homeicon">
		</div>
		<br>
        <div id="extra">
			<h1>Delish-Dish</h1>
			<h2>The Best Place For Recipes</h2>



            <div class="wrapper2">
                <div class="masonry"> 
               

                <?php while ($recipe = mysqli_fetch_assoc($result)) { ?>

    <a class="nada" href="example.php?id=<?php echo urlencode($recipe["id"]); ?>"> 
<div class="tile">

<img class="contentimgs" src="ogimgs/<?php echo $recipe["folder"]?>/<?php echo $recipe["image"]?>"> 
</a>
<div class="caption"> <?php echo $recipe["title"]?>
</div> 


</div> <?php } mysqli_free_result($result); ?>

                       <!-- <div class="tile" onclick="window.location.href = 'example.html';">
                           <img src="images/example2.jpg">
                           <div class="caption">Dish 2</div>
                       </div>
                      <div class="tile" onclick="window.location.href = 'example.html';">
                           <img src="images/example3.jpg">
                           <div class="caption">Dish 3</div>
                       </div>
                       <div class="tile" onclick="window.location.href = 'example.html';">
                           <img src="images/example4.jpg">
                           <div class="caption">Dish 4</div>
                       </div>
                       <div class="tile" onclick="window.location.href = 'example.html';">
                           <img src="images/example5.jpg">
                           <div class="caption">Dish 5</div>
                       </div>
                       <div class="tile" onclick="window.location.href = 'example.html';">
                           <img src="images/example6.jpg">
                           <div class="caption">Dish 6</div>
                       </div> -->
                </div>
                </div>


 </body>
</html>