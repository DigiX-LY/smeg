<?php

include "../../include/DBconnection.php";
    
    

if(isset($_POST["add"]))
{
    $sql = "INSERT INTO `aes_lines` (`id`, `name`) VALUES ('', :linename) ";
    if($stmt = $pdo->prepare($sql))
    {
        $stmt->bindParam(":linename", $linename_param);
        $linename_param = trim($_POST['linename']);
        $stmt->execute();
    }
}
echo $pdo->lastInsertId();
unset($stmt);
unset($pdo);

?>