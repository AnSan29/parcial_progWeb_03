<?php
session_start();
if (!isset($_SESSION['codigo'])) {
    echo "<script> 
    alert('Digite primero un codigo')
    setTimeout(function() {
    window.location.href = 'index.php';
}, 1500)
    </script>";
} else {
echo $_SESSION['codigo'];

}
