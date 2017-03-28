<?php
$BD = mysqli_connect('localhost','root','','desafio_web') ; 

    if ($_GET) {
        print_r($_GET);
       // die;
        $sql= " DELETE FROM `mercadoria` WHERE Codigo_Mercadoria =".$_GET["id"];
        print_r($sql);
       // die();
        $result = mysqli_query($BD,$sql);
        if (!$result) {
            die( mysqli_error($BD));
        }

        header('Location: ./?page=list');
       // var_dump($result);
        //die;
       // redirect

    }
?>