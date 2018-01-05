
<?php 
$mysqli = new mysqli("freshapp.database.windows.net", "freshapp", "Nafisa786", "mystudent");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

?>
