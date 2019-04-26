<?php
/**
 * Created by PhpStorm.
 * User: KirollosTadros
 * Date: 25-Apr-19
 * Time: 7:52 PM
 */

namespace src\Items;


class Item
{

    private $id;				//Its id in the database
    private $price;
    private $rating;			//Current rating
    private $raters_count;		//To calculate new avg

    public function __construct($id, $price, $rating, $raters_count)
    {
        $this->id =$id;
        $this->price = $price;
        $this->rating = $rating;
        $this->raters_count = $raters_count;
    }


    public function get_id ()
    {
        return (int)($this->id);
    }

    public function get_price ()
    {
        return (float)($this->price);
    }


    public function get_rating ()
    {

        return number_format((float)($this->rating), 2, '.', '');

    }

    public function get_raters ()
    {
        return (int)($this->raters_count);
    }

    //insert new rating and existing avg rating
    public function insert_rate($rate)
    {
        $this->rating = ((float)$this->rating * ($this->raters_count) + (float)$rate) / ((float)$this->raters_count + 1);
        $this->raters_count++;
    }

}