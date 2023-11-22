<?php

namespace DemoHashSetSerialization\Interfaces;

interface ISerializable
{
    public function __serialize() : array;
    public function __unserialize(array $data) : void;
}