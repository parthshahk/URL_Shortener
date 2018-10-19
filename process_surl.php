<?php

    $surl=$_GET['q'];

    $con=mysqli_connect("mysql.hostinger.in","u696737897_parth","`7w4]8io`aR8xu1AB1","u696737897_datab");
    
    $surl=rtrim($surl,"' ','/'");
    $pos=stripos($surl,"z")+18;
    $id=substr($surl,$pos);

    $result_obj=mysqli_query($con,"SELECT * FROM url_shortener_visitors WHERE id='$id'");
    $row=mysqli_fetch_assoc($result_obj);

    echo $row['uv']."p".$row['th'];
?>