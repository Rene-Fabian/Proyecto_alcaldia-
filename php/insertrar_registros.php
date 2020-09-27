
<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=alcaldia","root","");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: No hay conexión con la BD. " . $e->getMessage());
}
 









try{
    // Prepare an insert statement
    $sql = "INSERT INTO registros (maquina, tela, ancho_tela, largo_tela, peine, calibre, porcentaje) 
            VALUES (:maquina, :tela, :ancho_tela, :largo_tela, :peine, :calibre, :porcentaje)";
    
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':maquina', $_REQUEST['maquina'], PDO::PARAM_STR);
    $stmt->bindParam(':tela', $_REQUEST['tela'], PDO::PARAM_STR);
    $stmt->bindParam(':ancho_tela', $_REQUEST['ancho'], PDO::PARAM_STR);
    $stmt->bindParam(':largo_tela', $_REQUEST['largo'], PDO::PARAM_STR);
    $stmt->bindParam(':peine', $_REQUEST['peine'], PDO::PARAM_STR);
    $stmt->bindParam(':calibre', $_REQUEST['calibre'], PDO::PARAM_STR);
    $stmt->bindParam(':porcentaje', $_REQUEST['porcentaje'], PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();
    
    echo '<script type="text/javascript">
    alert("Información Registrada con éxito");
    window.location.href="/apypsaSaul/index.php";
    </script>';

} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>