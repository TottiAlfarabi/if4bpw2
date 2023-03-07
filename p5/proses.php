<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo $_POST['nis'];
    }
    else{
        echo "Silahkan isi form terlebih dahulu";
    }

    
    


?>