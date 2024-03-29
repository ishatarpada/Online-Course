<?php


    require 'product.php';
    require 'testing.php';

    // $obj = new test\product();
    // $obj1 = new pro\product();

    function wow(){
        echo "Wow from index File. <br>";
    }

    $obj = new pro\product();

    pro\wow();
?>