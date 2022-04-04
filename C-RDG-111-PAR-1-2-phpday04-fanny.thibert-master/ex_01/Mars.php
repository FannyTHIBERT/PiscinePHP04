<?php
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

/*$rocks = new Mars();
$lite = new Mars();
$snack = new Mars();
echo $lite->getId() . "\n";
echo $rocks->getId() . "\n";
echo $snack->getId() . "\n";*/
