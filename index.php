<?php
 include 'connection/connection.php';
include "temp.php";
$products =array();
 $i=0;
				   $result = mysqli_query($conn,"SELECT * FROM product inner join quantity on product.id = quantity.product_id");
				   while($row = mysqli_fetch_array($result)) {
						$products[] = $row  ;
						/*$products[$i]['second_image'] =$row['second_image'];
						$products[$i]['quantity'] = $row['quantity'];
						$products[$i]['rating'] = $row['rating'];
						$products[$i]['name'] = $row['name'];
						$products[$i]['code'] = $row['code'];
						$products[$i]['description'] = $row['description'];
						$products[$i]['price'] = $row['price'];
						$products[$i]['currency'] = $row['currency'];
						$i++;*/
				   }
$smarty->assign("content_content",$products); 
$smarty->display("index.tpl");

?>