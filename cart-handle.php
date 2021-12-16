<?php

if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
// print_r($_POST['DH51800367_sl']);
// exit;
//$action = isset($_POST['DH51800367_action']);

if (isset($_POST['DH51800367_action'])) { // add // 
    $action = $_POST['DH51800367_action'];
    if ($action == 'add') {
        if (isset($_POST['DH51800367_id'])) {
            $id = $_POST['DH51800367_id'];
            $c = $_SESSION['cart'];
            //$c=[];

            $id = $_POST['DH51800367_id'];
            if (!isset($c[$id]))
                $c[$id] = [
                    'id' => $_POST['DH51800367_id'],
                    'name' => $_POST['DH51800367_name'],
                    'tennxb' => $_POST['DH51800367_nxb'],
                    'manxb' => $_POST['DH51800367_manxb'],
                    'price' => $_POST['DH51800367_price'],
                    'hinh' => $_POST['DH51800367_img'],
                    'qty' => $_POST['DH51800367_sl']
                ];
            else $c[$id]['qty'] += 1;
        }
        $_SESSION['cart'] = $c;

        // echo "<pre>";
         
        // unset ($_SESSION['cart']); exit;
    }
} else {
    if (isset($_GET['DH51800367_action'])) {
        $action = $_GET['DH51800367_action']; // delete // 
        if ($action == 'delete' && isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else if ($action == 'deleteAll') {
            unset($_SESSION['cart']);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}


header('Location: ' . $_SERVER['HTTP_REFERER']);
