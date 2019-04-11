<?php 
 $pdo = new PDO('mysql:host=localhost;dbname=bkdb','root','');
 $query="SELECT * from categories";
 $statement=$pdo->prepare($query);
 $statement->execute();
 $data=$statement->fetchall();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Upload test</title>
</head>
<body>

<fieldset style="margin:50px 500px auto;">
	<legend>Insert the  Items</legend>
	<form action="imgprocess.php" method="POST" enctype="multipart/form-data"> 


		<label>Category Name</label>
		<input type="text" name="catname"><br><br>

		<label>Description</label>
		<input type="text" name="des"><br><br>

		<label>Insert Icon</label><br>
		<input type="file" name="icon"><br><br>

		<button type="submit" name="done">Enter</button>
    


	</form>

</fieldset>

<div>

  <?php foreach ($data as $item) { ?>
   <ul>
   	<li><p>Category name: <?php echo $item['name'];?></p></li>
   	<img src="<?php echo $item['icon']; ?>" height="100" width="100">
   	<li><p>Description: <?php echo $item['description'];?></p></li>
   </ul>

   <?php } ?>

    
</div>



</body>
</html>