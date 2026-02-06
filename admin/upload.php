<?php
$destino = __DIR__ . "/img/banner.jpg";

if (!isset($_FILES['imagen'])) {
  exit("No se recibió archivo");
}

$tipo = mime_content_type($_FILES['imagen']['tmp_name']);
if (!in_array($tipo, ['image/jpeg', 'image/png'])) {
  exit("Formato no permitido");
}

move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
echo "Imagen actualizada correctamente";
