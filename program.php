<?php

use DemoHashSetSerialization\Classes\
    {
        People,
        HashSet
    };

// >> 1 <<
$p1 = new People("HALEN", "Van");

echo $p1->getHash();


// >> 2 <<
$p1 = new People("HALEN", "Van");
$p2 = new People("PAGNEUL", "Marcel");
$p3 = new People("BOBIN", "Matthieu");
$p4 = new People("HONNOLD", "Alex");
$p5 = new People("GRIFFIN", "Mike");
$p6 = new People("PAGNEUL", "Marcel");

$hashSet = new HashSet();
$hashSet->Add($p1);
$hashSet->Add($p2);
$hashSet->Add($p3);
$hashSet->Add($p4);
$hashSet->Add($p5);
$hashSet->Add($p6);

print_r($hashSet->GetAll());