<?php

//if you want to avoid that php tries to casts received parameters to typehinted types
//declare(strict_types=1);

var_dump('IT WORKS');

// scalar typhint
function setAge(int $age){
    var_dump($age);
}

// bool typehint
function setIsValid(bool $isValid){
    var_dump($isValid);
}

setAge(8); // should pass
setAge('8'); // should try to cast it to int

try{
    setAge('adasdas8'); // should throw a typehint exception
}catch(TypeException $e){
    $errors[]= $e;
}

setIsValid('adasdas8'); // tanslates string to bool (true)
setIsValid(1); // bool (true)
setIsValid(0); // bool (false)
setIsValid(-1); // bool (true)

try{
    setIsValid([]); // should throw a typehint exception
}catch(TypeException $e){
    $errors[]= $e;
}

foreach($errors as $error)
{
    echo $error->getMessage().'<br/>';
}

