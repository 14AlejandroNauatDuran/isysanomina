# isysanomina
Proyecto de nómina

Este es un avance del proyecto de procesos de nómina para ISYSA.

Para poder manejar lo que se tiene es fundamental tener la siguiente configuracion de equipo de trabajo.

/*************************************************************/
/*************************************************************/

1) Instalación de la base de datos:

isysnomina/isysa/yii2_nomina.sql
 * importar el script /yii2_nomina.sql en su MySQL, esto a traves de su Sistema Gestor de Bases de Datos.
 
 
/*************************************************************/
/*************************************************************/


2) Conexión a Base de datos.
isysnomina/isysa/includes/databases.php
 * en el archivo /databases.php se encuantra lo siguiente:
 
 <?php
$db = mysqli_connect('localhost', 'root', '','yii2_nomina');

  * en esta linea configure la localización de la base de datos en este caso
   'localhost' -> servidor local;
   'root'      -> usuario;
    ''         -> contraseña;
   'yii2_nomina' -> nombre de la base de datos;


/*************************************************************/
/*************************************************************/


3) Para poder correr el proyecto es necesario abrir una terminal y correr el siguiente comando ubicado en una carpeta en especifico. en mi caso lo hago desde el bash de Git

isysnomina/isysa/public
php -S localhost:3000 

al dar enter deberá iniciarce una respuesta como la siguiente

[Fri Jun 17 11:48:49 2022] PHP 7.4.26 Development Server (http://localhost:3000) started

he inmediatamente en tu navegador que tiene permisos con XAMPP o WAMPSERVER
solo teclea en la 

URL: localhost:3000

si no te corren los estilos en 
isysnomina/isysa
gulp
ejecuta el comando anterior (gulp).


/*************************************************************/
/*************************************************************/


4) Para poder loguearse en el proyecto usa mi usuario y contraseña.
 'usuario'    -> alejandrodelacruznauatduran@gmail.com
 'contraseña' -> 12345678

crear un nuevo usuario no será util debido a que se necesita de una verificación a travez de Mailtrap, y los permisos son mios a menos de que los configures.

esta configuración se realiza en isysnomina/isysa/classes/Email.php

en las siguientes dos funciones 
enviarConfirmacion()
enviarInstrucciones()

deberas integrar
$mail->Username = '';
$mail->Password = '';

estos ofrecidos por Mailtrap en la seccion de PHPMailer.

