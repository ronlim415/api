<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<h1> Product Details </h1>

<table>
    <tr>
        <br>Product</br>
        <br>Description</br>
        <br>Price</br>
        <br>Category ID</br>
    </tr>

    <tr>
        <br><?php echo $value['name'];?></br>
        <br><?php echo $value['description'];?></br>
        <br><?php echo $value['price'];?></br>
        <br><?php echo $value['id'];?></br>
        <br><a href="index.php?navigation=update&id=<?php echo $id ?>">Update</a></br>
        <br><a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></br>
    </tr>

</table>

    <div class="footer">
        <h2>Footer</h2>
    </div>
</html>
