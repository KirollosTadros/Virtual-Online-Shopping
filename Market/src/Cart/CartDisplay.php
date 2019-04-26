<?php



if($_SESSION['apple']!=0)
{
    echo "<form>Apple: ".$_SESSION['apple']. " x " .$apple->get_price()."$ = ". $_SESSION['apple']*$apple->get_price()."$  <input type='submit' name='apple_rmv' value=Remove></input></form>";
}

if($_SESSION['beer']!=0)
{
    echo "<form><br><br>Beer: ".$_SESSION['beer']. " x " .$beer->get_price()."$ = ". $_SESSION['beer']*$beer->get_price()."$  <input type='submit' name='beer_rmv' value=Remove></input></form";
}


if($_SESSION['water']!=0)
{
    echo "<form><br><br>water: ".$_SESSION['water']. " x " .$water->get_price()."$ = ". $_SESSION['water']*$water->get_price()."$  <input type='submit' name='water_rmv' value=Remove></input></form>";
}

if($_SESSION['cheese']!=0)
{
    echo "<form><br><br>Cheese: ".$_SESSION['cheese']. " x " .$cheese->get_price()."$ = ". $_SESSION['cheese']*$cheese->get_price()."$  <input type='submit' name='cheese_rmv' value=Remove></input></form>";
}

if(($_SESSION['apple'] == 0) && ($_SESSION['beer'] == 0) && ($_SESSION['water'] == 0) && ($_SESSION['cheese'] == 0))
{
    echo "<center><p>Your Cart is empty</p></center>";
}