<?php
	//category
	$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	$category = $data['records'];
?>

<h1> Create Product </h1>

<form action="pro_create.php" method="POST">
<input type="text" name="name" placeholder="name"/>
<input type="text" name="description" placeholder="description"/>
<input type="text" name="price" placeholder="price"/>
<select name="category">
<option value="">--Category--</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
<input type="submit" name="submit" value="submit"/>

</form>
