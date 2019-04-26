<?php


//Getting apple data from database
$apple_query = mysqli_query($conn, "SELECT * FROM item  where name = 'apple';" );

if (mysqli_num_rows($apple_query) > 0)
{
    $row = mysqli_fetch_assoc($apple_query);
    $apple = new \src\Items\Item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
}




//Getting beer data from database
$beer_query = mysqli_query($conn, "SELECT * FROM item  where name = 'beer';" );

if (mysqli_num_rows($beer_query) > 0)
{
    $row = mysqli_fetch_assoc($beer_query);
    $beer = new \src\Items\Item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
}




//Getting water data from database
$water_query = mysqli_query($conn, "SELECT * FROM item  where name = 'water';" );

if (mysqli_num_rows($water_query) > 0)
{
    $row = mysqli_fetch_assoc($water_query);
    $water = new \src\Items\Item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
}





//Getting cheese data from database
$cheese_query = mysqli_query($conn, "SELECT * FROM item  where name = 'cheese';" );

if (mysqli_num_rows($cheese_query) > 0)
{
    $row = mysqli_fetch_assoc($cheese_query);
    $cheese = new \src\Items\Item($row['id'],$row['price'], $row['rating'], $row['raters_count']);
}