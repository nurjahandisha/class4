<?php
echo"Welcome to Scope and local/global vars in php</br>";
$a = 70;
function printvalue(){
    $a = 80;
    global $a;
    echo"The value of your variable is $a</br>";
}
echo$a;
printvalue();

// static
function dresscount($increase){
    static$partydress = 9;
    $partydress +=$increase;
    echo$partydress."</br>";
}
dresscount(1);
dresscount(2);

// Array
echo"Welcome to the associative arrays in php</br>";
$favcol =[
    'Disha' => "Black</br>",
    'Diva'  =>"Brown",
    'Eva'   =>"Red"

];
echo'<pr>';
print_r($favcol['Disha']);
echo'</pr>';

echo"Welcome To the Multi-dimensional array in php</br>";
$favcol =[
    'Disha' => "Black",
    'Diva'  =>"Brown",
    'Eva'   =>[
        'col'=>"Red",
        'favfood'=>"pita",
        'hobby'  =>"singing</br>",
    ],
  

];
echo'<pr>';
print_r($favcol['Eva']['hobby']);
echo'</pr>';

// string function

echo"welcome to the (uppercase)string function in php</br>";
$str ="the quick brown fox jumps over the moon</br>";
echo strtoupper($str);

echo"welcome to the (lowercase)str function in php</br>",
$str ="THE QUICK BROWN FOX JUMP OVER THE MOON</br>";
echo strtolower($str);

$str = "the quick brown fox jumps over the moon</br>";
 printf("welcome %s",ucwords($str));

$name = "disha";
echo strrev($name),"</br>";

// $name ="nothing</br>";
// echo str_shuffle(strrev($name));
$str= "the quick brown fox jumps over the moon</br>";
echo strpos($str,"fox</br>");
if(strpos($str,"over") &&  strpos($str,"qiick")){
    echo "i have</br>";
}else{
    echo"i dont have</br>";
}
$str= "the quick brown fox Jumps over the moon</br>";
        echo stripos($str,"jumps");

$str= "the quick brown fox jumps over the moon</br>";
echo substr($str,0,15).'.....</br>';  

$my_attitude ="ami jabo na.my life my rules</br>";

$ammusay ="tui school jabi";
$myrule="jabi";

echo str_replace("tui",$myrule,$my_attitude,$ammusay);

$password ="idont have";
echo trim($password,"  </br>");
$str= "the quick brown fox jumps over the moon</br>";
echo strlen($str)."</br>";
echo str_word_count($str);
echo"</br>";



// ****password (md5/sha1)(password verify)


$password = "password jene  ki hbe?";
echo md5($password);
echo"</br>";
echo sha1($password);
echo"</br>";
$try= password_hash($password,PASSWORD_BCRYPT);
echo password_hash($password,PASSWORD_BCRYPT);
var_dump(password_verify('password jene ki hbe',$try));


 
  