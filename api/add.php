<?php
    // 接收前段数据
    $pro_name = $_POST["pro_name"];
    $pro_src = $_POST["pro_src"];
    $pro_size = $_POST["pro_size"];
    $pro_price = $_POST["pro_price"];
    $pro_num = $_POST["pro_num"];

    // 链接数据库
    $db = new musqli("127.0.0.1","root","root","products");

    // 定义sql语句
    $sql = "INSERT INTO pro(pro_name,pro_src,pro_size,pro_price,pro_num) VALUES ('{$pro_name}','{$pro_src}','{$pro_size}','{$pro_price}','{$pro_num}')";

    // 执行sql语句
    $flag = $db->query($sql);
    if($flag){
        echo '{"ok":true}';
    } else{
        echo '{"ok":false}';
    }
?>