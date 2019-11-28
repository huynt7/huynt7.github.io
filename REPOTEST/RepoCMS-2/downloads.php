<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<?PHP

include "config.php";



$result = mysql_query("SELECT * FROM download ORDER BY dldate DESC");

echo "<table border='1' align='center'>";
echo "<tr> <th> Deb </th> <th> Downloads </th> <th> views </th> <th> Last downloaded </th> <th> IP </th> <th> Device <th> Firmware </th> <th> Agent </th> </tr>";

while($row = mysql_fetch_array($result)) {

$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<tr> <td> '.$trimed2.' </td> <td> '.$row[stats].' </td> <td> '.$row[views].' </td> <td> '.$row[dldate].' </td> <td> <a href="http://www.utrace.de/ip-adresse/'.$row[ip].'" target="_blank">'.$row[ip].'</a> </td> <td> '.$row[device].' </td> <td> '.$row[firmware].' </td> <td> '.$row[agent].' </td> </tr>';

}

echo "</table>"

?>

