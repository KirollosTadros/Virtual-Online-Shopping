<?php


//Class of market items

class item 
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
		$this->rating = ((float)$this->rating*$this->raters_count+(float)$rate)/((float)$this->raters_count+1);
		$this->raters_count++;
	}

}



//The person Buying from the Market

class person
{
	private $id;				//client id in the database
	private $balance;			//client balance

	public function __construct ($id, $balance)
	{
		$this->id = $id;
		$this->balance = $balance;
	}

	public function get_id ()
	{
		return (int)($this->id);
	}

	public function get_balance ()
	{
		return (float)($this->balance);
	}

	public function set_balance ($balance)
	{
		$this->balance = $balance;
	}

}

 class cart 
 {
 	private $apple, $beer,$water, $cheese, $delivery;

 	function __construct ($apple,$beer, $water, $cheese, $delivery)
 	{
 		$this->apple =$apple;
 		$this->beer = $beer;
 		$this->water = $water;
 		$this->cheese=$cheese;
 		$this->delivery=$delivery;


 	}

 	//retrun apple amount
 	function apple()
 	{
 		return (int) ($this->apple);
 	}

 	//retrun beer amount
 	function beer()
 	{
 		return (int) ($this->beer);
 	} 


 	//return water amount
 	function water()
 	{
 		return (int) ($this->water);
 	}


 	//retrun apple amount
 	function cheese()
 	{
 		return (int) ($this->cheese);
 	}

 	function delivery()
 	{
 		return (int) ($this->delivery);
 	}

 	//update cart
 	function update_values($apple,$beer, $water, $cheese, $delivery)
 	{
 		$this->apple =$apple;
 		$this->beer = $beer;
 		$this->water = $water;
 		$this->cheese=$cheese;
 		$this->delivery=$delivery;

 	}



 	}



