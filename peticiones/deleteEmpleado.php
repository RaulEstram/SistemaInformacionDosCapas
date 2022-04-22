<?php
    require_once("../Libraries/Core/Autoload.php");
    $connection = new Connection();
    $cursor = $connection->getConnection();
    $quey="DELETE FROM empleado WHERE emp_no = ?";
    $statement = $cursor->prepare($quey);
    $response = $statement->execute(array($_POST['emp_no']));
    header('Location: http://localhost/sistemaInformacion2Capas/empleado');
?>