<?php
try{
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
} catch(Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}

$pdo->query("CREATE TABLE IF NOT EXISTS conctat ( 
    id            INTEGER         PRIMARY KEY AUTOINCREMENT,
    Nom      VARCHAR( 250 ),
    prenom   VARCHAR( 250 )
);");


$stmt = $pdo->prepare("INSERT INTO conctact (nom, prenom) VALUES (:nom, :prenom)");
$result = $stmt->execute(array(
    'nom'         => "TCHANDA",
    'junior'       => "Junior"
));
?>