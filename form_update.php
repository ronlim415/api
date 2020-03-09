<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$json2 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data2 = json_decode($json2,true);
	$category = $data2['records'];
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

	<h1> Update Product </h1>
	 <div class = "flex-container">
<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
	<br><input type="text" name="name" value="<?php echo $result['name'];?>"/><br>
	<br><input type="text" name="description" value="<?php echo $result['description']; ?>"/><br>
	<br><input type="text" name="price" value="<?php echo $result['price']; ?>"/><br>
	<br><select name="category"><br>
	<option value="<?php echo $result['id'];?>"><?php echo $result['name'];?></option>
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
	</div>

<div class="footer">
        <h2>Footer</h2>
    </div>
</html>
