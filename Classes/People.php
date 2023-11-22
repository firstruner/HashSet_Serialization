<?php

namespace DemoHashSetSerialization\Classes;

use DemoHashSetSerialization\Interfaces\IHashable;

// [[[[[[ 3 ]]]]]]
use DemoHashSetSerialization\Interfaces\ISerializable;

class People implements IHashable
    // [[[[[[ 3 ]]]]]]
    , ISerializable
{
    public $nom = "";
    public $prenom = "";
    private $id = 0;

    function __construct($n, $p)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->id = rand(20, 50); // un id aléatoire entre 20 et 50
    }

    private function getValues()
    {
        $reflection = new \ReflectionClass($this);
        $vars = array_keys($reflection->getdefaultProperties());

        $arrayKey = array();
        foreach ($vars as $key)
            array_push($arrayKey, $key);

        sort($arrayKey);

        $output = "";
        foreach ($arrayKey as $key)
            $output .= $key . "=" . $this->$key . ";";
        return $output;
    }

    public function getHash() : string
    {
        return hash('sha256', $this->getValues());
    }

    // [[[[[[ 3 ]]]]]]
    public function __serialize() : array
    {
        $reflection = new \ReflectionClass($this);
        $vars = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

        $arrayKey = array();
        foreach ($vars as $key)
            array_push($arrayKey, $key->name);
        sort($arrayKey);
        
        $output = array();
        foreach ($arrayKey as $key)
            array_push($output, [$key => $this->$key]);
        return $output;
    }

    public function __unserialize(array $data) : void
    {
        foreach($data as $item => $itemValue)
            if (gettype($itemValue) == "array")
            {
                foreach ($itemValue as $key => $value)
                    $this->$key = $value;
            }
            else
            {
                $this->$item = $itemValue;
            }
        
    }

    //[[[[[[[[[[[[[[[[[[[[   4   ]]]]]]]]]]]]]]]]]]]]
    private function getInstancesValues(bool $serialization)
    {
        $reflection = new \ReflectionClass($this);
        $vars = $reflection->getProperties(
            $serialization
            ? \ReflectionProperty::IS_PUBLIC
            : null);

        $arrayKey = array();
        foreach ($vars as $key)
            array_push($arrayKey, $key->name);
        sort($arrayKey);
        
        $output = array();

        foreach ($arrayKey as $key)
            array_push($output,
                $serialization
                ? [$key => $this->$key]
                : $key . "=" . $this->$key . ";");
        
        return $output;
    }
}