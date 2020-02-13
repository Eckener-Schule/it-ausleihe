<?php

/**
 * Description of Device
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 */
class Device extends ActiveRecord
{
    /**
     * Unique id of the device
     * @var int $deviceID
     */
    public $deviceID;

    /**
     * Type of the device
     * @var string $type
     */
    public $type;

    /**
     * Name of the device
     * @var string $name
     */
    public $name;

    /**
     * Brand of the device
     * @var string $brand
     */
    public $brand;

    /**
     * Qr code of the device
     * @var int $qrCode
     */
    public $qrCode;

    /**
     * Id of the cart
     * @var int $cardId
     */
    public $cardId;

    /**
     * Link to show detail
     * @var string $link
     */
    public $link;

    /***
     * Create a new object from device.
     * @param int $deviceID
     * @param string $type
     * @param string $name
     * @param int $cardId
     * @param string $brand
     * @param int $qrCode
     */
    public function __construct($deviceID, $type = "", $name = "", $cardId = 0, $brand = "", $qrCode = 0)
    {
        $this->setDeviceID((int)$deviceID);
        $this->setType($type);
        $this->setName($name);
        $this->setBrand($brand);
        $this->setQrCode($qrCode);
        $this->setCardId((int)$cardId);
    }

    /**
     * @return int
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * @param int $deviceID
     */
    public function setDeviceID(int $deviceID)
    {
        $this->deviceID = $deviceID;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    /**
     * @param int $qrCode
     */
    public function setQrCode(int $qrCode)
    {
        $this->qrCode = $qrCode;
    }

    /**
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     */
    public function setCardId(int $cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }

    /**
     * Saves the object into the database
     */
    public function save()
    {
        // Updates the database
        if ($this->update() == 0) {
            // If no object was updated insert a new one
            $this->insert();
        }
    }

    /**
     * Deletes the device from the database by its id
     */
    public function delete()
    {
        $database = Database::getDbConnection();
        $params = [
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'DELETE FROM device WHERE 1 = 1 AND deviceID = :deviceID;';
        $database->executeQuery($query, $params);
    }

    /**
     * Inserts the object into the database
     */
    protected function insert()
    {
        $database = Database::getDbConnection();
        $params = [
            ":type" => $this->getType(),
            ":name" => $this->getName(),
            ":brand" => $this->getBrand(),
            ":qrCode" => $this->getQrCode(),
            ":cartID" => $this->getCardId(),
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'INSERT INTO device (`deviceID`, `name`, `type`, `brand`, `qrCode`, `cartID`) VALUES (:deviceID, :name, :type, :brand, :qrCode, :cartID);';
        $database->executeQuery($query, $params);

    }

    /**
     * Updates the object inside the database and returns the affected rows
     * @return int
     */
    protected function update()
    {
        $database = Database::getDbConnection();
        $params = [
            ":type" => $this->getType(),
            ":name" => $this->getName(),
            ":brand" => $this->getBrand(),
            ":qrCode" => $this->getQrCode(),
            ":cartID" => $this->getCardId(),
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'UPDATE device SET type = :type, name = :name, brand = :brand, qrCode = :qrCode, cartID = :cartID WHERE 1 = 1 AND deviceID = :deviceID;';
        $result = $database->executeQuery($query, $params);

        // Return count of the affected rows
        return $result->rowCount();
    }

    /**
     * Loads an new object by the id
     * @param $id
     * @return ActiveRecord
     */
    static function load($id): ActiveRecord
    {
        $database = Database::getDbConnection();
        $params = [
            ":deviceID" => $id,
        ];
        $query = 'SELECT deviceID, type, name, brand, qrCode, cartID FROM device WHERE 1 = 1 AND deviceID = :deviceID;';
        $result = $database->executeQuery($query, $params);

        // Check if the device exists inside the database
        if ($result->rowCount() > 0) {
            $device = $result->fetch(PDO::FETCH_ASSOC);
            // Return loaded device
            return new Device(
                $device["deviceID"],
                $device["type"] ?? "",
                $device["name"] ?? "",
                $device["cardId"] ?? 0,
                $device["brand"] ?? "",
                $device["qrCode"] ?? 0
            );
        }

        // Return dummy device
        return new Device(0);
    }
}
