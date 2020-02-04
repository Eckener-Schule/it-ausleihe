<?php
abstract class ActiveRecord
{
    abstract protected function save();
    abstract protected function delete();
    abstract protected function insert();
    abstract protected function update();
    abstract protected function load();
}