<?php 


    $str = "<input type='text' name='user_email'>";

    $index = strpos($str, 'name=');

    //echo $index;
    $i = $index + 6;
    while($str[$i] != "'"){
        echo $str[$i];
        $i += 1;
    }

    $str = '     ishwar baisla    ';
    echo trim($str);
?>