<?php

/**
 * Description of Loan
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 * @author Jan-Philip Link
 */
class Loan
{

    public $loanId;
    public $device; //Object of class Device
    public $cart; //Object of class Cart
    public $borrower; //Object of class Borrower
    public $loanReturnTime; //Date and time when devices is returned
    public $loanTime; //Date and time when device is loaned
    public $comment; // Comment of a loan
    /**
     * @var object $connection stores the database connection given in constructor
     */
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
        /*
        $this->loanId = 1; //dummy

        //If-statement to check whether there will be borrowed a cart or a single device
        //Checkbox?!
        if (isset($_POST['c1'])) { //Checking checkbox1 - single device
            $this->device = new Device();
        } elseif (isset($_POST['c2'])) { //Checking checkbox2 - cart
            $this->cart = new Cart();
        }
        $this->borrower = new Borrower();
        */

//$this->loanReturnTime is initial because the device/cart is not returned yet.

//$this->loanTime = //Add current datetime-stamp

    } //End of method __construct()


    /**
     * @method addLoan used to store a new loan into database
     * @param int $deviceID the id of the device
     * @param int $borrowerID the id of the borrower
     * @param int cartID the id of the cart if a cart is lend
     * @param string $comment an optional comment for the loan
     * @param string $loanTime the start time of the loan
     * @param string $loanReturnTime the end of the loan
     * @return void
     */
    public function addLoan($deviceID, $borrowerID, $comment = '', $loanTime, $duration)
    {

        // create DateTime objects & create loan duration from loan & return time
        $startTimeObj   = date_create($loanTime);
        //$returnTimeObj  = date_create($loanReturnTime);
        // create strings for the query params
        $startTime      = $startTimeObj->format('Y-m-d H:i:s');
        //$returnTime     = $returnTimeObj->format('Y-m-d H:i:s');
        // difference between the loan time and the return time will be the duration in hours
        //$diff           = $startTimeObj->diff($returnTimeObj);
        //$duration       = $diff->format('%h');

        // the query to insert given data
        $query =    "INSERT INTO `loan` 
                    (
                                    `loanID`, 
                                    `borrowerID`, 
                                    `startTime`, 
                                    `duration`, 
                                    `comment`
                    ) VALUES (
                                    NULL, 
                                    :borrowerID, 
                                    :startTime, 
                                    :duration, 
                                    :comment
                    )";
        // array of params for prepared statement
        $params = [
            ':borrowerID'   => $borrowerID,
            ':startTime'    => $startTime,
            ':duration'     => $duration,
            ':comment'      => $comment
        ];

        $this->connection->executeQuery($query, $params);
        return;
    }

    public function returnLoan($deviceId, $cartId)
    {

    } //End of method returnLoan()

    public function deleteLoan($loanID)
    {

    } //End of method deleteLoan()

    public function deleteBorrowerData($days)
    {

    } //End of method deleteBorrowerData()

}
