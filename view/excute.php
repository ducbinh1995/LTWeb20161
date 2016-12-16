<?php
    $msg=" ";
    if(isset($_POST['upload'])){
        //path to store upload file
        $target="view/image/".basename($_FILE['image']['name']);
        //connect database
        $image=$_FILE['image']['name'];
        $product_name=$_POST['product_name'];
        //lenh add trong databse

        //move upload image to file
        if(move_uploaded_file($_FILE['image']['name'], $target)){
            $msg="success";
        }else{
            $msg="fail";
        }
    }
?>