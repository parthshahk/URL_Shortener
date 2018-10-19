<?php
    
    $url=$_GET['q'];

    $con=mysqli_connect("mysql.hostinger.in","u696737897_parth","`7w4]8io`aR8xu1AB1","u696737897_datab");

    $result_obj=mysqli_query($con,"SELECT * FROM url_shortener_series");
    $row=mysqli_fetch_assoc($result_obj);

    $alpha=$row['alpha'];
    $num=$row['num'];

    $new_url_id=$alpha.$num;

    mysqli_query($con,"INSERT INTO url_shortener_visitors VALUES('$new_url_id',0,0)"); 
    
    if($num==999){
        $num=0;
        $alpha++;
    }else{
        $num++;
    }

    mysqli_query($con,"UPDATE url_shortener_series SET alpha='$alpha', num=$num");
    
    mkdir("./z/".$new_url_id);
    $myfile = fopen("./z/".$new_url_id."/index.php", "w");

    $data="
    <?php 
        
        \$this_id='$new_url_id'; 
        
        \$con=mysqli_connect(\"mysql.hostinger.in\",\"u696737897_parth\",\"`7w4]8io`aR8xu1AB1\",\"u696737897_datab\");
        \$current_info_obj=mysqli_query(\$con,\"SELECT * FROM url_shortener_visitors WHERE id='\$this_id'\");
        \$current_info=mysqli_fetch_array(\$current_info_obj,MYSQLI_NUM);
        \$current_users=\$current_info[1];
        \$current_views=\$current_info[2];
        \$current_users++;
        \$current_views++;
        mysqli_query(\$con,\"UPDATE url_shortener_visitors SET th=\$current_views WHERE id='\$this_id'\");
    
        if(!isset(\$_COOKIE['urls_'.\$this_id.'_visit'])){
    
            setcookie('urls_'.\$this_id.'_visit', '1', time() + 2592000, \"/\");
            mysqli_query(\$con,\"UPDATE url_shortener_visitors SET uv=\$current_users WHERE id='\$this_id'\");
        }
    
        header('Location: $url') ;
        ?>
    ";

    fwrite($myfile, $data);

    fclose($myfile);

    echo "https://www.parthshah.xyz/url-shortener/z/".$new_url_id;
?>

