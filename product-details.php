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
        Product:<?php echo $value['name'];?>
        Description:<?php echo $value['name'];?>
        Price:<?php echo $value['name'];?>
        Category ID:<?php echo $value['name'];?>
        <a href="index.php?navigation=update&id=<?php echo $id ?>"><button>Update</button></a>
        <a href="pro_delete.php?id=<?php echo $id ?>"><button>Delete</button></a>
    </tr>

</table>
</html>
