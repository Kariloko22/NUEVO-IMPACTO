<?php
    $destinatario = 'impactovirtual360@gmail.com';

    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina de impacto";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $celular, $mensajeCompleto, $header);
    echo "<script>alert('Gracias por comunicarte, nos contactaremos a la brevedad')</script>";
    echo "<script> setTimeout(\"location.href= 'index.html'\",1000)</script>";
?>