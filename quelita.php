<?php
	$error = "";
	if ( isset($_POST["submit"]) ) {
		$usuario = $_POST["name"];
		$contraseña = $_POST["password"];
			if (!empty($contraseña)){
                $db_conn = fdbconnect();
				$sql = "select active, level from 'users' where nick = '$usuario' and password = '$contraseña' and active = true";
				$process = $db_conn->query($sql);
                $db_conn->close();
                if ($rows > 0) {
					header("Location: index.php");
				} else { 
                    $error = "Su usuario no está activo, comunicarse con el administrador.";
				}
				
			} else {
				$error = "Debe ingresar correctamente sus datos";
			}
	}
?>