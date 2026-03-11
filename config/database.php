<?php   
//local Database configuration
$LOCAL_HOST = 'localhost'; //127.0.0.1
$LOCAL_DBNAME = 'app_beta';
$LOCAL_USERNAME = 'postgres';
$LOCAL_PASSWORD = 'unicesmag';
$LOCAL_PORT = '5432';


//supabase Database configuration
$SUPA_HOST = '';
$SUPA_DBNAME = 'app_beta';
$SUPA_USERNAME = 'supabase';
$SUPA_PASSWORD = '3125363571alejo';
$SUPA_PORT = '';

$data_connection ="
host=$LOCAL_HOST
 user=$LOCAL_USERNAME
 password=$LOCAL_PASSWORD
 port=$LOCAL_PORT";

 $conn = pg_connect($data_connection);

 if(!$conn){
echo "error: Unable to conect to database."; 
exit();
 }else{
    echo "success conection !!!";
 }
?>