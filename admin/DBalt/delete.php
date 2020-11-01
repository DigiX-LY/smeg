<?php
    include "../../include/DBconnection.php";
    if($_POST['delete'])
    {
        $sql = "DELETE FROM `aes_lines` WHERE `aes_lines`.`id` = :id";
        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":id", $param_id);
            $param_id = trim($_POST['id']);
            $stmt->execute();
        }
    }
    unset($stmt);
    unset($pdo);

?>