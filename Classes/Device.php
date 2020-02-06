<?php

/**
 * Description of Device
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 */
class Device
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
     */
    public function __construct() {
        $this->deviceID = $_POST['C1'];
        $this->type = $_POST['C2'];
        $this->name = $_POST['C3'];
        $this->brand = $_POST['C4'];
        $this->qrCode = $_POST['C5']; 
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

    /***
     * Add new devices.
     */
    public function addDevice($type, $name, $brand, $qrCode, $link)
    {

    }

    /***
     * Delete existed devices.
     */
    public function deleteDevice($deviceId)
    {

    }

    /***
     * Change the type, name, brand or qrCode of the devices.
     */
    public function modifyDevice($type, $name, $brand, $qrCode, $link)
    {

    }
}
