<?php
include '../includes/config.php';
include '../includes/header.php';
include '../includes/navigation.php'; 
require_once 'empleados.php';
?>

<div class="content" style="margin-left: 250px; padding: 20px;">
    <h1>PROGRAMACION WEB III</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR EMPLEADO</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <input type="hidden" required name="txtID" value="<?php echo $txtID; ?>" id="txtID">
                </div>
                <div class="form-group col-md-12">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" value="<?php echo $txtNombre; ?>" id="txtNombre">
                </div>
                <div class="form-group col-md-12">
                    <label for="txtApellidoPaterno">PATERNO</label>
                    <input type="text" class="form-control" name="txtApellidoPaterno" value="<?php echo $txtApellidoMaterno; ?>" id="txtApellidoMaterno">
                </div>
                <div class="form-group col-md-12">
                    <label for="txtApellidoMaterno">MATERNO</label>
                    <input type="text" class="form-control" name="txtApellidoMaterno" value="<?php echo $txtApellidoMaterno; ?>" id="txtApellidoMaterno">
                </div>
                <div class="form-group col-md-12">
                    <label for="txtCorreo">CORREO</label>
                    <input type="text" class="form-control" name="txtCorreo" value="<?php echo $txtCorreo; ?>" id="txtCorreo">
                </div>

            </div>
            <div class="modal-footer">
            <button type="submit" value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-primary" name="accion">AGREGAR</button>
            <button type="button" value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-success" data-toggle="modal" data-target="#exampleModal">CANCELAR</button>
            </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        AGREGAR EMPLEADO +
    </button>
    </form>
    <br>
    <h3>TABLA EMPLEADOS</h3>
    <div class="row">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaEmpleados as $emp){ ?>
                <tr>
                    <td><?php echo $emp['id']?></td>
                    <td><?php echo $emp['nombre']?></td>
                    <td><?php echo $emp['ApellidoPaterno']?></td>
                    <td><?php echo $emp['ApellidoMaterno']?></td>
                    <td><?php echo $emp['correo']?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="txtID" value="<?php echo $emp['id'];?>">
                            <input type="hidden" name="txtNombre" value="<?php echo $emp['nombre'];?>">
                            <input type="hidden" name="txtApellidoPaterno" value="<?php echo $emp['ApellidoPaterno'];?>">
                            <input type="hidden" name="txtApellidoMaterno" value="<?php echo $emp['ApellidoMaterno'];?>">
                            <input type="hidden" name="txtCorreo" value="<?php echo $emp['correo'];?>">
                            <button type="submit" name="accion" value="Seleccionar" class="btn btn-info">Seleccionar</button>
                            <button type="submit" name="accion" value="btnEliminar" onclick="return Confirmar('Deseaas boorar?');" class="btn btn-danger" >Eliminar</button>
                            <button type="submit" value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-primary" name="accion">EDITAR</button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <?php if($mostrarModal){ ?>
    <script>
            $('#exampleModal').modal('show');
    </script>
    <?php }?>
    <script>
        function Confirmar(Men){
            return confirm(Men) ? true : false;
        }
    </script>
</div>



<?php
include '../includes/footer.php'; 
?>