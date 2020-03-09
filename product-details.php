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
    
   <div class = "wew">
        <br>Product:<?php echo $value['name'];?></br>
        <br>Description:<?php echo $value['description'];?></br>
        <br>Price:<?php echo $value['price'];?></br>
        <br>Category ID:<?php echo $value['id'];?></br>
        <a href="index.php?navigation=update&id=<?php echo $id ?>"><button>Update</button></a>
        <a href="pro_delete.php?id=<?php echo $id ?>"><button>Delete</button></a>
</div>
</html>
