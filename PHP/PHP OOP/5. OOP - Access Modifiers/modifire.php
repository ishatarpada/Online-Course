<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Access Modifiers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 2%;
        }
    </style>
</head>

<body>
    <p class="text-danger fs-4 text-center m-2">OOP - Access Modifiers</p>
    <p>Properties and methods can have access modifiers which control where they can be accessed.</p>
    <ul class="list-unstyled">
        <li>
            public - the property or method can be accessed from everywhere. This is default
        </li>
        <li>
            protected - the property or method can be accessed within the class and by classes derived from that class
        </li>
        <li>
            private - the property or method can ONLY be accessed within the class
        </li>
    </ul>

    <!--  Access Modifiers  -->
    <p class="fs-3 text-dark fw-bold m-2">Access Modifiers :- </p>


    <p class="fs-5 text-warning m-2">1. Public :- </p>
    <?php
    // define a class
    //public 
    class A
    {
        public $name;
        public $color;

        public function showDetails()
        {
            echo $this->name;
            echo $this->color;
        }
    }

    class temp extends  A
    {
        public function get()
        {
            echo "Hello Good Morning" . $this->name;
        }
    }

    $test = new A();
    $test->color = "Red <br>";
    $test->name = "Apple <br>";
    $test->showDetails();

    ?>

    <p class="fs-5 text-warning m-2">2. protected :- can't access the method and property only derived class property and method access</p>
    <?php
    // define a class
    //public 
    class base{
        protected $name;

        public function __construct($n){
            $this->name = $n;
        }

        protected function show()
        {
            echo "Your Name : " . $this->name . "<br>";
        }
    }

    class derived extends base{
        public function show()
        {
            echo "Your Name : " . $this->name . "<br>";
        }
    }

    $test1 = new derived("isha Patel");
    $test1->show();
    ?>

    <p class="fs-5 text-warning m-2">3. Private :- can't access the method and property only it self class can access property and method</p>
    <?php
    // define a class
    //public 
    class baseClass
    {
        private $name;

        public function __construct($n)
        {
            $this->name = $n;
        }

        private function show()
        {
            echo "Your Name : " . $this->name . "<br>";
        }
    }

    class derivedClass extends baseClass
    {
        public function get()
        {
            // echo "Your Name : " . $this->name . "<br>";
        }
    }

    $test2 = new derivedClass("isha Patel");
    // $test2->name = "Patel Isha";
    // $tes2->get();


    ?>




</body>

</html>