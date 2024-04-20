<?php 
    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tareas WHERE iiiiiiiiiddddddddddddddddddddddddddddddd = $id";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("tarea fallo");
        }
        
        $_SESSION['mensaje'] = 'Tarea eliminada';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location: index.php");
    }
?>