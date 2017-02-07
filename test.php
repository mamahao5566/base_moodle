<?php
echo "<pre>";
$serverName = "192.168.1.125"; //serverName\instanceName
$connectionInfo = array( "Database"=>"moodle", "UID"=>"sa", "PWD"=>"Lux42821850", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
 echo "Connection established.<br />";
}else{
 echo "Connection could not be established.<br />";
 die( print_r( sqlsrv_errors(), true));
}
// Close the connection.
sqlsrv_close($conn);
?>