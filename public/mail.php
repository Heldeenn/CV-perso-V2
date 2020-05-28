<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
    }
    if (empty($data['name'])) {
        $errors[] = "Veuillez renseigner votre prénom et nom";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $data['name'])) {
        $errors[] = "Seules les lettres et espaces sont autorisées pour le prénom et nom";
    }

    if (empty($data['email'])) {
        $errors[] = "Veuillez renseigner votre email";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Le format de l\'email est invalide';
    }

    if (empty($data['phone'])) {
        $errors[] = "Veuillez renseigner votre numéro de téléphone";
    }

    if (empty($data['message'])) {
        $errors[] = "N'avez-vous rien à me dire ?";
    }
}

if (empty($errors) && !empty($_POST)) {
    $query = "INSERT INTO contact (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':name', $data['name'], PDO::PARAM_STR);
    $statement->bindValue(':email', $data['email'], PDO::PARAM_STR);
    $statement->bindValue(':phone', $data['phone'], PDO::PARAM_STR);
    $statement->bindValue(':message', $data['message'], PDO::PARAM_STR);
    $statement->execute();
    header('Location: index.php?message=Bravo ! Votre message a bien été envoyé#contact');
    exit();
}