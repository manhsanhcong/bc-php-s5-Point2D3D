<!DOCTYPE html>
<html>
<body>
<?php
class Point2d
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX()
    {
        $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY()
    {
        $this->y;
    }
    public function getXY()
    {
        return [$this->x, $this->y];
    }
    public function setXY()
    {
        $this->x;
        $this->y;
    }
    public function toString()
    {
        echo $this->x . "</br>" . $this->y;
    }
}
class Point3d extends Point2d
{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ()
    {
        $this->z;
    }
    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }
    public function setXYZ()
    {
        $this->x;
        $this->y;
        $this->z;
    }
    public function toString()
    {
        echo $this->x . "</br>" . $this->y . "</br>" . $this->z;
    }
}
$point2d = new Point2d(5, 8);
$point2d->toString() . "</br>";
$point2d->getXY() . "</br>";
print_r($point2d->getXY());
$point3d = new Point3d(3, 6, 2);
$point3d->toString() . "</br>";
$point3d->getXYZ() . "</br>";
print_r($point3d->getXYZ());
?>
</body>
</html>