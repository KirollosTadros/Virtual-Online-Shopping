<?php


function insert_rating ($id, $rate,$items ,$conn)
{

    $items[$id-1]->insert_rate($rate);
    $raters=$items[$id-1]->get_raters();
    $rating=$items[$id-1]->get_rating();
    mysqli_query($conn,"UPDATE item SET rating='$rating', raters_count = '$raters' WHERE id='$id';");

}