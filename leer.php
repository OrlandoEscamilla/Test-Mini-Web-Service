<?php 

$data = file_get_contents("http://chocolatepublicidad.com/places.json");
$data = json_decode($data, true);

echo "<table>\n";
echo "<tr><th>id</th><th>Latitud</th><th>Longitud</th>\n";

$longitud = count($data);

for ($i=0; $i < $longitud; $i++){ 
	echo "<tr>\n";
	echo "<td>".$data[$i]["id"]."</td><td>".$data[$i][1]."</td><td>".$data[$i][2]."</td>\n";
	echo "</tr>\n";
}
echo "</table>";
?>