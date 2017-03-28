<?php
$BD = mysqli_connect('gk90usy5ik2otcvi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','vkdb3vzev6ek31bz','jcwhpls9hwxlk2ed','c2v4lib3jdfo3hs7') ; 

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