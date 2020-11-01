<?php
    include "../../include/DBconnection.php";
    if($_POST['edit'])
    {
        $sql = "UPDATE `aes_lines` SET `name` = :linename WHERE `aes_lines`.`id` = :id ";
        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":linename",$linename_param);
            $stmt->bindParam(":id",$id_param);

            $linename_param = trim($_POST['linename']);
            $id_param = trim($_POST['id']);
            $stmt->execute();
        }
    }
    unset($stmt);
    unset($pdo);

?>