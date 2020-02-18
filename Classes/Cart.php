
<?php
require('Database.php');

/**
 * Description of Cart
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 * @author Leon Vagnoni
 */
class Cart {

 public function __construct() {
    /**
     * @param $devices
     * @param $name
     * adds a devices to the database 
     */
 }
public function addCart($devices, $name) {


    for($i=0; $i<$devices;$i++) {
        $insert = "INSERT INTO 'cart' ('cartID', 'deviceID', 'name') VALUES (". $cartID .", ". $devices[$i] .", ". $name .")";
        $params = array( 
            "devices" => $devices,
            "name" => $name,
        );
        $exporter = Database::getDbConnectiont();
        $exporter->executeQuery($insert, $params);
    }


    }

    /**
     * Check the cart about completeness
     * @param $cartID
     * searchs the typed cartID from the database
     */
public function checkTotality($cartID) {

    $select = "SELECT 'cartID', 'deviceID' FROM 'cart' WHERE 'cartID' = ". $cartID;
    $params = array( 
        "cardID" => $cartID,
    );
    $exporter = Database::getDbConnectiont();
    $exporter->executeQuery($select, $params);
}

    /**
     * Deletes cart from database
     * @param $cartID
     * delete the typed cartID from the database
     */
public function deleteCart($cartID){
 
    $params = array(
        "cardID" => $cartID,
    );

    $delete = "DELETE FROM 'cart' WHERE 'cartID' = ". $cartID;
    $exporter = Database::getDbConnectiont();
    $exporter->executeQuery($delete, $params);

}

    /**
     * Modifies the database entry of the cart
     * @param $device
     * @param $name
     * modifys the typed mType,device and name from the database
     */
public function modifyCart($mType, $device, $name){ //Modifies the database entry of the cart
    if($mType == "add") {
        $modify = "INSERT INTO 'cart' ('cartID', 'deviceID', 'name') VALUES ( ". $cartID .", ". $devices .", ". $name .")";
    }
    else {
        $modify = "DELETE FROM 'cart' WHERE 'devieID' = ". $deviceID;
    }
    $params = array( "mType" => $mType,
        "device" => $device,
        "name" => $name,
    );

    $exporter = Database::getDbConnectiont();
    $exporter->executeQuery($modify, $params);
}

}