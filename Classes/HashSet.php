<?php

namespace DemoHashSetSerialization\Classes;

use DemoHashSetSerialization\Interfaces\IHashSet;
use DemoHashSetSerialization\Interfaces\IHashable;
use Iterator;

final class HashSet implements
    IHashSet
    // [[[[[[[[[[[[[[[[[[[[   5   ]]]]]]]]]]]]]]]]]]]]
    ,
    Iterator
{
    private $array = array();

    function __construct()
    {
    }

    private function find(IHashable $_elem): bool
    {
        foreach ($this->array as $elem) {
            if ($elem->getHash() == $_elem->getHash())
                return true;
        }

        return false;
    }

    public function Add(IHashable $item): bool
    {
        if ($this->find($item))
            return false;

        array_push($this->array, $item);
        return true;
    }

    public function GetAll($clone = false): array
    {
        return $clone
            ? clone $this->array
            : $this->array;
    }

    // [[[[[[[[[[[[[[[[[[[[   5   ]]]]]]]]]]]]]]]]]]]]
    private int $position = 0;

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}
