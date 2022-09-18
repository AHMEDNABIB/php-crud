<?php 

$con = new mysqli ('localhost', 'root', '', 'crudcollection');

//session_start();


if(!$con) {
   die(mysql_error($con));
     
} 

?>