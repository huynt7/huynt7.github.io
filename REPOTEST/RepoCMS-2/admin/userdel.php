<?php 

require_once ('../config.php'); // include the database connection

$abfrage = "SELECT * FROM users ORDER BY id"; 
$ergebnis = mysql_query($abfrage); 
?> 
<form action="" method="post"><table border="0" cellspacing="0" cellpadding="0"> 
<?php  
while($row = mysql_fetch_object($ergebnis)) 
    { 
    echo '<tr><td align="left">'.$row->id.'.</td>'; 
    echo '<td align="left"><input type="checkbox" name="t[]" value="'.$row->id.'">&nbsp;</td>'; 
    echo '<td align="left">'.$row->username.'&nbsp;&nbsp;</td>';
    echo '<td align="left">'.$row->ustertype.'</td>'; 
    echo '</tr>'; 
    }  
?> 
</table><input type="hidden" value="1" name="st"><input type="submit" value="Delete" name="submit"></form> 
<?php  
$delete = $_POST["t"]; 
$send = $_POST['st']; 
if ($send == 1) 
{ 
    $anzahl=count($delete); 
    for($i=0;$i<$anzahl;$i++) 
    { 

$deltext = "DELETE FROM users WHERE id = '".intval($delete[$i])."'";

        $del = mysql_query($deltext); 
    } 
    if($i == $anzahl) 
    { 
        echo '<head><meta http-equiv="refresh" content="0; url=userdel.php"></head>'; 
    } 
} 
mysql_close(); 
?>
