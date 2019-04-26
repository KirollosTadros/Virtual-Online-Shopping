<?php


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