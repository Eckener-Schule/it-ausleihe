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
