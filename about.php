<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kyoju-A propos</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!--FLICKITY-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/bec20da42d.js" crossorigin="anonymous"></script>
  <!-- STYLE PERSO -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-blue">

      <a class="navbar-brand" href="#"><img src="images/Logo-kyoju.png" alt="" width="100px" height="auto"></a>
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
  </header>

  <section id="presentation">

    <div class="row titre">
      <div class="col-md-6 d-flex flex-column justify-content-center ml-5 pt-5 titre-mobile">

        <h1>Des enseignants qualifiés et des ateliers réguliers</h1>
        <p>Exterarum bellorum vero lustratae conferri libenter gentium nec magnitudine omnis regionum conficiendi
          ante
          omnis vero victoriis dissimilitudine res omnis gentium.</p>
      </div>
    </div>


  </section>

  <section id="how">

    <div class="row">
      <div class="col-md-12 justify-content-center pb-5">
        <h2>Comment nous enseignons?</h2>
      </div>



      <div class="row how col-md-12 col-sm-2  justify-content-center ">
        <div>
          <img class="red-dot img-fluid" src="images/dot.png" alt="">
        </div>
        <div class="paragraphe-mobile">
          <h5>Fit quos metuat cum amicos</h5>
          <p class="lh-24">Ad Simonides reputantium coetuum reputantium ut alia sunt paucorum non.</p>
        </div>

      </div>



      <div class="row how col-md-12 col-sm-2 justify-content-center ">
        <div>
          <img class="red-dot img-fluid" src="images/dot.png" alt="">
        </div>
        <div class="paragraphe-mobile">
          <h5>Fit quos metuat cum amicos</h5>
          <p class="lh-24">Ad Simonides reputantium coetuum reputantium ut alia sunt paucorum non.</p>
        </div>

      </div>


      <div class="row how col-md-12 col-sm-2 justify-content-center ">
        <div>
          <img class="red-dot img-fluid" src="images/dot.png" alt="">
        </div>
        <div class="paragraphe-mobile">
          <h5>Fit quos metuat cum amicos</h5>
          <p class="lh-24">Ad Simonides reputantium coetuum reputantium ut alia sunt paucorum non.</p>
        </div>

      </div>



      <div class="row how col-md-12 col-sm-2 justify-content-center ">
        <div>
          <img class="red-dot img-fluid" src="images/dot.png" alt="">
        </div>
        <div class="paragraphe-mobile">
          <h5>Fit quos metuat cum amicos</h5>
          <p class="lh-24">Ad Simonides reputantium coetuum reputantium ut alia sunt paucorum non.</p>
        </div>

      </div>


  </section>

  <section id="compteur">

    <div class="row align-items-center bg-compteur compteur pt-5 pb-5">

      <div class="col-md-2 offset-md-2 text-center">

        <div class="icon-compteur">

          <i class="fas fa-users fa-2x"></i>

        </div>
        <h4 id="membres-compteur">0</h4>

        <h5>membres</h5>

      </div>


      <div class="col-md-2 text-center">

        <div class="icon-compteur">

          <i class="fas fa-question fa-2x"></i>

        </div>
        <h4 id="questions-compteur">0</h4>

        <h5>questions</h5>

      </div>


      <div class="col-md-2 text-center">

        <div class="icon-compteur">
          <i class="fas fa-users-cog fa-2x"></i>

        </div>
        <h4 id="ateliers-compteur">0</h4>

        <h5>ateliers</h5>

      </div>


      <div class="col-md-2 text-center">

        <div class="icon-compteur">

          <i class="fas fa-video fa-2x"></i>

        </div>
        <h4 id="video-compteur">0</h4>

        <h5>vidéos</h5>

      </div>

    </div>
  </section>

  <section id="teachers">

    <h2 class="ml-4 pt-5 pb-5">Nos enseignants</h2>


    <div class="main-carousel d-none d-sm-block" data-flickity='{ "cellAlign": "center", "lazyLoad": 5, "wrapAround": true, "autoPlay": true, "pauseAutoPlayOnHover": false}'>
      <div class="carousel-cell"><img class="carousel-cell-image img-fluid" data-flickity-lazyLoad="./images/photos_prof1.png" />
        <div class="graduate-bottom">
          <div class="p semibold mb-4">Corinne Roux</div>
          <div class="p position">Prof japonais</div>
        </div>
      </div>
      <div class="carousel-cell"><img class="carousel-cell-image img-fluid" data-flickity-lazyLoad="./images/photo_prof2.png" />
        <div class="graduate-bottom">
          <div class="p semibold mb-4">Armand Perrin</div>
          <div class="p position">Prof japonais</div>
        </div>
      </div>
      <div class="carousel-cell"><img class="carousel-cell-image img-fluid" data-flickity-lazyLoad="./images/photo_prof3.png" />
        <div class="graduate-bottom">
          <div class="p semibold mb-4">Thierry Breton</div>
          <div class="p position">Prof japonais</div>
        </div>
      </div>
      <div class="carousel-cell"><img class="carousel-cell-image img-fluid" data-flickity-lazyLoad="./images/photo_prof4.png" />
        <div class="graduate-bottom">
          <div class="p semibold mb-4">Maeva Rey</div>
          <div class="p position">Prof japonais</div>
        </div>
      </div>
    </div>

    <div class="d-sm-none">

      <div class="row ml-5">
        <div class="graduate-card col-md-3">
          <div class="prof-photo1"></div>
          <div class="graduate-bottom">
            <div class="p semibold mb-4">Corinne Roux</div>
            <div class="p position">Prof de japonais</div>
          </div>
        </div>

        <div class="graduate-card col-md-3">
          <div class="prof-photo2"></div>
          <div class="graduate-bottom">
            <div class="p semibold mb-4">Armand Perrin</div>
            <div class="p position">Prof de japonais à Kyoto</div>
          </div>
        </div>
        <div class="graduate-card col-md-3">
          <div class="prof-photo3"></div>
          <div class="graduate-bottom">
            <div class="p semibold mb-4">Thierry Breton</div>
            <div class="p position">Prof de japonais</div>
          </div>
        </div>
        <div class="graduate-card col-md-3">
          <div class="prof-photo4"></div>
          <div class="graduate-bottom">
            <div class="p semibold mb-4">Maeva Rey</div>
            <div class="p position">Prof de japonais</div>
          </div>
        </div>


      </div>

      <div class="block mt-3">
        <a href="#" class="link-block w-inline-block">
          <div class="p _20 semibold ml-6">Graduates</div>
          <img src="images/btn-graduates.png" alt="" class="blue-circle nm">
        </a>
      </div>

    </div>
  </section>


  <section id="ready">

    <div class="row">
      <div class="col-md-6 pt-5 d-flex justify-content-center ">
        <img src="images/chat chanceux.png" alt="">
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <h1>Etes-vous prêts?</h1>
        </div>
        <form action="validation-contact.php" method="post" role="form" id="contactForm">
          <div class="row ready ">
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
          <button type="submit" id="form-submit" class="btn btn-dark btn-lg pull-right ml-2">Commencer
          </button>
      </div>
      </form>

    </div>

  </section>

  <?php include('footer.php'); ?>


  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


  <script type="text/javascript" src="css/script.js"></script>

</body>


</html>