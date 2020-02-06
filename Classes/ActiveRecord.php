<?php
/**
 * Active Record is a design pattern 
 * that allows you to change data in a database by using an Object.
**/
abstract class ActiveRecord
{
    /**
     * it saves the record
     **/
    abstract public function save();
    /**
     * it deletes the record
     **/
    abstract public function delete();
    /**
     * it inserts the record
     **/
    abstract protected function insert();
    /**
     * it updates the record
     **/
    abstract protected function update();
     /**
     * @return a specific ID
     **/
    abstract static function load($id):ActiveRecord;
}
