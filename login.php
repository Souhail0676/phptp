<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $filter = ['user_name' => $uname, 'password' => $pass];
        $result = $collection->findOne($filter);

        if ($result) {
            $_SESSION['user_name'] = $result['user_name'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['id'] = (string)$result['_id'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}
