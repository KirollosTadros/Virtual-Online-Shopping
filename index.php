<?php 
require 'action.php'; ?>

<DOCTYPE html>
<html>

	<title>Kirollos Market</title>
	<head>
		<link href="page.css" rel="stylesheet" type="text/css"/>
	</head>
	

		<body>
		<SCRIPT type="text/javascript" src="main.js"></SCRIPT>
			<center><h1> Welcome to Kirollos Market!</h1></center>
			<h2 style='text-align:center'>Your current balance : <?php echo $client->get_balance(); ?>$ </h2>
			<table style = "width:100%">
				<tr>
					<td>
						<table style = "width:75%" border="1.5">

								<td>
									<form>
										<a>Apple : <?php echo $apple->get_price()?>$</a>
										<input type="number" min="0" name="apple" value="0" id= "apple_btn" style='text-align:center'/>
										<button>Add to cart</button>
									</form>
									
									<a><br><br>Rating: <?php echo $apple->get_rating()?></a>
									<form>
										<select name="apple_drop" size= '1px'>
										  <option value="5">5</option>
						  				  <option value="4">4</option>
						  				  <option value="3">3</option>
						  			      <option value="2">2</option>
						  			      <option value="1">1</option>
										</select>
										<button id="rate1">Rate</button>
									</form>
								</td>
							</tr>


							<tr>
								<td>
									<form>
										<a>Beer : <?php echo $beer->get_price()?>$</a>
										<input type="number" min="0"name="beer" value="0" id="beer_btn"  style='text-align:center'/>
										<button>Add to cart</button>
									</form>
									
									<a><br><br>Rating: <?php echo $beer->get_rating()?></a>
									<form>
										<select name="beer_drop" size= '1px'>
										  <option value="5">5</option>
						  				  <option value="4">4</option>
						  				  <option value="3">3</option>
						  			      <option value="2">2</option>
						  			      <option value="1">1</option>
										</select>
										<button id = "rate2">Rate</button>
									</form>
								</td>
							</tr>

							
							<tr>
								<td>
									<form>
										<a>Water : <?php echo $water->get_price()?>$</a>
										<input type="number" min="0" name="water" value="0" id="water_btn"  style='text-align:center'/>
										<button>Add to cart</button>
									</form>
									
									<a><br><br>Rating: <?php echo $water->get_rating()?></a>
									<form>
										<select name="water_drop" size= '1px'>
										  <option value="5">5</option>
						  				  <option value="4">4</option>
						  				  <option value="3">3</option>
						  			      <option value="2">2</option>
						  			      <option value="1">1</option>
										</select>
										<button id = "rate3">Rate</button>
									</form>
								</td>
							</tr>

							
							<tr>
								<td >
									<form>
										<a>Cheese : <?php echo $cheese->get_price()?>$</a>
										<input type="number" min="0" name="cheese" value="0" id="cheese_btn"  style='text-align:center'/>
										<button>Add to cart</button>
									</form>
									
									<a><br><br>Rating: <?php echo $cheese->get_rating()?></a>
									<form >
										<select name="cheese_drop" size= '1px'>
										  <option value="5">5</option>
						  				  <option  value="4">4</option>
						  				  <option value="3">3</option>
						  			      <option value="2">2</option>
						  			      <option value="1">1</option>
										</select>
										<button id = "rate4">Rate</button>
									</form>
									
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="1.5" style= "width:100%">
							<tr>
							<td><center><h3>Cart</h3></center>
							

							<p><?php require 'market_action.php'?></p>
							</td>.
							</tr>
							<tr>
								<td>
								<p>Total :<?php echo $cart->apple()*$apple->get_price() +$cart->beer()*$beer->get_price() +$cart->water()*$water->get_price() + $cart->cheese()*$cheese->get_price() ?>$ </p>
								<br>
								
								<form>
									
										  
						  			<input type="radio" name="delivery" value="0">pick up (0 USD)</input>
						  		    <br><input type="radio" name = "delivery"  value="5">UPS (5 USD)</input>
						  		
									
									<center><input type="submit" name="Pay" value=Pay></input></center>
								</form>
								
								</td>

							</tr>
						</table>
						

					<td>
				</tr>
			</table>
		</form>
	</body>
</html>