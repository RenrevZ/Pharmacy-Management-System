<?php
    session_start();
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    header('location: ../../index.php');