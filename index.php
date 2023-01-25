<?php
class Product
{

    private $price;
    public function __construct($price)
    {

        $this->setPrice($price);
    }

    public function setPrice($price)
    {
        $this->price = $price;

    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getHtmlPrice()
    {
        return "<h2>" . $this->price . "</h2>";
    }

}

class Category extends Product
{
    private $categoryName;
    private Type $nameType;
    public function __construct(Type $nameType, $categoryName, $price)
    {
        $this->setCategoryName($categoryName);
        parent::__construct($price);
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
        return $this->nameType;
    }

    public function getHtml()
    {
        return "<h1>" . $this->setNameType() . "(" . $this->setCategoryName() . ")" . " " . "Price : " . $this->getHtmlPrice() . "</h1>";
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
$product1 = new Category($type1, "gatto", 2.40);
echo $product1->getHtml();