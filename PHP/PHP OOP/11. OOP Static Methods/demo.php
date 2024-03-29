<?php

class A
{
    public static function B()
    {
        echo "Hello World!";
    }
}

A::B();
echo "<br>";

class greeting
{
    public static function welcome()
    {
        echo "Hello World";
    }

    public function __construct()
    {
        self::welcome();
    }
}

new greeting();

class class1
{
    public static function welcome()
    {
        echo " <br> hello world";
    }
}

class class2
{
    public static function message()
    {
        class1::welcome();
    }
}

$obj = new class2();
echo $obj->message();


class domain
{
    protected static function getWebsiteName()
    {
        return "<br> W3Schools.com";
    }
}

class domainW3 extends domain
{
    public $websiteName;
    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
        // $this->websiteName = domain::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

?>