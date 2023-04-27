<!DOCTYPE html>
<html lang="en">
<head>
    
    

</head>
<body>
    <form action="pagina.php" method="POST">
        Usuario: <input type="text" name="usuario"/>
        Clave: <input type="password" name="clave"/>
        <input type="submit" value="enviar"/>
    </form>
<?php
    echo $_POST{'username'};
    echo $_REQUEST{'username'};
?>
</body>
</html>