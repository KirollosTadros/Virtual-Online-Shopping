<?php



if (isset($_GET['cheese'])&&($_GET['cheese']>0))
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


