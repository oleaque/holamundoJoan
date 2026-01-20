<?php
require_once __DIR__ . '/./src/Saludo.php';
use App\Saludo;
$saludo = new Saludo();
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $resultado = $saludo->generarSaludoAleatorio();
 $mensaje = $resultado['saludo'];
 $codigo = $resultado['codigo'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Saludo aleatorio</title>
 <style>
 </style>
</head>
<body>
 <div class="container">
 <h1>Generador aleatorio de Hola Mundos</h1>
 <form method="post">
 <button type="submit">Generar</button>
 </form>
 <?php if (!empty($mensaje))
 echo "<p><b>" . $codigo . ":</b> " . htmlspecialchars($mensaje) . "</p>";
 ?>
 </div>
</body>
</html>