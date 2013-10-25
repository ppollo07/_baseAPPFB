<?php
include_once "_class/class_DB.php";
include_once "_class/personas.class.php";

$usuario = new Personas();
$date_post = str_replace("/","-",$_POST["fechaNac"]);
$date = DateTime::createFromFormat('m-d-Y', $date_post);
$usuario->setIp($_SERVER['REMOTE_ADDR']);
$usuario->setNombre($_POST["Nombre"]);
$usuario->setEmail($_POST["Email"]);
$usuario->setfechaNac($date->format('Y-m-d'));
$usuario->setSexo($_POST["Sexo"]);
$usuario->setLocalidad($_POST["Localidad"]);
$usuario->setApellido($_POST["Apellido"]);
$usuario->setDni($_POST["Dni"]);
$usuario->setTelefono3($_POST["Telefono3"]);
$usuario->setidProvincia($_POST["Provincia"]);
$usuario->setDireccion($_POST["Domicilio"]);
$usuario->setidPerfil($_POST["Perfil"]);
$usuario->setidSitio($_POST["idSitio"]);
$usuario->setidSegmento($_POST["idSegmento"]);
$usuario->setidPromocion($_POST["idPromocion"]);
$usuario->setdatosInternos($_POST["datosInternos"]);
$usuario->setEmail2($_POST["Email2"]."@facebook.com");
$usuario->guadarPersonas();

//var_dump ($usuario);

/*
echo $usuario->getNombre();
echo $usuario->getApellido();
echo $usuario->getidSitio();
echo $usuario->getidSegmento();
echo $usuario->getidPersona();
echo "<br>"
*/
/*
$usuario = new Usuario();
$usuario->setidSitio("1");
$usuario->setidSegmento("1");
$usuario->setNombre("Lala");
$usuario->setApellido("Lala");
$usuario->guadarUsuarios();
echo "<br>";
echo "<br>";
foreach ($usuario as $name => $value) {
    echo "$name : $value\n";
}
*/
/*
$usuario = Usuario::listarUsuarios();
//print_r (get_class($usuario[0]));
foreach ($usuario[1] as $name => $value) {
    echo $name ." : ". $value."<br>";
}
echo "<br>";
echo "<br>";
//print_r ($stdClass[1]);

foreach($usuario as $item):
	echo 'ID:' . $item->idPersona . ' NOMBRE:' . $item->Nombre . ' APELLIDO:' . $item->Apellido . '<br>';
endforeach;
*/
?>