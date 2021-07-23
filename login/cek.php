<?php
    // jika belum login

    if (isset($_SESSION['log'])) {
        # code...
    } else {
        header('location:./login/login.php');
    }
?>