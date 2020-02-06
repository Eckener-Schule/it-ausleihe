<?php
abstract class ActiveRecord
{
    abstract public function save();
    abstract public function delete();
    abstract protected function insert();
    abstract protected function update();
    abstract static function load($id):ActiveRecord;
}