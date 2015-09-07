<?php

require 'vendor/autoload.php';

use App\Classes\{
    Animal,
    Person,
    Foo\Bar
};


var_dump(new Animal);
var_dump(new Person);
var_dump(new Bar);
