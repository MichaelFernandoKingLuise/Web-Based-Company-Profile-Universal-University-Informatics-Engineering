<?php
session_start();
unset($_SESSION['username']);
session_unset();
session_destroy();

echo "<script>alert('Anda telah logout, terima kasih'); window.location.replace('index.php') </script>";
?>