
<?php

/**
 * Description of Cart
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 * @author Leon Vagnoni
 */
class Cart extends ActiveRecord{

    private $database;
    private $name;
    private $cardID;

 public function __construct()
 {
    $this->database = Database::getDbConnection();
 }

 public function save()
 {   
     if($this->getCardID() === null) {
         $this->insert();
     }
     else {
         $this->update();
     }
 }
/**
     * Updates the Cart in the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::update()
     */
    protected function update()
    {
        $query = "UPDATE cart
            SET name = :name
            WHERE cardID = :cardID;";
        $params = array(
            ':name' => $this->name, 
            ':cardID' => $this->cardID
        );
        
        $this->database->executeQuery($query, $params);
    }

      /**
     * Inserts the Cart into the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::insert()
     */
    protected function insert()
    {
        $query = "INSERT INTO cart (name) VALUES (:name);";
        $params = array(
            ':name' => $this->name, 
        );
        
        $this->database->executeQuery($query, $params);
    }

     /**
     * Deletes the Cart in the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::delete()
     */
    public function delete()
    {
        $query = "DELETE FROM cart WHERE cardID = :cardID;";
        $params = array(
            ':cardID' => $this->cardID
        );
        
        $this->database->executeQuery($query, $params);
    }

public function addCart($devices, $cartID, $name) {

    $insert = "INSERT INTO 'cart' ('cartID', 'name') VALUES (:cardID, :name)";
    $paramsInsert = array( 
        "cartID" => $cardID,
        "name" => $name
    );
    for($i=0; $i<$devices;$i++) {
        $devices[i];

        $update = "UPDATE 'device' set 'cardID' where 'deviceID' = :".$devices[i].";";
        $paramsUpdate = array( 
            "devices" => $devices
        );
        $exporter = Database::getDbConnection();
        $exporter->executeQuery($update, $paramsInsert);
        
    }
    $exporter->executeQuery($insert , $paramsUpdate);


    }

    /**
     * Check the cart about completeness
     * @param $cartID
     * searchs the typed cartID from the database
     */
public function checkTotality($cartID) {

    $select = "SELECT 'cartID' FROM 'cart' WHERE 'cartID' = :".$cardID.";";
    $params = array( 
        "cardID" => $cartID,
    );
    $exporter = Database::getDbConnection();
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

    $delete = "DELETE FROM 'cart' WHERE 'cartID' = :".$cardID.";";
    $exporter = Database::getDbConnection();
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
        $modify = "INSERT INTO 'cart' ('cartID', 'name') VALUES ( :cartID, :name )".";";
    }
    else {
        $modify = "DELETE FROM 'device' WHERE 'devieID' = ". $deviceID .";";
    }
    $params = array( "mType" => $mType,
        "device" => $device,
        "name" => $name,
    );

    $exporter = Database::getDbConnection();
    $exporter->executeQuery($modify, $params);
}

    /**
     * @return int - the ID of the Cart
     */
    public function getBorrowerId() 
    {
        return $this->cardId;
    }
    
    /**
     * Sets the firstname of the Cart
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string - the firstname of the Cart
     */
    public function getName()
    {
        return $this->name;
    }
    
    
    
}