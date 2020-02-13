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
     * @var string $qrCode
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
     * @param string $qrCode
     */
    public function __construct($deviceID, $type, $name, $cardId, $brand = "", $qrCode = "")
    {
        $this->setDeviceID($deviceID);
        $this->setType($type);
        $this->setName($name);
        $this->setBrand($brand);
        $this->setQrCode($qrCode);
        $this->setCardId($cardId);
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
     * @param string $qrCode
     */
    public function setQrCode(string $qrCode)
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

    public function save()
    {
        if($this->update() == 0) {
            $this->insert();
        }
    }

    public function delete()
    {
        $database = new Database();
        $params = [
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'DELETE FROM device WHERE 1 = 1 AND deviceID = :deviceID;';
        $database->executeQuery($query,$params);
    }

    protected function insert()
    {
        $database = new Database();
        $params = [
            ":type" => $this->getType(),
            ":name" => $this->getName(),
            ":brand" => $this->getBrand(),
            ":qrCode" => $this->getQrCode(),
            ":cartID" => $this->getCardId(),
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'INSERT INTO device (`deviceID`, `name`, `type`, `brand`, `qrCode`, `cartID`) VALUES (:deviceID, :name, :type, :brand, :qrCode, :cartID);';
        $database->executeQuery($query,$params);

    }

    protected function update()
    {
        $database = new Database();
        $params = [
            ":type" => $this->getType(),
            ":name" => $this->getName(),
            ":brand" => $this->getBrand(),
            ":qrCode" => $this->getQrCode(),
            ":cartID" => $this->getCardId(),
            ":deviceID" => $this->getDeviceID()
        ];
        $query = 'UPDATE device SET type = :type, name = :name, brand = :brand, qrCode = :qrCode, cartID = :cartID WHERE 1 = 1 AND deviceID = :deviceID;';
        $result = $database->executeQuery($query,$params);
        return $result->rowCount();
    }

    static function load($id): ActiveRecord
    {
        // TODO: Implement load() method.
    }
}
