<?php
/**
 * Description of Cart
 *
 * @author petersen
 */
class Cart {

public $cartId;
public $devices; //Array of devices which are included in the cart

public function __construct() { 
mysqli_select_db($connection, $dbname);
//determine next cartId
$lastId = mysqli_query($connection, "SELECT COUNT(*) FROM Cart");
$nextId = $lastId + 1;
$this->cartId = $nextId; //borrowerID determined based on last db-entry	

//Build up array of devices
$cart = mysqli_query("SELECT * FROM 'Cart' WHERE cartID = 1");
}

public function checkTotality() { //Check the cart about completeness 

}

public function deleteCart(){ //Deletes cart from database

}

public function modifyCart(){ //Modifies the database entry of the cart

}

}

?>