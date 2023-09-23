<?php
session_start();
require("backend.php");
if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'signIn':
            $backend = new backend();
            echo $backend->signIn($_POST['username'],$_POST['email'],$_POST['password']);
            break;
        case 'signUp':
            $backend = new backend();
            echo $backend->signUp($_POST['username'],$_POST['email'],$_POST['password']);
            break;
        case 'editProfile':
            $backend = new backend();
            echo $backend->editProfile($_POST['fname'],$_POST['lname'],$_POST['age'],$_POST['gender'],$_POST['email_phone'],$_POST['pm']);
            break;
        case 'addProduct':
            if(isset($_FILES['image'])){
                $backend = new backend();
                echo $backend->addProduct($_FILES['image'], $_POST['pname'], $_POST['pprice'], $_POST['pkilo']);
            } else {
                echo "400";
            }
            break;
        case 'display':
            $backend = new backend();
            echo $backend->display();
            break;
        
        case 'search':
            $backend = new backend();
            echo $backend->search($_POST['search']);
            break;
        case 'logout':
            $backend = new backend();
            echo $backend->doLogout();
            break;
        
        default:
            echo "404";
            break;
    }
}