<?php
require "loading_db.php";



//update rating

if (isset($_GET['cheese_drop']))
{
   

   if($_SESSION['rated_cheese']==0)
   {
      insert_rating (4,$_GET['cheese_drop'],$items,$conn);
      $_SESSION['rated_cheese']=1;
   }

   else
   {
      $message = "Your have rated for this item before";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}

if (isset($_GET['water_drop']))
{
   

   if($_SESSION['rated_water']==0)
   {
      insert_rating (3,$_GET['water_drop'],$items ,$conn);
      $_SESSION['rated_water']=1;
   }
   else
   {
      $message = "Your have rated for this item before";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}

if (isset($_GET['beer_drop']))
{
   

   if($_SESSION['rated_beer']==0)
   {
      insert_rating (2,$_GET['beer_drop'],$items,$conn);
      $_SESSION['rated_beer']=1;
   }
   else
   {
      $message = "Your have rated for this item before";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}


if (isset($_GET['apple_drop']))
{
   

   if($_SESSION['rated_apple']==0)
   {
      insert_rating (1,$_GET['apple_drop'],$items ,$conn);
      $_SESSION['rated_apple']=1;
   }
   else
   {
      $message = "Your have rated for this item before";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}



//adding items to cart
if (isset($_GET['cheese'])$$($_GET['cheese']>0))
{
   $_SESSION['cheese'] += $_GET['cheese'];
}

if (isset($_GET['water'])&&($_GET['water']>0))
{
   $_SESSION['water'] += $_GET['water'];
}

if (isset($_GET['beer'])&&($_GET['beer']>0))
{
   $_SESSION['beer'] += $_GET['beer'];

}

if (isset($_GET['apple'])&&($_GET['apple']>0))
{
   $_SESSION['apple'] += $_GET['apple'];

}




//payment

if (isset($_GET['Pay']))
{

	if (($_SESSION['apple'] ==0) && ($_SESSION['beer'] ==0 )&& ($_SESSION['water'] ==0) && ($_SESSION['cheese'] ==0) )
	{
		$message = "Your cart is empty";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	else if (!isset ($_GET ['delivery']))
	{
		$message = "Please select pick up type";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}


	else
	{

		$delivery = $_GET['delivery'];
		$old_balance = $_SESSION['balance'];

		$total = ($_SESSION['apple']*$apple->get_price())+($_SESSION['beer']*$beer->get_price())+($_SESSION['water']*$water->get_price())+($_SESSION['cheese']*$cheese->get_price())+$delivery;

		$new_balance = $old_balance -$total;
                if($total>$old_balance)
                {
                   $error = "Sorry You don't have enough balance";
		   echo "<script type='text/javascript'>alert(\"$error\");</script>";
                    
                }
                
                else
                {

		   			$_SESSION ['balance'] = $new_balance;
		   			$_SESSION['apple']=0;
                   	$_SESSION['beer']=0;
                   	$_SESSION['water']=0;
                   	$_SESSION['cheese']=0;
                 }

		
		

	}



}





//removing items from cart
if (isset($_GET['cheese_rmv']))
{
   $_SESSION['cheese'] = 0;
}

if (isset($_GET['water_rmv']))
{
   $_SESSION['water'] = 0;
}

if (isset($_GET['beer_rmv']))
{
   $_SESSION['beer'] = 0;

 
}

if (isset($_GET['apple_rmv']))
{
   $_SESSION['apple'] = 0;

}


?>	