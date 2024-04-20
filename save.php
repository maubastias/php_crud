<?php

include("db.php");

if (isset($_POST['guardar_tarea'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO tareas(titulo,descripcion) VALUES ('$titulo','$descripcion')";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die ("quert fail");
    }

    $_SESSION['mensaje'] = 'Tarea guardada';
    $_SESSION['tipo_mensaje'] = 'success';

    header("Location: index.php");
}

?>