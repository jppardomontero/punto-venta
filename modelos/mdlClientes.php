<?php
require_once("conexion.php");
class modeloClientes
{
    public static function ctrlGuardarClientes($tabla, $data)
    {

        $stm = conexion::conectar()->prepare("INSERT INTO $tabla (cedula, nombres, apellidos, direccion, sexo, correo, telefono, f_nacimiento) VALUES (:cedula, :nombres, :apellidos, :direccion, :sexo, :correo, :telefono, :f_nacimiento)");
        $stm->bindParam(':cedula', $data['cedula'], PDO::PARAM_STR);
        $stm->bindParam(':nombres', $data['nombres'], PDO::PARAM_STR);
        $stm->bindParam(':apellidos', $data['apellidos'], PDO::PARAM_STR);
        $stm->bindParam(':direccion', $data['direccion'], PDO::PARAM_STR);
        $stm->bindParam(':sexo', $data['sexo'], PDO::PARAM_STR);
        $stm->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $stm->bindParam(':telefono', $data['telefono'], PDO::PARAM_STR);
        $stm->bindParam(':f_nacimiento', $data['f_nacimiento'], PDO::PARAM_STR);
        if ($stm->execute()) {
            echo "<script>console.log('if: " . json_encode($data) . "' );</script>";
            return "ok";
        } else {
            return "error";
        }
    }
}
