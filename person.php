<?
$person["Ivashchenko"]=array("name"=>"Roman","surname"=>"Ivashchenko","position"=>"Student");
$person["Ivashchenko1"]=array("name"=>"Roman","surname"=>"Ivashchenko","position"=>"Student");

foreach($person as $elem)
echo "<div>Name: ".$elem["name"]." ".$elem["surname"].", Position:  ".$elem["position"]."</div>";