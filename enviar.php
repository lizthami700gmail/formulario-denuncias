<?php
  $destino= "lizthami700@gmail.com";
  $nombre= $_POST["nombre"];
  $curp= $_POST["curp"];
  $domicilio= $_POST["domicilio"];
  $localidad= $_POST["localidad"];
  $municipio= $_POST["municipio"];
  $correo= $_POST["correo"];
  $telefono= $_POST["telefono"];
  $mensaje= $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCurp: " . $curp . "\nDomicilio: " . $domicilio . "\nLocalidad: " . $localidad . "\nMunicipio: " . $municipio . "\nCorreo:" . $correo . "\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;
  mail($destino,"Denuncia", $contenido);
  header("Location:gacias.html");
?>