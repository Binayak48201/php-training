<?php
require '../database/Connection.php';
require '../config.php';
require '../function.php';


class Teams
{
    public $name;
    public $member = [];

    public function __construct($name, $member = [])
    {
        $this->name = $name;
        $this->member = $member;
    }

    public function addMember($name)
    {
        return $this->member[] = $name;
    }
}

$collection_member =  new Teams('PHP');
$collection_member->addMember('JAKE');
dd($collection_member);
