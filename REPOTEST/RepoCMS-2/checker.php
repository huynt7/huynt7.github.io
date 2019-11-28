<?php

	function checkUDID($udid) 
	{
		
$sql = "SELECT * FROM protect WHERE udid='".$udid."'"; $result = mysql_query($sql); 

 if (mysql_num_rows($result)>0) { 

return 'YES';  }  
			
else

{ 

return 'NO';	
	}

}

?>