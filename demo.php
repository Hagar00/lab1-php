<?php
// php info 
echo phpinfo();
echo "<br>";

// define my web page name 
define ("lab1", __DIR__);
echo lab1;
echo "<br>";
var_dump ("lab1");
echo "<br>";

//show my server name ,address
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";

// display output on code lec 

$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo $i;
echo $num;

//######### 
for( $i = 0; $i<5; $i++ ) {
      $a += 10;
      $b += 5;
   }
echo $a , $num ;
//###########

//do...while
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
echo $i , $num;
//##############
$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
//##############
$i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
   echo $i ;
//###############

// switch case
$age = 10;
switch (true) {
   case ($age < 5) :
      echo "stay at home";
      break;
   case ($age == 5)  :
      echo "Go to Kinder garden";
      break;
   case ($age > 6) || ($age < 12) :
      echo "go to grade $age";
      break;
   default :
      echo "erreor";
   
}
?>
