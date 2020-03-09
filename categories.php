<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>
 <link rel="stylesheet" type="text/css" href="style.css">
<h1> Category list </h1>

<table>
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>
<?php
foreach($list as $value){
?>
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
    </tr>
<?php
}
    ?>
</table>
