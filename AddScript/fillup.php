<?php
include ('../include//DBconnection.php');

$sqel = "INSERT INTO `ovens` (`id`, `name`, `line`, `category`, `color`, `imgurl`) VALUES ";
$sql = 
"INSERT INTO `products` (`product_id`, `name`, `line_id`, `sub_cat_id`, `color`, `img_url`) VALUES".
" ('', :prodname , :linename , :category , :color , :imgurl );";
if($stmt = $pdo->prepare($sql))
{
    $stmt->bindParam(":prodname", $prod_param);
    $stmt->bindParam(":linename", $linename_param);
    $stmt->bindParam(":category", $category_param);
    $stmt->bindParam(":color", $color_param);
    $stmt->bindParam(":imgurl", $imgurl_param);

    //translate english words

    $arColor = translate(trim($_POST['color'])); //to translate color;
    $arAesth = translate(trim($_POST['line_name'])); //to translate aesthetic


    //bind parameters for the query execution 
    $prod_param = trim($_POST['prod_name']);
    $linename_param = $arAesth;
    $category_param = 19;  //MANUAL SET FIELD for what type of products you're trying to input
    $color_param = $arColor;
    $imgurl_param = "images/products/hoods/".$prod_param.".jpg";

    $stmt->execute();

//''  , :prodname , :linename , :category , :color , :imgurl )
}

//function that translates what it eats
function translate($toTranslate)
{
    switch($toTranslate)
    {
        //colors
        case 'Black': return 'أسود'; break;
        case 'Anthracite': return 'لون فحم'; break;
        case 'Copper': return 'نحاسي'; break;
        case 'Cream': return 'لون كريمي'; break;
        case 'Oats': return 'لون الشوفان'; break;
        case 'Old Brass': return 'نحاس قديم'; break;
        case 'Silver': return 'فضي'; break;
        case 'Stainless steel': return 'الفولاذ المقاوم للصدأ'; break;
        case 'White': return 'أبيض'; break;
        case 'Chrome': return 'كروم'; break;
        case 'Gold': return 'ذهبي'; break;
        case 'Pastel blue': return 'أزرق فاتح'; break;
        case 'Blue': return 'أزرق'; break;
        case 'Pastel green': return 'أخضر فاتح'; break;
        case 'Pink': return 'وردي'; break;
        case 'Red': return 'أحمر'; break;
        case 'Rose Gold': return 'ذهب وردي'; break;
        case 'Emerald Green': return 'اخضر زمردي'; break;
        case 'Green': return 'أخضر'; break;
        case 'Lime Green': return 'أخضر ليموني'; break;
        case 'Orange': return 'برتقالي'; break;
        case 'Ruby Red': return 'أحمر ياقوتي'; break;
        case 'Taupe': return 'رمادي داكن'; break;
        case 'Yellow': return 'أصفر'; break;

        //aesthetic lines
        case 'Dolce Stil Novo': return 1; break;
        case 'Portofino': return 2; break;
        case 'Coloniale': return 3; break;
        case 'Piano Design': return 4; break;
        case 'Linea': return 5; break;
        case 'Contemporary': return 6; break;
        case 'Classica': return 7; break;
        case "50's Style": return 8; break;
        case 'Selezione': return 9; break;
        case 'Victoria': return 10; break;
        case 'Cortina': return 11; break;


        default: '???';
    }
}
unset($stmt);
unset($pdo);

?>