<?php   
//local Database configuration
$LOCAL_HOST = 'localhost'; //127.0.0.1
$LOCAL_DBNAME = 'app_beta';
$LOCAL_USERNAME = 'postgres';
$LOCAL_PASSWORD = 'unicesmag';
$LOCAL_PORT = '5432';


//supabase Database configuration
$SUPA_HOST = 'aws-0-us-west-2.pooler.supabase.com';
$SUPA_DBNAME = 'postgres';
$SUPA_USERNAME = 'postgres.puzqyvdywjtzjmpvrhgi';
$SUPA_PASSWORD = '3125363571alejo';
$SUPA_PORT = '6543';

$local_data_connection ="
host=$LOCAL_HOST
dbname=$SUPA_DBNAME
 user=$LOCAL_USERNAME
 password=$LOCAL_PASSWORD
 port=$LOCAL_PORT"
 ;

 $supa_data_connection ="
host=$SUPA_HOST
dbname=$SUPA_DBNAME
 user=$SUPA_USERNAME
 password=$SUPA_PASSWORD
 port=$SUPA_PORT"
 ;

//local conection
 $local_conn = pg_connect($local_data_connection);

 if(!$local_conn){
echo "error: Unable to conect to local database."; 
exit();
 }else{
    echo "local success conection siiuuuu !!!";
 }

 //supabase conection
 /*
 $supa_conn = pg_connect($supa_data_connection);

 if(!$supa_conn){
echo "error: Unable to conect to supabase database."; 
exit();
 }else{
    echo "<br>supa success conection siiuuuu !!!";
 }
*/

?>