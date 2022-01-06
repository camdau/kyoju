<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoju-Accueil</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/bec20da42d.js" crossorigin="anonymous"></script>
    <!-- STYLE PERSO -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/front-page.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <header>
        <div class="d-none d-sm-block bg-japan">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

                <a class="navbar-brand" href="#"><img src="images/Logo-kyoju.png" alt="" width="150px" height="auto"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"index.php\">Accueil</a>"; ?>
                        </li>
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"about.php\">A propos</a>"; ?>
                        </li>
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"prices.php\">Nos formules</a>"; ?>
                        </li>
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"contact.php\">Contact</a>"; ?>
                        </li>
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"contact.php\"><button type=\"button\" class=\"btn btn-danger btn-join\">Rejoins-nous</button></a>"; ?>
                        </li>
                    </ul>
                </div>

            </nav>

            <button type="button" class="btn btn-danger btn-learn">Commencer</button>
        </div>


        <div class="d-sm-none">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
                <a class="navbar-brand" href="#"><img src="images/Logo-kyoju.png" alt="" width="150px" height="auto"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <?php echo "<a class=\"nav-link\" href=\"about.php\">A propos</a>"; ?>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Cours</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Graduates</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><button type="button" class="btn btn-danger btn-join ">Rejoins-nous</button></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>

    </header>

    <div class="img-mobile d-sm-none">
        <img src="images/japan-mobile(1).jpg" alt="">
        <button type="button" class="btn btn-danger btn-learn">Commencer</button>
    </div>

    <main>
        <section id="about">
            <div class="row ">


                <div class="col-md-6 ">
                    <img src="images/etudiants.jpg" class="etudiants img-fluid" alt="etudiants travaillant en groupe">
                </div>

                <div class="col-md-6 pt-3 pr-0">
                    <h2>A propos de nous</h2>
                    <p>Kyoju  propose une formation complète (écrite et orale) grâce à des méthodes didactiques modernes et communicatives.
                    Chez Kyoju, vous apprenez le japonais en petits groupes de 5 à 15 participants maximum. Cette formule permet d’optimiser l’apprentissage et la pratique de la langue.
                    Tous nos professeurs sont qualifiés et aussi des locuteurs natifs expérimentés ayant reçu une formation dans le domaine de la formation et de l’enseignement du japonais.
                    </p>
                    <button type="button" class="btn btn-danger">En savoir plus</button>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="d-flex justify-content-center">
                <h5>Ce que nous faisons</h5>
            </div>
            <div class="d-flex justify-content-center">
                <h2>Comment pouvons-nous vous aider?</h2>
            </div>

            <div class="row">

                <div class="col-md-4 d-flex justify-content-center ">
                    <div class="text-center">
                        <img src="images/graduation-hat.png" class="img-fluid" alt="">
                        <p>Des cours complets</p>
                        <p>Des leçons courtes idéales pour s'adapter au quotidien, au travail et aux voyages.</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-center">
                        <img src="images/line-graphic-on-monitor-screen.png" class="img-fluid" alt="">
                        <p>En ligne</p>
                        <p>Apprends n’importe où, n’importe quand avec plus de 500 vidéos à disposition.</p>
                    </div>
                </div>

                <div class="col-md-4  d-flex justify-content-center">
                    <div class="text-center">
                        <img src="images/workshop.png" class="img-fluid" alt="">
                        <p>Ateliers</p>
                        <p>Participe à des ateliers deux fois par semaine pour mettre en pratique ton japonais et progresser plus vite!</p>
                    </div>
                </div>

            </div>

        </section>

        <section id="graduates">
            <div class="d-flex justify-content-center">
                <h5>Que sont-ils devenus?</h5>
            </div>

            <div class="d-flex justify-content-center">
                <h2>Nos anciens étudiants</h2>
            </div>


            <div class="row ml-5">

                <div class="graduate-card col-md-3">
                    <div class="graduate-photo"></div>
                    <div class="graduate-bottom">
                        <div class="mb-4">Célia Dupont</div>
                        <div>Prof de français à Tokyo</div>
                    </div>
                </div>

                <div class="graduate-card col-md-3">
                    <div class="graduate-photo2"></div>
                    <div class="graduate-bottom">
                        <div class="mb-4">Roxane Leroy</div>
                        <div>Marketing digital à Kyoto</div>
                    </div>
                </div>
                <div class="graduate-card col-md-3">
                    <div class="graduate-photo3"></div>
                    <div class="graduate-bottom">
                        <div class=" mb-4">Léon Martin</div>
                        <div>Développeur Back à Osaka</div>
                    </div>
                </div>
                <div class="graduate-card col-md-3">
                    <div class="graduate-photo4"></div>
                    <div class="graduate-bottom">
                        <div class=" mb-4">Raoul Perez</div>
                        <div>Architecte à Yokohama</div>
                    </div>
                </div>


            </div>

            <div class="block mt-3">
                <a href="#">
                    <div class="p _20 semibold ml-6">Graduates</div>
                    <img src="images/btn-graduates.png" alt="">
                </a>
            </div>

        </section>

        <section id="contact">
            <div class="row contact">

                <div class=" col-md-6">

                    <div class="col-md-6">
                        <h1>Nous contacter</h1>
                    </div>

                    <form action="validation-contact.php" method="post" role="form" id="contactForm">
                        <div class="row ">
                            <div class="form-group col ml-2">

                                <label for="inputname" class="h4">Nom</label>
                                <input type="text" name="name" class="form-control" id="inputname" placeholder="Entrer votre nom" required>

                            </div>
                            <div class="form-group col ml-2">
                                <label for="inputemail" class="h4">Email</label>
                                <input type="email" name="email" class="form-control" id="inputemail" placeholder="Entrer votre email" required>

                            </div>
                        </div>
                        <div class="form-group col ">
                            <label for="inputmessage" class="h4 ">Message</label>
                            <textarea id="inputmessage" name="message" class="form-control" rows="5" placeholder="Entrer votre message" required></textarea>

                        </div>
                        <button type="submit" id="form-submit" class="btn btn-dark btn-lg pull-right ml-2">Envoyez
                        </button>
                    </form>

                </div>

                <div class="col-md-6 pt-5 d-flex justify-content-center">
                    <img src="images/paysage.jpg" alt="" class="paysage">
                </div>



            </div>
        </section>

        <?php include('footer.php'); ?>
    </main>


</body>

</html>