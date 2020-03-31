<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
    }
    if (empty($data['name'])) {
        $errors[] = "Le champ 'Nom et prenom' est vide";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $data['name'])) {
        $errors[] = "Seules les lettres et espaces sont autorisées pour le prénom et nom";
    }

    if (empty($data['email'])) {
        $errors[] = "Le champ 'Courriel' est vide";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Le format du courriel est invalide';
    }

    if (empty($data['phone'])) {
        $errors[] = "Le champ 'Numéro de téléphone' est vide";
    }

    if (empty($data['message'])) {
        $errors[] = "Le champ 'Message' est vide";
    }
}

if (empty($errors) && !empty($_POST)) {
    header('Location: index.php?message=Message envoyé#contact');
    exit();
}