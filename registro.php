<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $host="localhost";
        $username="root";
        $password="12345678";
        $db_name="proyecto";
        $con = mysqli_connect("$host", "$username", "$password") or die("No puede conectarse");
        mysqli_select_db($con, $db_name) or die("La BD no responde");
        mysqli_query($con, "INSERT into usuario(username, contrasena, correo) values 
        ('$_REQUEST[username]', '$_REQUEST[password]', '$_REQUEST[email]')") 
        or die ("Problema en la insercion".mysqli_error($con));

        mysqli_close($con);
        header("Location: index.php");
    }
?>