<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $host="localhost";
        $username="root";
        $password="12345678";
        $db_name="proyecto";
        $con = mysqli_connect("$host", "$username", "$password") or die("No puede conectarse");
        mysqli_select_db($con, $db_name) or die("La BD no responde");
        $result = mysqli_query($con, "SELECT * FROM usuario WHERE username = '$_REQUEST[username]' and contrasena = '$_REQUEST[password]'");
        $row = mysqli_num_rows($result);
        if ($row == 1){
            session_start();
            $_SESSION['usuario'] = $_REQUEST['username'];
            header("Location: index.php");
            die();
        }
        else{
            echo "Credenciales incorrectas";
        }
    }
?>