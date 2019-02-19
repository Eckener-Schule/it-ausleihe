<?php
/**
 * Description of Cart
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 */
class Cart {

public $cartId;
public $devices; //Array of devices which are included in the cart
public $name;   //name of the cart

public function __construct() { 
mysqli_select_db($connection, $dbname);
//determine next cartId
$lastId = mysqli_query($connection, "SELECT COUNT(*) FROM Cart");
$nextId = $lastId + 1;
$this->cartId = $nextId; //borrowerID determined based on last db-entry	

//Build up array of devices
$cart = mysqli_query("SELECT * FROM 'Cart' WHERE cartID = 1");
}

// Create a new cart
public function addCart($devices, $name) {
    
}

public function checkTotality($devices) { //Check the cart about completeness 

}

public function deleteCart($cartID){ //Deletes cart from database

}

public function modifyCart($device, $name){ //Modifies the database entry of the cart

}

}

?>