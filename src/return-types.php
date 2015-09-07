<?php

class user{}

function getUser(){
    return new User;
}

function getUser2(){
    return [];
}
//returns user
var_dump(getUser());
//returns array
var_dump(getUser2());

function getUser3() : User{
    return new User;
}

function getUser4() : User{
    return [];
}
//returns user and the return type must be user
var_dump(getUser3());
//throws an exception because return type is not same as header
try{
    var_dump(getUser4());
}catch(TypeException $e){
    $errors[] = $e;
}

// moving to oop
// we can also define the return types on the interfaces
interface SomeInterface
{
    public function getUser():User;
}


// this should work perfectly
class SomeClass2 implements SomeInterface{
    public function getUser():User{
        return new User;
    }
}
(new SomeClass2)->getUser();


foreach ($errors as $error) {
    var_dump($error->getMessage().'<br/>');
}

//this will blow up as we are not using the header definition from the interface
class SomeClass implements SomeInterface{
    public function getUser(){
        return new User;
    }
}
