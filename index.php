<?php
class Product
{

    private $price;
    private $expDate;
    public function __construct($price, $expDate)
    {

        $this->setPrice($price);
        $this->setExpDate($expDate);
    }

    public function setPrice($price)
    {
        $this->price = $price;

    }
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

    }
    public function getExpDate()
    {
        return $this->expDate;

    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getHtmlPrice()
    {
        return $this->price;
    }

}

class Category extends Product
{
    private $categoryName;
    private Type $nameType;
    public function __construct(Type $nameType, $categoryName, $price, $expDate)
    {
        $this->setCategoryName($categoryName);
        parent::__construct($price, $expDate);
        $this->setNameType($nameType);

    }
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;
    }
    public function getNameType()
    {
        return $this->nameType->getName();
    }

    public function getHtml()
    {
        return "<h1>" . $this->getNameType() . "(" . $this->getCategoryName() . ")" . " " . "Price : " . $this->getHtmlPrice() . " " . $this->getExpDate() . "</h1>";
    }

}

class Type
{
    private $name;
    public function __construct($name)
    {
        $this->setName($name);
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
$type1 = new Type("cuccia");
$product1 = new Category($type1, "gatto", 2.40, null);
echo $product1->getHtml();



// date_default_timezone_set('Europe/Warsaw');
// $from = strtotime('2023-01-23');
// $today = time();
// $difference = $today - $from;
// echo floor($difference / 86400);