<?php
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
