<?php 

    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM tareas WHERE iiiiiiiiiddddddddddddddddddddddddddddddd = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
        }
    }

    if (isset($_POST['actualizar'])) {
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion' WHERE iiiiiiiiiddddddddddddddddddddddddddddddd = $id";
        mysqli_query($conn, $query);
        $_SESSION['mensaje'] = 'Tarea editada';
        $_SESSION['tipo_mensaje'] = 'success';
        header("Location: index.php");
    }


?>

<?php include("includes/header.php") ?>

<div class = "container p-4">
    <div class="row">
        <div class=" card card-body">
           <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <div class="form-group">
                <input type="text" name="titulo" value = "<?php echo $titulo; ?>" class="form-control" placeholder="Actualiza el titulo">        
            </div>
            <div class="form-group">
                <textarea name="descripcion" id=""  rows="2" class="form-control" placeholder="Actualizar descripcion"><?php echo $descripcion; ?></textarea>
            </div>
            <button class="btn btn-success" name="actualizar">
                Actualizar
            </button>
           </form> 
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>