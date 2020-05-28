<?php
if (!empty($_POST)) {
    if (!empty($errors)) {?>
        <ul class="error">
            <?php foreach($errors as $error) :?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
<?php }
}

if (!empty($_GET['message'])) {?>
    <div class="success"><?= $_GET['message']?></div>
<?php }?>

<div class="formulaire">
    <div class="hire">
        <img src="assets/images/uenoPark.jpeg" alt="Ueno Park">
    </div>
    <form action="index.php#contact" method="post">
        <label for="name">Prénom et nom</label>
        <input class="input-form" value="<?= $data['name'] ?? '' ?>" id="name" type="text" placeholder="Tom Nook" name="name">
        <label for="email">Email</label>
        <input class="input-form" value="<?= $data['email'] ?? '' ?>" id="email" type="email" placeholder="tom_nook@nookinc.com" name="email">
        <label for="phone">Numéro de téléphone</label>
        <input class="input-form" value="<?= $data['phone'] ?? '' ?>" id="phone" type="text" placeholder="0610203040" name="phone">
        <label for="message">Message</label>
        <textarea placeholder="Message" id="message" rows="10" cols="50" name="message"></textarea>
        <button class="send" type="submit">Envoyer</button>
    </form>
</div>