<?php
require '../src/database.php';

//showing skill
$query = 'SELECT * FROM skill WHERE id=:id';
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();
$skills = $statement->fetch(PDO::FETCH_ASSOC);

//form update
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors= [];

        $data = array_map('trim', $_POST);
        if (empty($data['name'])) {
            $errors[] = 'Name is required';
        }

        $nameLength = 100;
        if (strlen($data['name'])>$nameLength) {
            $errors[] = 'Name must not exceed ' . $nameLength . ' characters.';
        }

        $imageLength = 250;
        if (strlen($data['image'])>$imageLength) {
            $errors[] = 'Image must not exceed ' . $imageLength . ' characters.';
        }

        if (empty($errors)) {
            //prepare request
            $query = "UPDATE skill SET name=:name, image=:image, rating=:rating WHERE id=:id";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':name', $data['name'], PDO::PARAM_STR);
            $statement->bindValue(':image', $data['image'], PDO::PARAM_STR);
            $statement->bindValue(':rating', $data['rating'], PDO::PARAM_INT);
            $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            $statement->execute();
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>Amandine HELENE</title>
    </head>
    <body>
    <?php if (!empty($errors)) { ?>
    <div class="error">
        <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach;
            }?>
        </ul>
    </div>
    <h4>Update a skill</h4>
    <div class="adminForm">
        <form action="" method="post">
            <label for="name">Name</label>
            <input class="adminInput" id="name" type="text" name="name" value="<?= $data['name'] ?? $skills['name'] ?? ''?>">
            <label for="image">Image</label>
            <input class="adminInput" id="image" type="text" name="image" value="<?= $data['image'] ?? $skills['image'] ?? ''?>">
            <label for="rating">Rating</label>
            <input class="adminInput" id="rating" type="text" name="rating" value="<?= $data['rating'] ?? $skills['rating'] ?? ''?>">
            <button class="adminSend" type="submit">Update</button>
        </form>
    </div>
    <div class="adminReturn">
        <a class="deleteLink" href="delete.php?id=<?=$skills['id']?>">Delete</a>
        <a class="returnLink" href="admin.php">Return</a>
    </div>
    </body>
</html>
