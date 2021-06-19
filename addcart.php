<?php 

//ini_set('display_errors', false);
$db= mysqli_connect("localhost","root","","organica");
session_start();
$uname=$_SESSION['username'];
 
  $item=explode(';',$_POST['item']);
  $name=$item[0];
  $price=$item[1];
  $sql1 = "SELECT * from addcart where itemname = '$name'";
  $result1 = $db->query($sql1);

  if($result1->num_rows>0)
  {
    $row = $result1->fetch_assoc();
    $quantity = $row['quantity']+1;
    $sql2 = "UPDATE addcart SET quantity = '$quantity' where itemname='$name'";
    $db->query($sql2);
  }
  else{
  $quantity = 1;
  $sql="INSERT INTO addcart(itemname,cost,quantity,username) VALUES('$name','$price','$quantity','$uname')";
  $result=$db->query($sql);
  }
?>