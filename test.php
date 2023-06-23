<?
$num1=10;
$num2=100;

echo "<span style='color: red;'>Sum: ".($num1+$num2)."</span><br>";

echo "$num1+$num2 = ".($num1+$num2)."<br>";

echo `$num1+$num2 = `.($num1+$num2)."<br>";

echo '$num1+$num2 = '.($num1+$num2)."<br>";


$role="lox";

switch($role){
    case "lox":
        echo "lox";
        break;
    case "admin":
        echo "You're an admin";
        break;
    default:
    echo "Lox2";
}


$arr1=array();
$arr1[0]="Hello";
$arr1[]=6;
$arr1[]="PHP";

$i=0;
$str="";
while($i<count($arr1)){
$str.="$arr1[$i] ";
$i++;
}
echo $str;

?>