<?php


$games = ['Mass Effect','Super Mario Bros','Zelda','Fallout','Metal Gear'];

//nowadays php sort
sort($games);
var_dump($games);
//nowadays php reverse sort
rsort($games);
var_dump($games);

usort($games,function($a,$b){
    var_dump('a: ' . $a,'b: ' . $b);
    return $b <=> $a;
    // In this example comparison is made with alphabetical order.
    // returns -1 if $b is less than $a
    // returns 0 if $b is equals than $a
    // returns 1 if $b is greater than $a
});

var_dump($games);

//imagine that we need to sort the array from the value that has less chars to the one that have more
usort($games,function($a,$b){
    var_dump('a: ' . $a,'b: ' . $b);
    return strlen($b) <=> strlen($a);
});
var_dump($games);

//OOP Example

class User
{
    protected $name;
    protected $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function name()
    {
        return $this->name;
    }
    public function age()
    {
        return $this->age;
    }
}

class UserCollection
{
    protected $users;
    public function __construct(array $users)
    {

        $this->users = $users;
    }
    public function users(){
        return $this->users;
    }
    public function sortBy($property)
    {
        usort($this->users,function($userOne,$userTwo) use ($property){
            return $userOne->$property() <=> $userTwo->$property();
        });
    }
}

$usersCollection = new UserCollection([
    new User('pepo',28),
    new User('marc',29),
    new User('marta',50),
    new User('jose',10)
]);

$usersCollection->sortBy('age');

var_dump($usersCollection->users());

$usersCollection->sortBy('name');

var_dump($usersCollection->users());
