<html>
<head></head>
<body>
<?php  
$calificaciones = array('10','9','8','5','7','5','8','9','10','6');
$i = count($calificaciones);
$suma=0;

foreach ($calificaciones as $ca ){
echo"Calificacion:".$ca; echo"</br>";
$suma+=$ca;
  }
echo"Suma de calificaciones es:  ".$suma; echo"</br>";
$promedio = $suma/$i;
echo "El promedio de tus calificaciones es:  ".$promedio; echo"</br>";
//Castillo Moreno Candy Claudia
?>
</body>
</html>