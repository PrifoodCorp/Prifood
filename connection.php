<?php



$serverName  = "stormwebform.database.windows.net"; 
$user = "prifood";
$password = "Admin12345"; 
$connectionInfo = array("UID" => "prifood", "pwd" => "Admin12345", "Database" => "DFSI", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:stormwebform.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
if($conn) {
    echo 'Connected';
} else {
    // echo 'Error';
    echo json_encode(sqlsrv_errors($conn));
}
exit();
?>