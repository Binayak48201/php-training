<?php
class Teams
{
    private static $name = 'test';
    public $member = [];

    public function __construct($name, $member = [])
    {
        $this->name = $name;
        $this->member = $member;
    }
    public static function addMember()
    {
        return self::$name;
        // return $this->member[] = $name;
    }
}
$object = Teams::$name;
var_dump($object);
// $object =  new Teams('PHP');
// $collection_member->addMember('JAKE');
$a = [1,2,3];

// array_filter($a );

foreach ($a as $value) {
         var_dump('test');
}
array_map(function($value){
    var_dump('test');
}, $a );

$





