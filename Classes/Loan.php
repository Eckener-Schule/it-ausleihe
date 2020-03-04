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
    } //End of method __construct()


    /**
     * @method addLoan used to store a new loan into database
     * @param int $deviceID the id of the device
     * @param int $borrowerID the id of the borrower
     * @param int $cartID the id of the cart if a cart is lend
     * @param string $comment an optional comment for the loan
     * @param int $duration the amount of days that loan will be stored, defaults to 730 e.g. 2 years
     * @return void
     */
    public function addLoan($deviceID, $cartID, $borrowerID, $comment = '', $duration = 730)
    {

        // create DateTime object for loan
        $startTime = new DateTime('NOW');
        $timeString = $startTime->format('Y-m-d H:i:s');

        // the query to insert given data
        $loanQuery =    "INSERT INTO `loan` 
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
                        );";
        // array of params for prepared statement
        $loanParams = [
            ':borrowerID'   => $borrowerID,
            ':startTime'    => $timeString,
            ':duration'     => $duration,
            ':comment'      => $comment
        ];
        $result = $this->connection->executeQuery($loanQuery, $loanParams);
        
        // validating only deviceID OR cartID is set & build the corresponding query
        if(isset($deviceID) && $deviceID !== NULL)
        {
            $loanDeviceParams = [
                'deviceID'   => $deviceID
            ];
        } 
        elseif(isset($cartID) && $cartID !== NULL)
        {
            $loanDeviceParams = [
                'cartID'     => $cartID
            ];
        } else{
            echo 'Params can only contain deviceID OR cartID, both cannot be set or NULL!';
            return false;
        }

        $loanDeviceQuery = "INSERT INTO `loan_device`
                        (
                                    `loanID`,
                                    `".key($loanDeviceParams)."`
                        ) VALUES (
                                    LAST_INSERT_ID(),
                                    :".key($loanDeviceParams)."
                        );";
        
        $result = $this->connection->executeQuery($loanDeviceQuery, $loanDeviceParams);

        return;
    }

    /**
     * @method returnLoan updates the db row with the time of returning the device or cart
     * @param int $deviceId id of the retunred device
     * @param int $cartId id of the returned cart
     */
    public function returnLoan($deviceId, $cartId)
    {
        // initialising return time with current datetime
        $dateTime = new DateTime('NOW');
        $returnTime = $dateTime->format('Y-m-d H:i:s');

        // validating only deviceID OR cartID is set & build the corresponding query
        if(isset($deviceID) && $deviceID !== NULL)
        {
            $params = [
                ':returnTime'   => $returnTime,
                'deviceID'      => $deviceID
            ];
        } 
        elseif(isset($cartID) && $cartID !== NULL)
        {
            $params = [
                ':returnTime'   => $returnTime,
                'cartID'        => $cartID
            ];
        } 
        else
        {
            echo 'Params can only contain deviceID OR cartID, both cannot be set or NULL!';
            return false;
        }

        // building query & looking for the not yet returned loan
        $query = "  UPDATE loan
                    SET 		loan.returnTime = :returnTime
                    WHERE 		loan.loanID = (
                        SELECT    	loan_device.loanID
                        FROM      	loan_device 
                        WHERE 	  	loan_device.".key($params)." = :".key($params)."
                        ORDER BY  	loan_deviceID DESC
                        LIMIT     1
                    )
                    AND loan.returnTime = '0000-00-00 00:00:00.000000'";

        $this->connection->executeQuery($query, $params);
    } //End of method returnLoan()

    public function deleteLoan($loanID)
    {

    } //End of method deleteLoan()

    public function deleteBorrowerData($days)
    {

    } //End of method deleteBorrowerData()

}
