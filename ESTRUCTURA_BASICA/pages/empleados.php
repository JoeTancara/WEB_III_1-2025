<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:'';
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:'';
$txtApellidoPaterno=(isset($_POST['txtApellidoPaterno']))?$_POST['txtApellidoPaterno']:'';
$txtApellidoMaterno=(isset($_POST['txtApellidoMaterno']))?$_POST['txtApellidoMaterno']:'';
$txtCorreo=(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:'';

$accion=(isset($_POST['accion']))?$_POST['accion']:'';

$error = array();

$accionAgregar="";

$accionModificar=$accionEliminar=$accionCancelar="disable";

$mostrarModal=False;

include ("../Conexion/conexion.php");

switch($accion){
    case "btnAgregar":
        $sentencia = $conn->prepare("INSERT INTO empleado(nombre, ApellidoPaterno, ApellidoMaterno, correo) VALUES (:nombre, :ApellidoPaterno, :ApellidoMaterno, :correo);");
        $sentencia->bindParam(':nombre', $txtNombre);
        $sentencia->bindParam(':ApellidoPaterno', $txtApellidoPaterno);
        $sentencia->bindParam(':ApellidoMaterno', $txtApellidoMaterno);
        $sentencia->bindParam(':correo', $txtCorreo);
        $sentencia->execute();
        header("Location: inicio.php");
    case "btnModificar":
        $sentencia = $conn->prepare(
            "UPDATE empleado SET
            nombre=:txtNombre, 
            ApellidoPaterno=:txtApellidoPaterno, 
            ApellidoMaterno=:txtApellidoMaterno, 
            Correo=:txtCorreo WHERE id =:txtID)");
        $sentencia->bindParam(':txNombre', $txtNombre);
        $sentencia->bindParam(':txApellidoPaterno', $txtApellidoPaterno);
        $sentencia->bindParam(':txApellidoMaterno', $txtApellidoMaterno);
        $sentencia->bindParam(':txCorreo', $txtCorreo);
        $sentencia->bindParam(':txID', $txtID);
        
        $sentencia->execute();
        header("Location: inicio.php");

    case "btnEliminar":
        $sentencia = $conn->prepare("DELETE FROM empleado WHERE id=:txtID;");
        $sentencia->bindParam(':txtID', $txtID);
        $sentencia->execute();
        header("Location: inicio.php");
    case "btnCancelar":
        header("Location: inicio.php");
        break;
    case "Seleccionar":
        $accionAgregar = "disable";
        $accionModificar = $accionEliminar = $accionCancelar = "";
        $mostrarModal = true;
        $sentencia = $conn->prepare("SELECT * FROM empleado WHERE id=:txtID;");
        $sentencia->bindParam(':txtID', $txtID);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_LAZY);

        break;
}

$sentencia = $conn-> prepare("SELECT * FROM empleado;");
$sentencia->execute();
$listaEmpleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
