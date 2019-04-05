<?php
require "loading_db.php";



//update rating

if (isset($_GET['cheese_drop']))
{
   insert_rating (4,$_GET['cheese_drop'],$items, $conn);
}

if (isset($_GET['water_drop']))
{
   insert_rating (3,$_GET['water_drop'],$items, $conn);
}

if (isset($_GET['beer_drop']))
{
   insert_rating (2,$_GET['beer_drop'],$items, $conn);
}


if (isset($_GET['apple_drop']))
{
   insert_rating (1,$_GET['apple_drop'],$items, $conn);
}



//adding items to cart
if (isset($_GET['cheese']))
{
   update_cart('cheese', $_GET['cheese'],$cart ,$conn);
}

if (isset($_GET['water']))
{
   update_cart('water', $_GET['water'],$cart ,$conn);
}

if (isset($_GET['beer']))
{
   update_cart('beer', $_GET['beer'],$cart ,$conn);

}

if (isset($_GET['apple']))
{
   update_cart('apple', $_GET['apple'],$cart, $conn);

}




//payment

if (isset($_GET['Pay']))
{

	if (($cart->apple() ==0) && ($cart->beer() ==0 )&& ($cart->water() ==0) && ($cart->cheese() ==0) )
	{
		$message = "Your cart is empty";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	if (!isset ($_GET ['delivery']))
	{
		$message = "Please select pick up type";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}


	else
	{

		$delivery = $_GET['delivery'];
		$old_balance = $client->get_balance();

		$total = ($cart->apple()*$apple->get_price())+($cart->beer()*$beer->get_price())+($cart->water()*$water->get_price())+($cart->cheese()*$cheese->get_price())+$delivery;

		$new_balance = $old_balance -$total;
			

		update_balance ($new_balance,$client ,$conn);
		empty_cart ( $cart,$conn);

		
		

	}



}





//removing items from cart
if (isset($_GET['cheese_rmv']))
{
   remove_cart('cheese', $cart,$conn);
}

if (isset($_GET['water_rmv']))
{
   remove_cart('water',$cart, $conn);
}

if (isset($_GET['beer_rmv']))
{
   remove_cart('beer',$cart, $conn);

 
}

if (isset($_GET['apple_rmv']))
{
   remove_cart('apple',$cart ,$conn);

}


?>