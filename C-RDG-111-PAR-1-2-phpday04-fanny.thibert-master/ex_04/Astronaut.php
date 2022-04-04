<?php
include_once("Mars.php");
class Astronaut {
    private $name;
    private $snacks;
    private $destination;
    private static $id;

    public function __construct($name="", $_snacks=0, $destination=null, $_id=0)
    {
        $this->name = $name;
        $this->destination = $destination;
        $this->_id = self::$id++;
        echo "$this->name ready for launch !\n";
    }
    public function __destruct()
    {
        if($this->destination!==null)
        {
            echo "$this->name: Mission aborted !\n";
        }else{
            echo "$this->name: I may have done nothing, but I have $this->snacks Mars to eat at least !\n";
        }
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getDestination()
    {
        return $this->destination;
    }
    public function getSnacks()
    {
        return $this->_snacks;
    }
    public function doActions($opt=null)
    {
        if($opt==null)
        {
            echo "$this->name: Nothing to do.\n";
        } elseif(get_class($opt)=="planet\Mars"){
            echo "$this->name: started a mission !\n";
            $this->destination = $opt;
        } elseif (get_class($opt)=="chocolate\Mars"){
            echo "$this->name is eating mars number " . $opt->getId() . ".\n";
            $this->snacks++;
        }
    }
}

/*$Muu = new Astronaut("pol");
$a = new planet\Mars();
$Muu->doActions($a);
$b = new planet\Mars();
$Muu->doActions($b);*/



