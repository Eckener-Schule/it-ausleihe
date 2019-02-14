<?php
/**
 * Description of Loan
 *
 * @author jessen, petersen
 */
class Loan {

public $loanId;
public $device; //Object of class Device
public $cart; //Object of class Cart
public $borrower; //Object of class Borrower
public $loanReturnTime; //Date and time when devices is returned
public $loanTime; //Date and time when device is loaned


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

public function returnLoan() {


} //End of method returnLoan()

public function modifyLoan(){


} //End of method modifyLoan()


public function deleteBorrowerData() {


} //End of method deleteBorrowerData()

}

?>