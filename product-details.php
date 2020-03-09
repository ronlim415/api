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
        <br>Product:<?php echo $value['name'];?></br>
        <br>Description:<?php echo $value['name'];?></br>
        <br>Price:<?php echo $value['name'];?></br>
        <br>Category ID:<?php echo $value['name'];?></br>
        <a href="index.php?navigation=update&id=<?php echo $id ?>"><button>Update</button></a>
        <a href="pro_delete.php?id=<?php echo $id ?>"><button>Delete</button></a>
    </tr>

</table>
</html>
