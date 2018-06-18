<?php
// Your code here!
class MySmartphone {
    private $brand = '';
    private $color;
    public static function buyWhitePhone($brand) {
        return new self($brand, 'white');
    }
    public static function buyBlackPhone($brand) {
        return new self($brand, 'black');
    }
    private function __checkIf($brand, $color) {
        $this->setBrand($brand);
        $this->color = $color;
    }
    public function setBrand($brand) {
        $this->name = (string)filter_var($brand);
    }
    public function getBrand() {
        return $this->name;
    }
    public function getColor() {
        return $this->color;
    }
}
$a = MySmartphone::buyWhitePhone('AQUOS');
echo $a->getColor();
?>
