<?php

namespace pro{

    class product
    {
        public function __construct()
        {
            echo "This is Product class <br>";

            $test = new \test\product;
        }
    }
    
    function wow(){
        echo "Wow from Product File. <br>";
    }
}

?>