<?php
include "../../include/DBconnection.php";
    if($_POST['edit'])
    {
        $sql = "UPDATE `products` SET `name` = :prod_name, `line_id` = :line_id, `sub_cat_id` = :cat_id, `color` = :color, `img_url` = :img_url WHERE `products`.`product_id` = :prod_id ";


        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":prod_id", $prod_id_param);
            $stmt->bindParam(":prod_name", $prod_name_param);
            $stmt->bindParam(":line_id", $line_id_param);
            $stmt->bindParam(":cat_id", $cat_id_param);
            $stmt->bindParam(":color", $color_param);
            $stmt->bindParam(":img_url", $img_url_param);
            
            $prod_id_param = trim($_POST['id']);
            $prod_name_param = trim($_POST['prod_name']);
            $line_id_param = trim($_POST['line_id']);
            $cat_id_param = trim($_POST['cat_id']);
            $color_param = trim($_POST['color']);
            $img_url_param = trim($_POST['img_url']);

            $stmt->execute();
        }
    }
    unset($stmt);
    unset($pdo);
?>