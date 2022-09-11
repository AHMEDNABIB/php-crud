<?php 
$con = new mysqli ('localhost', 'root', '', 'crudcollection');

if(!$con) {
   die(mysql_error($con));
     
} 

?>