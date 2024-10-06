<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $TituloProyecto = $_POST["TituloProyecto"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO proyecto (nombre, deadline) VALUES (?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$TituloProyecto]);

        $pdo = null;
        $stmt = null;

        die();

    }catch (PDOException $e)
    {
        die("Fallo con el Query" . $e->getMessage());
    }
}
else {
    header("Location ../home.html");
}