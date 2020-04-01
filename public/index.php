<?php
    require '../src/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Amandine HELENE</title>
</head>

<?php include 'mail.php'; ?>

<body>

    <header>
        <nav class="navbar">
            <div class="liens_h" id="liens_h">
                <a href="#banner">A propos de moi</a>
                <a href="#competences">Compétences</a>
                <a href="#experiences">Expériences</a>
                <a href="#formation">Formations</a>
                <a href="#hobbies">Hobbies</a>
                <a href="#contact">Contact</a>
            </div>
            <a class="menu_burger" href="#liens_h">☰</a>
        </nav>
    </header>

    <section id="banner">
        <div class="photo">
            <img src="assets/images/photo.jpeg" alt="photo">
        </div>
        <div class="nameTitle">
            <h1>Amandine HELENE</h1>
            <div class="name">
                <h2>Développeuse Web
                <br/>
                    PHP - Symphony
                </h2>
            </div>
            <p>amandine.ln7@gmail.com</p>
            <p>06.21.27.43.82</p>
        </div>
        <div class="lineResponsive">
            <div class="lineBannerResponsive"></div>
        </div>
        <div class="socialNetwork">
            <div class="lineBanner"></div>
            <a href=""><img src="assets/images/linkedin.png" alt="LinkedIn"></a>
            <a href=""><img src="assets/images/github.png" alt="GitHub"></a>
            <a href=""><img src="assets/images/twitter.png" alt="Twitter"></a>
        </div>
        <div class="addressResponsive">
            <p>amandine.ln7@gmail.com</p>
            <p>06.21.27.43.82</p>
        </div>
        <div class="about">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>

    <?php
    $query = 'SELECT * FROM skill ORDER BY `order`';
    $statement = $pdo->query($query);
    $skills = $statement->fetchAll(PDO::FETCH_ASSOC);

//    $skills = [
//        ['name' => 'PHP 7', 'image' => 'php.svg', 'rating' => 7],
//        ['name' => 'Symphony', 'image' => 'symfony.png', 'rating' => 5],
//        ['name' => 'HTML 5', 'image' => 'html.svg', 'rating' => 7],
//        ['name' => 'CSS 3', 'image' => 'css.svg', 'rating' => 7],
//        ['name' => 'GIT', 'image' => 'git.png', 'rating' => 6],
//        ['name' => 'MySQL', 'image' => 'mysql.png', 'rating' => 4],
//    ]
    ?>

    <?php
    $languages = [
        ['name' => 'Anglais', 'image' => 'english.svg', 'rating' => 8],
        ['name' => 'Japonais', 'image' => 'japan.svg', 'rating' => 4],
    ]
    ?>

    <section id="competences">
        <div class="titles">
            <h2>Compétences</h2>
        </div>
        <div class="lineSection"></div>

        <?php
        include 'skill.php';
        ?>

        <div class="titleLanguages">
            <h2>Langues</h2>
            <div class="lineLanguages"></div>
        </div>

        <?php
        include 'language.php';
        ?>

    </section>

    <?php
    $jobs = [
        'Assistante technique de production' => [
            '2018',
            '2019',
            'TPC SCOP SA',
            'Saran',
            'Gestion des données et des documents nécessaires à la production, du démarrage jusqu\'à la clôture de la commande.',
            [
                'Anticiper et prioriser',
                'Expliquer et transmettre un dossier de production',
                'Analyser et synthétiser des informations',
                'Coordonner plusieurs projets',
                'Analyser la demande et les besoins du client',
                'Travailler en équipe'
            ]
        ],
        'Programme Vacances-travail' => [
            '2017',
            '2018',
            'Japon',
            'Osaka, Fukuoka, Chiba, Tokyo',
            'Professeur d\'anglais et de français en cours particulier.',
            [
                'Voyage en autonomie',
                'Gestion de budget',
                'Capacité d\'adaptation',
                'Empathie'
            ]
        ],
        'Chef de groupe' => [
            '2017',
            '',
            'TPC SCOP SA',
            'Saint Jean de Braye',
            'Management gestion d\'équipe d\'environ 15 personnes.',
            [
                'Initiative',
                'Adaptation',
                'Management',
                'Rigueur et organisation',
                'Travail en équipe',
                'Analyses quantitatives et qualitatives'
            ]
        ],
        'Conditionneuse' => [
            '2016',
            '2017',
            'TPC SCOP SA',
            'Saint jean de Braye',
            'Conductrice de ligne de 3 à 5 opérateurs.',
            [
                'Travail en équipe',
                'Organisation des activités des opérateurs'
            ]
        ],
        'Professeure de français langue étrangère' => [
            '2015',
            '2016',
            'ADRIC (Association pour le Développement des Relations Internationales et Culturelles)',
            'Orléans',
            'Enseignement du français à un petit groupe d\'élèves dans le cadre du stage licence 3.',
            [
                'Conception d\'exercices et fiches pédagogiques'
            ]
        ],
        'Travail saisonnier' => [
            '2009',
            '2016',
            'TPC SCOP SA | Norbert Dentressangle | Carrefour Market | Société AFUME',
            'Région d\'Orléans',
            'Conditionnement, Manutention, Employée commerciale, Agent polyvalent',
            [
                'Autonomie financière',
            ]
        ]
    ]
    ?>

    <section id="experiences">
        <div class="titles">
            <h2>Expériences</h2>
        </div>
        <div class="lineSection"></div>
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
    </section>

    <?php
    $studies = [
        'Développeur Web et mobile' => [
            '2020',
            'Wild Code School',
            'Orléans',
            'Formation PHP'
        ],
        'Licence langues étrangères appliquées' => [
            '2016',
            'Université d\'Orléans',
            '',
            'Anglais - Japonais'
        ],
        'Baccalauréat technologique' => [
            '2009',
            'Lycée Jacques Monod',
            'Saint Jean de Braye',
            'Sciences et technologies de laboratoire'
        ]
    ]
    ?>

    <section id="formation">
        <div class="titles">
            <h2>Formations</h2>
        </div>
        <div class="lineSection"></div>
        <div class="boxList">
            <?php foreach ($studies as $study => $details) : ?>
                <div class="boxWork">
                    <div class="titleDate">
                        <h3><?= $study ?></h3>
                        <p><?= $details[0] ?></p>
                    </div>
                    <div class="place">
                        <p><?= $details[1] ?>
                            <br/>
                            <i><?= $details[2] ?></i>
                        </p>
                    </div>
                    <div class="details">
                        <p><b><?= $details[3] ?></b></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php
    $hobbies = [
        'Voyages' => ['assets/images/osaka.jpg', 'Japan'],
        'Montage vidéo (Adobe premiere pro 19)' => ['assets/images/montage.PNG', 'Adobe premiere pro'],
        'Jeux vidéos (construction / stratégie)' => ['assets/images/citiesSkylines.jpg', 'Cities Skylines'],
        'Jeux de société' => ['assets/images/jeux.png', 'Jeux de société'],
        'Cinéma' => ['assets/images/cinema.jpg', 'Cinema']
    ]
    ?>

    <section id="hobbies">
        <div class="titles">
            <h2>Hobbies</h2>
        </div>
        <div class="lineSection"></div>
        <div class="boxList">
            <?php foreach ($hobbies as $hobby => $details) : ?>
            <figure>
                <img src="<?= $details[0] ?>" alt="<?= $details[1] ?>">
                <figcaption><?= $hobby ?></figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="contact">
    <?php
    include 'form.php';
    ?>
    </section>

    <footer>
        <?php
        include 'footer.php'
        ?>
    </footer>

</body>
</html>