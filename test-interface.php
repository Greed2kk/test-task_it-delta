<?php
interface iClown
{
    public function dance($name);
}

class Clown implements iClown
{

    public function dance($name)
    {
        echo "$name can Dance!";
    }

}

$clown = new Clown();
$clown->dance('Joker');

