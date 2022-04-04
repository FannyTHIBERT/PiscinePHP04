<?php
namespace planet\moon;
include("Mars.php");
class Phobos{
    private $mars=null;
    public function __construct($mars)
    {
        if($mars instanceof \planet\Mars)
        {
            $this->mars = $mars;
            echo "Phobos placed in orbit.\n";
        }
        else
        {
            echo "No planet given.\n";
        }
    }
    public function getMars()
    {
        return $this->mars;
    }
}


