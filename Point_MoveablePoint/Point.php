<?php
class Point {
    public $x;
    public $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }
    public function setXY($x, $y) {
        $this->setX($x);
        $this->setY($y);
    }
    public function getXY(){
        $arr = array("x" => $this->getX(), "y" => $this->getY());
        return $arr;
    }
    public function toString() {
        return "Point co toa do x la: ". $this->getX(). "co oa do y la: ". $this->getY();
    }
}
