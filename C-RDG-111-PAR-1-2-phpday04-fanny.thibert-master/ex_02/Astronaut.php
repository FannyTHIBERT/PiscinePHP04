<?php
class Astronaut {
    private $name;
    private $snacks;
    private $destination;
    private static $id=0;

    public function __construct($name="", $snacks=0, $destination=null, $_id=0)
    {
        $this->name = $name;
        $this->_id = self::$id++;
        echo "$this->name ready for launch !\n";
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getDestination()
    {
        return $this->destination;
    }

}

/*$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
echo $mutta->getId() . "\n";
echo $hibito->getId() . "\n";*/