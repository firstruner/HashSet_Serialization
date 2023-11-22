<?php

namespace DemoHashSetSerialization\Interfaces;

interface IHashSet
{
    public function Add(IHashable $item) : bool;
    public function GetAll($clone = false) : array;
}