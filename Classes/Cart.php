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

}

    /**
     * @param $devices
     * @param $name
     */
public function addCart($devices, $name) {
    $db = new mysqli('localhost', 'root', '', 'it-ausleihe');
    print_r($db->connect_error);

    if($db->connect_errno) {
        die('Es gibt ein Problem mit der Datenbank');
    }


    for($i=0; $i<$devices;$i++) {
        $insert = "INSERT INTO 'cart' ('cartID', 'deviceID', 'name') VALUES (". $cartID .", ". $devices[$i] .", ". $name .")";
        $db->query($insert);
    }

    }

    /**
     * Check the cart about completeness
     * @param $cartID
     */
public function checkTotality($cartID) {
    $db = new mysqli('localhost', 'root', '', 'it-ausleihe');
    print_r($db->connect_error);

    if($db->connect_errno) {
        die('Es gibt ein Problem mit der Datenbank');
    }
    $select = "SELECT 'cartID', 'deviceID' FROM 'cart' WHERE 'cartID' = ". $cartID;
    $db->query($select);
}

    /**
     * Deletes cart from database
     * @param $cartID
     */
public function deleteCart($cartID){
    $db = new mysqli('localhost', 'root', '', 'it-ausleihe');
    print_r($db->connect_error);

    if($db->connect_errno) {
        die('Es gibt ein Problem mit der Datenbank');
    }
    $delete = "DELETE FROM 'cart' WHERE 'cartID' = ". $cartID;
    $db->query($delete);

}

    /**
     * Modifies the database entry of the cart
     * @param $device
     * @param $name
     */
public function modifyCart($mType, $device, $name){ //Modifies the database entry of the cart
    $db = new mysqli('localhost', 'root', '', 'it-ausleihe');
    print_r($db->connect_error);

    if($db->connect_errno) {
        die('Es gibt ein Problem mit der Datenbank');
    }

    if($mType == "add") {
        $modify = "INSERT INTO 'cart' ('cartID', 'deviceID', 'name') VALUES ( ". $cartID .", ". $devices .", ". $name .")";
    }
    else {
        $modify = "DELETE FROM 'cart' WHERE 'devieID' = ". $deviceID;
    }
    $db->query($modify);
}

}

?>