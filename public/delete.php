<?php
require '../src/database.php';
$query = 'DELETE FROM skill WHERE id=:id';
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();
$skills = $statement->fetch(PDO::FETCH_ASSOC);

header('Location: admin.php');