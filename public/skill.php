<div class="boxList">
    <?php foreach ($skills as $skill) : ?>
        <div class="box">
            <div class="skill">
                <img src="assets/images/<?=$skill['image']?>" alt="<?= $skill['name'] ?>">
                <h3><?= htmlentities($skill['name']) ?></h3>
            </div>
            <ul>
                <?php for ($i = 1 ; $i <= $skill['rating'] ; $i++) : ?>
                    <li class="pointDark"><img src="assets/images/point.png" alt="pointDark"></li>
                <?php endfor; ?>
                <?php for ($i = 1 ; $i <= (10 - $skill['rating']) ; $i++) : ?>
                    <li class="pointLight"><img src="assets/images/point.png" alt="pointLight"></li>
                <?php endfor; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>