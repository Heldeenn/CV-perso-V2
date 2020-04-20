<div class="boxListJob">
    <?php foreach ($jobs as $job => $details) : ?>
        <div class="boxWork">
            <div class="titleDate">
                <h3><?= $job ?></h3>
                <p><?= $details[0] ?>
                    <br/>
                    <?= $details[1] ?>
                </p>
            </div>
            <div class="place">
                <p><?= $details[2] ?>
                    <br/>
                    <i><?= $details[3] ?></i>
                </p>
            </div>
            <div class="details">
                <p><b><?= $details[4] ?></b></p>
                <ul>
                    <?php foreach ($details[5] as $skill) : ?>
                        <li><?= $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>