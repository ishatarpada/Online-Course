<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($n , $a , $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;

        }

        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name : " .$this->name . "<br>";
            echo "Employee age : " .$this->age . "<br>";
            echo "Employee salary : " .$this->salary . "<br>";

        }
    }

    class manager extends employee{

        public $ta = 1000;
        public $phone = 300;
        public $totalSalary;

        // function __construct($n , $a , $s){
        //   echo "Manager Constructor";              
        // }

        function info(){

            $this->totalSalary = $this->ta + $this->phone + $this->salary;

            echo "<h3>Manager Profile</h3>";
            echo "Employee Name : " .$this->name . "<br>";
            echo "Employee age : " .$this->age . "<br>";
            echo "Employee salary : " .$this->totalSalary . "<br>";

        }
    }
    $e1 = new employee("isha" , 21 , 20000);
    $e1->info();
    $e2 = new manager("isha" , 21 , 20000);
    $e2->info();









?>