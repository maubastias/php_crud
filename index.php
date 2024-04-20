<?php include("db.php")?>
<?php include("includes/header.php")?>


<div class="container p-4">
    <div class="row">

    <div class="col-md-4">

    <?php   if(isset($_SESSION['mensaje'])) { ?>
    <div class="alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['mensaje'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php ?>
    

    <?php session_unset(); } ?>

        <div class="card card-body">
            <form action="save.php" method="POST">
                <div class="form-group">
                    <input type="text" name="titulo" class="form-control" placeholder="Tarea" autofocus >

                </div>
                <div class="form-group">
                    <textarea name="descripcion" id=""  rows="2" class="form-control" placeholder="descripcion"></textarea>
                </div> 
                <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="guardar">

            </form>

        </div>
    </div>

    <div class="col-md-8">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Fecha creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                $query = "SELECT * FROM tareas";
                $resultado_tareas = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($resultado_tareas)) { ?>
                <tr>
                  <td><?php echo $row['titulo']  ?></td> 
                  <td><?php echo $row['descripcion']  ?></td> 
                  <td><?php echo $row['fecha_creacion']  ?></td> 
                  <td>
                    <a type="button" class="btn btn-primary" href="edit.php?id=<?php echo $row['iiiiiiiiiddddddddddddddddddddddddddddddd']?>">
                        Editar
                    </a>
                    <a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $row['iiiiiiiiiddddddddddddddddddddddddddddddd']?>">
                        Eliminar
                    </a>
                  </td>
                </tr>

                <?php } ?>
                
                    
            </tbody>

        </table>

    </div>

    </div>

</div>

<?php include("includes/footer.php")?>
    
</body>
</html>


