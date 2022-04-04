<?php
namespace chocolate;
class Mars {
    private static $id=0;
    public function __construct($_id=0)
    {
        $this->_id = self::$id++;
    }
    public function getId()
    {
        return $this->_id;
    }
}
namespace planet;
class Mars{
    private $size;
    public function __construct($size=null)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
}
