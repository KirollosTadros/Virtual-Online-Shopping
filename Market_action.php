<?php

//cart preview

if($cart->apple()!=0)
{
	echo "<form>Apple: ".$cart->apple(). " x " .$apple->get_price()."$ = ". $cart->apple()*$apple->get_price()."$  <input type='submit' name='apple_rmv' value=Remove></input></form>";
}

if($cart->beer()!=0)
{
	echo "<form><br><br>Beer: ".$cart->beer(). " x " .$beer->get_price()."$ = ". $cart->beer()*$beer->get_price()."$  <input type='submit' name='beer_rmv' value=Remove></input></form";
}


if($cart->water()!=0)
{
	echo "<form><br><br>water: ".$cart->water(). " x " .$water->get_price()."$ = ". $cart->water()*$water->get_price()."$  <input type='submit' name='water_rmv' value=Remove></input></form>";
}

if($cart->cheese()!=0)
{
	echo "<form><br><br>Cheese: ".$cart->cheese(). " x " .$cheese->get_price()."$ = ". $cart->cheese()*$cheese->get_price()."$  <input type='submit' name='cheese_rmv' value=Remove></input></form>";
}

if(($cart->cheese() == 0)&&($cart->beer() == 0)&&($cart->water() == 0)&&($cart->apple() == 0))
{
	echo "<center>Empty Cart</center>";
}
?>