<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getPerimeter() {
        return (($this->width + $this->height) * 2);
    }
    public function getArea() {
        return $this->width * $this->height;
    }

   public function display() {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height ."}";
   }
}
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width . "<br>";
echo $rectangle->height . "<br>";

$rectangle->width = 30 ;
$rectangle->height = 20 ;

echo $rectangle->width;
echo $rectangle->height ."<br>";

 echo $rectangle->getArea() . "<br>";
 echo $rectangle->getPerimeter() . "<br>";
 echo ("Your Rectangle" . $rectangle->display());
?>
</body>
</html>