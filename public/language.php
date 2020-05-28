<div class="boxListLanguages">
    <?php foreach ($languages as $language) : ?>
        <div class="box">
            <div class="skill">
                <img src="assets/images/<?=$language['image']?>" alt="<?= $language['name'] ?>">
                <h3><?= htmlentities($language['name']) ?></h3>
            </div>
            <ul>
                <?php for ($i = 1 ; $i <= $language['rating'] ; $i++) : ?>
                    <li class="pointDark"><img src="assets/images/point.png" alt="pointDark"></li>
                <?php endfor; ?>
                <?php for ($i = 1 ; $i <= (10 - $language['rating']) ; $i++) : ?>
                    <li class="pointLight"><img src="assets/images/point.png" alt="pointLight"></li>
                <?php endfor; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>