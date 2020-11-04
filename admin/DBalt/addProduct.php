<?php

include "../../include/DBconnection.php";
    

if(isset($_POST["add"]))
{
    $sql = "INSERT INTO `products` (`product_id`, `name`, `line_id`, `sub_cat_id`, `color`, `img_url`)\n"
    ." VALUES ('', :prod_name, :line_id, :cat, :color, :img_url)";
    if($stmt = $pdo->prepare($sql))
    {
        $stmt->bindParam(":prod_name", $prod_param);
        $stmt->bindParam(":line_id", $line_param);
        $stmt->bindParam(":cat", $cat_param);
        $stmt->bindParam(":color", $color_param);
        $stmt->bindParam(":img_url", $img_param);

        $prod_param = trim($_POST['prod_name']);
        $line_param = trim($_POST['line_id']);
        $cat_param = trim($_POST['cat_id']);
        $color_param = trim($_POST['color']);
        $img_param = trim($_POST['img_url']);
        
        $stmt->execute();
    }
}
echo $pdo->lastInsertId();
unset($stmt);
unset($pdo);

?>