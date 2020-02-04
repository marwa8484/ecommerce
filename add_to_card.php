<?php
include "temp.php";
$ids = $_POST['addToCard'];
// optional
// echo "You chose the following color(s): <br>";

$product =array(); 
$totalPrice =0;
$i=0;
foreach ($ids as $id){ 
    $idValue=$id;
    $quantity =$_POST["quantity".$id];
    $image =$_POST["image".$id];
    $name =$_POST["name".$id];
    $code =$_POST["code".$id];
    $description =$_POST["description".$id];
    $price =$_POST["price".$id];
    $currency =$_POST["currency".$id];
    $product[$i]['id'] =$idValue;
    $product[$i]['image'] =$image;
    $product[$i]['quantity'] =$quantity;
    $product[$i]['name'] =$name;
    $product[$i]['code'] =$code;
    $product[$i]['price'] =$price;
    $product[$i]['currency'] =$currency;
    $totalPrice =$totalPrice+($price*$quantity);
    $i++;
}
$smarty->assign("products",$product); 
$smarty->assign("total_price",$totalPrice);
$smarty->assign("total_currency",$currency); 

$smarty->display("card.tpl");
?>
