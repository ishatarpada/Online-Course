<?Php

// class pi{
//     public static $value =3.1459;
// }
// echo pi::$value;



// class pi
// {
//     public static $value = 3.1459;

//     public function staticValue()
//     {
//         return self::$value;
//     }
// }

// $pi = new pi();
// echo $pi->staticValue();



class pi {
    public static $value=3.14159;
  }
  
  class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  echo x::$value;
  
  $x = new x();
  echo $x->xStatic();


?>