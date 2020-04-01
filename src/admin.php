<?php
require '../src/database.php';

$query = 'SELECT * FROM skill';
$statement = $pdo->query($query);
$skills = $statement->fetchAll(PDO::FETCH_ASSOC);

include 'public/skill.php';

include 'public/language.php';