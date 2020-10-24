<?php 
    if (!function_exists("protect")) {
        function protect(){
            if (!isset($_SESSION)) {
                session_start();
                if (!isset($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
                    header("Location: ../index.php");
                }
            }
            
        };
    };

?>