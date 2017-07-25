<?php  


$hostname = $_SERVER['REMOTE_ADDR'];
if ($hostname == '::1') {
    //$link = Conectarse('localhost','root','','mrg'); 
} else {
    //$link = Conectarse('localhost','mrgconsu_admin','Mexico01%','mrgconsu_base');  
    if (empty($_SERVER['HTTPS'])) { header('Location: https://segurosabg.com.mx'); } 
}



?>
