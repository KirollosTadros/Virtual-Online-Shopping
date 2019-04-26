<?php


$_SESSION ['apple'] = 0;
$_SESSION ['beer'] = 0;
$_SESSION ['water'] = 0;
$_SESSION ['cheese'] = 0;


$_SESSION ['rated_apple'] = 0;
$_SESSION ['rated_beer'] = 0;
$_SESSION ['rated_water'] = 0;
$_SESSION ['rated_cheese'] = 0;
$_SESSION ['balance'] = 0;
session_start();

//initialize balance first time
if($_SESSION['balance'] == 0)
{
    $_SESSION['balance']+=100;
}



$items = array($apple, $beer, $water, $cheese);