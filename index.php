<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        You can see PHP script execution result below
    </div>
    <?php
    $arr2=array("Apple","Pear","Cherry");
    echo "<ul>";
    for($i=0;$i<count($arr2);$i++)
    echo "<li>$arr2[$i]</li>";
    echo "</ul>"
    ?>
    
</body>
</html>