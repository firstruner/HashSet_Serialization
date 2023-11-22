# RDEV

Bienvenu dans cette session RDEV !

URL : https://github.com/firstruner/HashSet_Serialization

## HashSet_Serialization

// Cette session se déroulera en 5 phases
// Au menu : du checksum, du hashage, de la reflection,
// de l'héritage et de l'implémentation, le Hashset
// et surtout la serialization

### [[[[[[[[[[[[[[[[[[[[   1   ]]]]]]]]]]]]]]]]]]]]
{{{{ Mise en place d un système de hashage }}}}
// Créons une interface contenant une fonction getHash et retournant un string
> Goto Interfaces/IHashable

// Puis créons une class implémentant cette interface
> Goto Classes\People

// On instancie une classe
> Goto Program.php

### [[[[[[[[[[[[[[[[[[[[   2   ]]]]]]]]]]]]]]]]]]]]
{{{{ Création du HashSet de base }}}}
// Créons une interface pour notre HashSet qui contiendra la description
// de 2 méthodes Add et GetAll
> Goto Interfaces\IHashSet

// Créons notre class HashSet comme non héritable
> Goto Classes\HashSet

// Et instancions plusieurs classe
> Goto Program.php

### [[[[[[[[[[[[[[[[[[[[   3   ]]]]]]]]]]]]]]]]]]]]
{{{{ Mise en place de la serialization }}}}
// Passons désormais à la sérialization

// Ajoutons alors une nouvelle interface que nous nommeront ISerializable
// dans laquelle nous allons ajouter nos 2 méthodes et implémentons la dans
// notre classe People
> Goto Interfaces\ISerializable
// .
> Goto Classes\People

### [[[[[[[[[[[[[[[[[[[[   4   ]]]]]]]]]]]]]]]]]]]]
{{{{ Clean Code }}}}
// N'oubliez pas une chose : le Clean Code
> Goto Classes\People

### [[[[[[[[[[[[[[[[[[[[   5   ]]]]]]]]]]]]]]]]]]]]
{{{{ Evolution du HashSet }}}}
// Nous sommes dans l'étape précédente entrer dans une
// phase de simplification du code.

> Goto Classes\HashSet

### [[[[[[[[[[[[[[[[[[[[   Conclusion   ]]]]]]]]]]]]]]]]]]]]
// Nous avons donc un ensemble de classe complet, et facilement utilisable
// Si nous voulions poussez le bouchon plus loin, nous pourrions utiliser
// des classes abstraites sur HashSet pour les méthodes d'itération
// et l'ensemble des des méthodes de People mais cela
// n'aurait de sens que si plusieurs classes devait avoir
// les mêmes méthodes, par exemple mettre en place les mêmes
// processus pour des classes : client, article, etc...
{{{{ FIN }}}}
