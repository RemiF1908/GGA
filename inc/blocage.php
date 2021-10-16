<?php session_start();  
$perm = $_SESSION['perm'] ;
if ((empty($_SESSION['ID'])) AND (empty($_SESSION['pseudo'])))
{
header('Location: maintenance');
             } 
else if($perm == 3)      
       {
       	header('Location: maintenance');
       } 

       


?>