<?php

if(!empty($_POST)) {
    $id = getPost('id');
    $name = getPost('fullName');
    $email = getPost('email');
    $password = getPost('password');

    if($id > 0 ) {
        $sql = "UPDATE user SET fullname = '$name',email = '$email', password = '$password' WHERE id =$id";            
        execute($sql);
        header('Location: http://localhost/weborganic/admin/feedback/');
        die();
    }
}
