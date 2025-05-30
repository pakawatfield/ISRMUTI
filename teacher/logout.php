<?php

    session_start();

    if(session_destroy()){
        header("Location: ../index.php");
    }else{
        echo "ผิดพลาด, ไม่สามารถออกจากระบบได้...";
    }


?>