<?php
include ('../config/database.php');
//getdata
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
$e_mail = $_POST ['email'];
$m_phone = $_POST ['mphone'];
$_psswd = $_POST ['passwd'];
//query to insert into sql
$sql = "INSERT INTO users (nombre,apellido,email,telefono,contraseña) VALUES ('$f_name','$l_name','$e_mail','$m_phone','$_psswd' )";
pg_query($sql)
?>