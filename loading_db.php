<?php
require "DB.php";


$dbServername ="mysql.aba.ae";
$dbUsername = "Kirollos";
$dbPassword = "Mysql02051996";
$dbName = "kirollos";

//connecting to database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 


	/*
	Getting items from database
	*/

	//Getting apple data from database
	$apple_query = mysqli_query($conn, "SELECT * FROM item  where name = 'apple';" );	

	if (mysqli_num_rows($apple_query) > 0) 
	{
		$row = mysqli_fetch_assoc($apple_query);
		$apple = new item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
	}




		//Getting beer data from database
$beer_query = mysqli_query($conn, "SELECT * FROM item  where name = 'beer';" );	

	if (mysqli_num_rows($beer_query) > 0) 
	{
		$row = mysqli_fetch_assoc($beer_query);
		$beer = new item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
	}




		//Getting water data from database
	$water_query = mysqli_query($conn, "SELECT * FROM item  where name = 'water';" );	

	if (mysqli_num_rows($water_query) > 0) 
	{
		$row = mysqli_fetch_assoc($water_query);
		$water = new item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
	}





		//Getting cheese data from database
	$cheese_query = mysqli_query($conn, "SELECT * FROM item  where name = 'cheese';" );	

	if (mysqli_num_rows($cheese_query) > 0) 
	{
		$row = mysqli_fetch_assoc($cheese_query);
		$cheese = new item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
	}


	//getting client balance from database

	$client = mysqli_query($conn, "SELECT * FROM person" );	

	if (mysqli_num_rows($client) > 0) 
	{
		$row = mysqli_fetch_assoc($client);
		$client = new person($row['id'],$row['balance']);
	}
		$items = array($apple, $beer, $water, $cheese);

	
	//getting stored cart
	$cart = mysqli_query($conn, "SELECT * FROM cart WHERE id='1'" );	

	if (mysqli_num_rows($cart) > 0) 
	{
		$row = mysqli_fetch_assoc($cart);
		$cart = new cart($row['apple'],$row['beer'], $row['water'], $row['cheese'],$row['delivery']);
	}

	//insert new rating and editing database
	//arguments are the item id and the rate we want to insert
function insert_rating ($id, $rate,$items, $conn)
{

	$items[$id-1]->insert_rate($rate);
	$raters=$items[$id-1]->get_raters();
	$rating=$items[$id-1]->get_rating();
	mysqli_query($conn,"UPDATE item SET rating='$rating', raters_count = '$raters' WHERE id='$id';");

}

function update_balance ($balance,$client ,$conn)
{
	mysqli_query($conn,"UPDATE person SET balance='$balance' WHERE id='1';");
	$client->set_balance ($balance);

}


//to add items to cart
function update_cart ($name, $amount,$cart ,$conn)
{
	//getting current cart
	$current = mysqli_query($conn, "SELECT * FROM cart  WHERE id = '1';" );	

	if (mysqli_num_rows($current) > 0) 
	{
		$row = mysqli_fetch_assoc($current);
		$amount += $row[$name];
	}

	//updating cart amount

	mysqli_query($conn,"UPDATE cart SET $name='$amount' WHERE id='1';");


	$current = mysqli_query($conn, "SELECT * FROM cart WHERE id='1'" );	

	if (mysqli_num_rows($current) > 0) 
	{
		$row = mysqli_fetch_assoc($current);
		$cart->update_values($row['apple'],$row['beer'], $row['water'], $row['cheese'],$row['delivery']);
	}

}


//empty cart after payment

function empty_cart($cart, $conn)
{
	//free the cart
	 mysqli_query($conn, "UPDATE cart SET apple = '0',beer = '0',water = '0',cheese = '0',delivery = '0' WHERE id = '1';" );

	 $current = mysqli_query($conn, "SELECT * FROM cart WHERE id='1'" );	

	if (mysqli_num_rows($current) > 0) 
	{
		$row = mysqli_fetch_assoc($current);
		$cart->update_values($row['apple'],$row['beer'], $row['water'], $row['cheese'],$row['delivery']);
	}	

}



//remove item from cart

function remove_cart ($name,$cart ,$conn)
{
	mysqli_query($conn, "UPDATE cart SET $name = '0' WHERE id = '1';" );

	$current = mysqli_query($conn, "SELECT * FROM cart WHERE id='1'" );	

	if (mysqli_num_rows($current) > 0) 
	{
		$row = mysqli_fetch_assoc($current);
		$cart->update_values($row['apple'],$row['beer'], $row['water'], $row['cheese'],$row['delivery']);
	}	

}
