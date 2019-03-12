<?php
    header('Content-Type: application/json');

    
    $dbb='mysql:host=localhost;dbname=api_db';//ชือฐานข้อมูล
            //$CHAR_SET = "charset=utf8";

    $username='root';   //  =ชื่อผู้ใช้
    $pass='';




    // $objConnect = mysqli_connect("localhost","root","","api_db");

    $con = new PDO($dbb,$username,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'utf8' COLLATE 'utf8_unicode_ci' "  ));
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // $strSQL = "SELECT * FROM map";
    // $objQuery = mysqli_query($strSQL);

    

    $strSQL = "SELECT * FROM map ";
    $stm = $con->prepare($strSQL);
    $stm->execute();

    $resultArray =array();
    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        array_push($resultArray,$row);
    }
    echo json_encode($resultArray);
?>
