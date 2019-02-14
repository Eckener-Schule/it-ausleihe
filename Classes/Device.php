<?php
/**
 * Description of Device
 *
 * @author jessen
 */
class Device {
    public $deviceID; // numer of the device
    public $type;   // type of the device
    public $name; // name of the device
    public $brand;  // brand of the device
    public $qrCode; // QR-Code of the device
    public $cardId; //number of the cart
    
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
    public function addDevice($deviceID, $type, $name, $brand, $qrCode){
        
    }
    
    /***
     * Delete existed devices.
     */
    public function deleteDevice($deviceId){
        
    }
    
    /***
     * Change the type, name, brand or qrCode of the devices.
     */
    public function modifyDevice($type, $name, $brand, $qrCode) {
        
    }
}
