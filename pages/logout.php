<?php
session_start();
//Matamos la sesion
session_destroy();
echo 'Gracias por usar Keymaster <p><a href="admin.php">index</a></p>';
?>
<script type="text/javascript">

// // location.href = "../index.php";


function redireccionar(){window.location="../index.php";} 
setTimeout ("redireccionar()", 1500);


</script>