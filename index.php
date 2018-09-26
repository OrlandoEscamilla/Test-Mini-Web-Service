<?php 

include_once('conexion.php');

$sql = "SELECT * FROM lugar";

$respuesta = $conexion->query($sql);

$rawdata = array();
$i=0;
while ($resultado = mysqli_fetch_array($respuesta)) {
/*
	echo "ID: ".$resultado['id_entrada']." TITULO ENTRADA: ".$resultado['titulo_entrada']." DESCRIPCION ENTRADA: ".$resultado['descripcion_entrada']." CATEGORIA ENTRADA: ".$resultado['categoria_entrada']." IMAGEN".$resultado['img_entrada']." FECHA ENTRADA: ".$resultado['fecha_entrada']."<br>";
*/
	$rawdata[$i] = $resultado;
     $i++;	
}



$objson = json_encode($rawdata);

echo $objson; //este es mi objeto json

$handler = fopen("places.json", "w+"); //creamos el archivo places.json
fwrite($handler, $objson); //y porsteriormente le escribimos nuestro objeto json ($objson)
fclose($handler);
/*
echo "<br> <br>";





echo "<br><br>";

$array = json_decode($objson); //decodificamos el objeto json para que sea un objeto en forma de arrays
print_r($array);


/*
echo "<br><br>";

foreach($array as $obj){
        $id = $obj->id;
        $latitud = $obj->latitud;
        $longitud = $obj->longitud;
        echo $id." ".$latitud." ".$longitud;
        echo "<br>";
}
*/


 ?>