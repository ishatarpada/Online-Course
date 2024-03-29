<?php

trait test {
    public function hello() {
        echo "Say Hello";
    }
}

trait test1 {
    public function hello() {
        echo "heyy everyOne";
    }
}

class A {
    use test, test1 {
        test::hello insteadof test1;
        test1::hello as newHello;
    }
}

class B extends A {
    use test;
    public function hello() {
        echo "Heyaa Everyone";
    }
}

$ans = new B();
$ans->hello();
echo "<br>";

$ans1 = new A();
$ans1->hello();
echo "<br>";

?>
