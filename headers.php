<? 
$headers=apache_request_headers();
if($headers){
    echo "<table><thead><tr><th>Header</th><th>Value</th></tr></thead>";
    echo "<tbody>";
    foreach($headers as $key=>$val){
        echo "<tr><td>$key</td><td>$val</td>";
    }
    echo "</tbody>";
}

else{
    echo "There aren't any headers in request!";
}
