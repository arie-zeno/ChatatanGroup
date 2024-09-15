<?php

require 'functions.php';

if(isset($_GET["id"])){

    if(deleteData($_GET['id']) > 0){
        echo '<script>
        document.location.href = "take.php?delete=1";
        </script>';
    }
}
    


?>