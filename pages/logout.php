<?php
session_start();
//Matamos la sesion
session_destroy();
echo 'Ha terminado la session <p><a href="index.php">index</a></p>';
?>
<script LANGUAGE="javascript">
location.href = "../index.php";
</script>