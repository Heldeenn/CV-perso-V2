<?php
require '../src/database.php';

//showing experiences
$query = 'SELECT id FROM experience';
$statement = $pdo->query($query);
$id = $statement->fetchAll(PDO::FETCH_ASSOC);

$query2 = 'SELECT skill FROM competence WHERE idJob=:id ORDER BY `idJob`';
$statement = $pdo->query($query2);
$competences = $statement->fetchAll(PDO::FETCH_ASSOC);

