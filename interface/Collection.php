<?php



class Collection implements Countable, jsonSerializable
{

    protected $items = [];


    public function __set($key, $value){

        echo "{$key} = {$value}";

        return $this->set($key, $value);
    }


    public function __get($value){

        echo "$value";

        return $this->get($value);
    }



    public function __call($func, $arg){

        echo $func. ' hasebeen called with argumanet ' .implode(', ', $arg);
    }



    public function add($value){

        $this->items[] = $value;
    }


    public function get($key){

        return array_key_exists($key, $this->items)? $this->items[$key]: null;
    }


    public function set($key, $value){

        $this->items[$key] = $value;
    }


    public function jsonSerialize(){

        return json_encode($this->items);
    }


    public function count(){

        return count($this->items);
    }


    public function all(){

        return $this->items;
    }

}