<?php
/**
 * Description of Loan
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 */
class Loan {

public $loanId;
public $device; //Object of class Device
public $cart; //Object of class Cart
public $borrower; //Object of class Borrower
public $loanReturnTime; //Date and time when devices is returned
public $loanTime; //Date and time when device is loaned
public $comment;    // Comment of a loan


public function __construct() {
$this->loanId = 1; //dummy

//If-statement to check whether there will be borrowed a cart or a single device
//Checkbox?!
if (isset($_POST['c1'])) { //Checking checkbox1 - single device
$this->device = new Device();
}
elseif (isset($_POST['c2'])) { //Checking checkbox2 - cart
$this->cart = new Cart();
}

$this->borrower = new Borrower();

//$this->loanReturnTime is initial because the device/cart is not returned yet.

//$this->loanTime = //Add current datetime-stamp



} //End of method __construct()


// Add a loan
public function addLoan($deviceID, $borrowerID, $cartID, $comment) {

}
     
public function returnLoan($deviceId, $cartId) {


} //End of method returnLoan()

public function deleteLoan($loanID){


} //End of method deleteLoan()


public function deleteBorrowerData($days) {


} //End of method deleteBorrowerData()

}

?>