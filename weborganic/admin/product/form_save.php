<?php
include_once ('./create_slug.php');
if(!empty($_POST)) {
    $id = getPost('id');
    $name = getPost('name');
    $slug = to_slug($name);
    $category_id = getPost('category_id');
    $thumnail = moveFile('thumnail');
    var_dump($thumnail);
    $listImg_desct = $_FILES['thumnail_desct']['name'];
    $price = getPost('price');
    $description = getPost('description');
    if($id > 0 ) {
        //update
        $slug = to_slug($name);
        if($thumnail != '' ) {
            $sql = "SELECT img FROM product WHERE id = $id";
            $data = executeResult($sql,true);
            $thumnail_file = fixUrl($data['img']);
            unlink("$thumnail_file");
            $sql = "UPDATE product SET img='$thumnail',slug = '$slug', name = '$name',category_id = '$category_id',price='$price',description='$description' WHERE id =$id";
            execute($sql);
        } else {
            $sql = "UPDATE product SET name = '$name',slug = '$slug', category_id = '$category_id',price='$price',description='$description' WHERE id =$id";            
            execute($sql);
        }
        header('Location: index.php');
        die();
    } else {
    // insert
        if($thumnail != '') {
            $sql = "INSERT INTO product (category_id,name,slug,price,img,description) 
            VALUES ('$category_id','$name','$slug','$price','$thumnail','$description')";
            execute($sql);
            // THÊM ẢNH PHỤ VÀO DATABASE
            $sql = "SELECT * FROM product ORDER BY id DESC ";
            $id_product_array = executeResult($sql,true);
            $id_product = $id_product_array['id'];
            $pathTemp = $_FILES['thumnail_desct']["tmp_name"];
            foreach($listImg_desct as $key => $value) {
                $img_desct = "assets/photos/".$value;
                move_uploaded_file($pathTemp[$key],"../../".$img_desct);
                $sql = "INSERT INTO img_desct (img_desct,product_id) VALUES ('$img_desct','$id_product')";
                execute($sql);
            }
            header('Location: index.php');
            // die();
        }
    }
}
