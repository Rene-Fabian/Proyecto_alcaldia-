<?php

try {
  $base =new PDO("mysql:host=localhost;dbname=alcaldia", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM usuarios WHERE usuario= :usuario AND clave= :password";

  $resultado=$base->prepare($sql);



 $usuario=htmlentities(($_POST["uname"]));

$password=htmlentities(($_POST["pswd"]));

  $resultado->bindValue(":usuario", $usuario);
  $resultado->bindValue(":password", $password);

  $resultado->execute();

  $numero_registro=$resultado->rowCount();

  if ($numero_registro !=0) {
    echo '<script type="text/javascript">
      window.location.href="../Admin_peticiones.php";
    </script>';
      
  } else {
    //  header("location:index.php");
    echo '<script type="text/javascript">
    alert("Usuario o clave incorrecta intentelo nuevamente!!!");
    window.location.href="../login.php";
    </script>';
  }
  

} catch (Exception $e) {
    die("Upss ha ocurrrido un error" . $e->getMessage());
}

?>