<?php
        // include_once $baseUrl.'layouts/header.php';
        require_once ('../database/dbhelper.php');
        

        if(isset($_POST['capnhat'])){
            $id = $_POST['id'];
            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $oldPassword = $_POST['old_password'];

            if($id > 0 && !$password) {
                $sql = "UPDATE user SET fullname = '$fullname',email = '$email' WHERE id =$id";            
                execute($sql);
                header('Location: http://localhost/weborganic/account/');
                die();
            }else{
                if($password === $oldPassword){
                    $sql = "UPDATE user SET password = '$password' WHERE id =$id";            
                    execute($sql);
                    header('Location: http://localhost/weborganic/account/');
                    die();
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Sai mật khẩu")';
                    echo '</script>';
                    
                    // header('Location: http://localhost/weborganic/account/');
                }
            }

        }

?>