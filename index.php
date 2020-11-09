<html>
<head>
<meta charset="UTF-8">
<link href="web/default.css" rel="stylesheet" type="text/css" />
<title>MINIFORO</title>
</head>
<body>
<div id="container" style="width: 450px;">
<div id="header">
<img src="web/logo.png" alt="mini foro logo" width="100px" height="100px">
<h1>MINIFORO versiÃ³n 1.0</h1>
</div>

<div id="content">

<?php 
// PRIMERA APROXIMACIÃ“N AL MODELO VISTA CONTROLADOR. 
// Funciones auxiliars Ej- usuarioOK
include_once 'app/funciones.php';

if ( !isset($_REQUEST['orden']) ){
    include_once 'app/entrada.php';
} 
else {
    switch ($_REQUEST['orden']){
        
        case "Entrar":
            // Chequear usuario
            if ( isset($_REQUEST['nombre']) && isset($_REQUEST['contraseÃ±a']) && 
                 usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseÃ±a'] )) {
               echo " Bienvenido <b>".$_REQUEST['nombre']."</b><br>";
               include_once  'app/comentario.html';
            }
            else {
                include_once 'app/entrada.php';
                echo " <br> Usuario no vÃ¡lido </br>";
            }
            break;
            
        case "Nueva opiniÃ³n":
            echo " Nueva opiniÃ³n <br>";
            include_once  'app/comentario.html';
            break;
        case "Detalles": // Mensaje y detalles
            echo "Detalles de su opiniÃ³n";
            include_once 'app/comentariorelleno.php';
            include_once 'app/detalles.php';
            break;
        case "Terminar": // Formulario inicial
            include_once 'app/entrada.php';
    }
    
}

?>
</div>
</div>
</body>
</html>

