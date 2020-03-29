<section id="contact">
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

        if (!empty($errors)) {?>
            <ul class="error">
                <?php foreach($errors as $error) :?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <?php
        } else {
            header('Location: form.php?message=Mail envoyé');
        }
    }?>
    <div class="success">
        <?= $_GET['message'] ?? '' ?>
    </div>

    <div class="formulaire">
        <div class="hire">
            <img src="images/uenoPark.jpeg" alt="Ueno Park">
        </div>
        <form action="" method="post">
            <label for="name">Prénom et nom</label>
            <input class="input-form" value="<?= $data['name'] ?? '' ?>" id="name" type="text" placeholder="Tom Nook" name="name">
            <label for="email">Courriel</label>
            <input class="input-form" value="<?= $data['email'] ?? '' ?>" id="email" type="email" placeholder="tom_nook@nookinc.com" name="email">
            <label for="phone">Numéro de téléphone</label>
            <input class="input-form" value="<?= $data['phone'] ?? '' ?>" id="phone" type="text" placeholder="0610203040" name="phone">
            <label for="message">Message</label>
            <textarea placeholder="Message" id="message" rows="10" cols="50" name="message"></textarea>
            <button class="send" type="submit">Envoyer</button>
        </form>
    </div>
</section>
