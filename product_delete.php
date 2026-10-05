<?php include('connection.php') ?>
<?php 
if (isset($_GET['id'])){
$id = $_GET ['id'];
$conn->prepare("DELETE * FROM product WHERE id=$id");
header("location:product_list.php");
}
?>