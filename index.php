<?php
include("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites de Ziniaré</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>

<nav>
    <div class="im">
        <img class="i1" src="images/Flag_of_Burkina_Faso.svg.png" alt="">
        <img class="i2" src="images/5DDB7732-2036-47A3-857B-C0FC6A4AA6E3.webp" alt="">
        </div>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
      
          <!-- Collapsible wrapper -->
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample"
          >
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: antiquewhite;">Acueil</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: antiquewhite;">Service</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="A propos.php" style="color: antiquewhite;">A propos</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: antiquewhite;">Conctact</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: antiquewhite;">Hebergement</a>
              </li>
              
              
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
</nav>
<div>
<h1></h1>

<p>Bienvenue dans la charmante ville de Ziniaré, située au Burkina Faso. Découvrez les merveilles de cette région, des sites historiques aux paysages naturels époustouflants.. <br>Découvrez les merveilles de Ziniaré, une destination touristique incontournable au Burkina Faso. Plongez dans la richesse culturelle de la région, explorez des paysages à couper le souffle et imprégnez-vous de l'hospitalité chaleureuse des habitants. Réservez dès maintenant votre prochain voyage!</p>
<button><a href="" style="text-decoration: none; color: white;font-size: 1rem;">visités</a></button>
</div>

</header>


<section class="sect_1">
<?php
    $req=$bdd->query("select * from text where id=1 "); 
     $im = $req-> fetch();
    ?>
<h1><?php echo $im['Titre'] ?></h1>
<?php
    $req=$bdd->query("select * from text where id=1 "); 
     $im = $req-> fetch();
    ?>
<p><?php echo $im['contenu']?></p>

<div class="rows">

<div class="his_col">
<?php
    $req=$bdd->query("select * from text where id=2 "); 
     $im = $req-> fetch();
    ?>
<h4><?php echo $im['Titre'] ?></h4>
<?php
    $req=$bdd->query("select * from text where id=2 "); 
     $im = $req-> fetch();
    ?>
<p><?php echo $im['contenu'] ?></p>
</div>
<div class="his_col">
<?php
    $req=$bdd->query("select * from text where id=3 "); 
     $im = $req-> fetch();
    ?>
<h4><?php echo $im['Titre'] ?></h4>
<?php
    $req=$bdd->query("select * from text where id=3 "); 
     $im = $req-> fetch();
    ?>
<p><?php echo $im['contenu'] ?></p>
</div>
<div class="his_col">
<?php
    $req=$bdd->query("select * from text where id=4 "); 
     $im = $req-> fetch();
    ?>
<h4><?php echo $im['Titre'] ?></h4>
<?php
    $req=$bdd->query("select * from text where id=4 "); 
     $im = $req-> fetch();
    ?>
<p><?php echo $im['contenu'] ?></p>
</div>

</div>

</section>

<section class="sect_4">

  <div class="card mb-3 di" style="max-width: 100%; border: none; margin-bottom: 10%;">
    <div class="row g-0">
    <div class="col-md-4">
    <?php
    $req=$bdd->query("select * from images where id=4 "); 
     $im = $req-> fetch();
      
    
    ?>
        <img
          src="images/<?php echo $im['nom'] ?>"
          alt="Trendy Pants and Shoes"
          class="fo"
        />
         
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title h">Description de Ziniaré</h5>
          <p class="card-text p">
            Ziniaré, située au centre du Burkina Faso, est une petite ville pittoresque riche en histoire et en culture. Son architecture unique et ses paysages magnifiques en font une destination incontournable pour les voyageurs en quête d'authenticité.
          </p>
        </div>
      </div>
    </div>
  </div>

</section>



<section class="sect_5">
<h1>Attractions touristiques</h1>

<div class="rowss">


<div class="attra_col">
<h3>Monument de l'Ange de la Réconciliation</h3>
<p>Un symbole de paix et de réconciliation qui offre une vue panoramique sur la ville.</p>
</div>
<div class="attra_col">
<h3>Parc animalier de Ziniaré</h3>
<p>Découvrez la faune locale, des girafes majestueuses aux singes espiègles.</p>
</div>
<div class="attra_col">
<h3>Ferme avicole de Ziniaré</h3>
<p>Apprenez-en plus sur l'élevage des poulets et dégustez des plats savoureux préparés avec des produits locaux.</p>
</div>

</div>

</section>
<section class="sect_6">
<h1>Activités touristiques</h1>

<div class="rowss">


  <div class="card" style="width: 20rem;">
    <div class="card-body">
    <?php
    $req=$bdd->query("select * from images where id=3 "); 
     $im = $req-> fetch();
    ?>
    <img class="im3" src="images/<?php echo $im['nom']?>" alt="">
      <h5 class="card-title">Randonnées et promenades</h5>
      <p class="card-text">Explorez les sentiers pittoresques de Ziniaré, entourés de paysages à couper le souffle.</p>
    </div>
  </div>
  <div class="card" style="width: 20rem;">
    <div class="card-body">
    <?php
    $req=$bdd->query("select * from images where id=39 "); 
     $im = $req-> fetch();
    ?>
    <img class="im3" src="images/<?php echo $im['nom']?>" alt="">
      <h5 class="card-title">Découverte de l'artisanat local</h5>
      <p class="card-text">Rencontrez des artisans talentueux et apprenez leur savoir-faire traditionnel.</p>
    </div>  
  </div>
  <div class="card" style="width: 20rem;">
    <div class="card-body">
    <?php
    $req=$bdd->query("select * from images where id=18 "); 
     $im = $req-> fetch();
    ?>
    <img class="im3" src="images/<?php echo $im['nom']?>" alt="">
      <h5 class="card-title">Visites historiques</h5>
      <p class="card-text">Imprégnez-vous de l'histoire de Ziniaré en visitant ses sites historiques et ses musées.</p>
    </div>
  </div>
</div>


</section>

<section class="sect_7">
<h1>Gastronomie et spécialités locales</h1>
<p>Ne manquez pas de goûter aux délicieuses spécialités locales de Ziniaré, telles que le poulet yassah, le tô, et le riz gras. Régalez-vous avec des plats préparés avec amour et des saveurs uniques qui vous laisseront des souvenirs culinaires inoubliables.</p>
<marquee behavior="" direction="">
<!-- <img src="export.php?id=1"> -->
<img class="im2" src="images/voici-ce-qui-m-a-ete.jpg" alt="">
<img class="im2" src="images/pizza-nomade (1).jpg" alt="">
<img class="im2" src="images/soukhothai-restaurant.jpg" alt="">
<img class="im2" src="images/photo0jpg (1).jpg" alt="">
<img class="im2" src="images/wonderful-breakfast-friendly.jpg" alt="">
<img class="im2" src="images/the-1xl.jpg" alt="">
<img class="im2" src="images/notre-jardin-arbore.jpg" alt="">

<img class="im2" src="images/voici-ce-qui-m-a-ete.jpg" alt="">
<img class="im2" src="images/pizza-nomade (1).jpg" alt="">
<img class="im2" src="images/soukhothai-restaurant.jpg" alt="">
<img class="im2" src="images/photo0jpg (1).jpg" alt="">
<img class="im2" src="images/wonderful-breakfast-friendly.jpg" alt="">
<img class="im2" src="images/the-1xl.jpg" alt="">
<img class="im2" src="images/notre-jardin-arbore.jpg" alt="">

<img class="im2" src="images/voici-ce-qui-m-a-ete.jpg" alt="">
<img class="im2" src="images/pizza-nomade (1).jpg" alt="">
<img class="im2" src="images/soukhothai-restaurant.jpg" alt="">
<img class="im2" src="images/photo0jpg (1).jpg" alt="">
<img class="im2" src="images/wonderful-breakfast-friendly.jpg" alt="">
<img class="im2" src="images/the-1xl.jpg" alt="">
<img class="im2" src="images/notre-jardin-arbore.jpg" alt="">
</marquee>
</section>


<section class="sect_8">

<h1>Informations pratiques</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/notre-jardin-arbore.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <div><h3>1</h3><h5 class="card-title">Climat</h5></div>
        <p class="card-text">
          Le climat de Ziniaré est généralement chaud et sec. Prévoyez des vêtements légers et de la protection solaire.
        </p>
        <button></button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/royal-beach-hotel.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <div><h3>2</h3><h5 class="card-title">Hébergement</h5></div>
        <p class="card-text">De nombreux hôtels et auberges accueillantes sont disponibles à Ziniaré pour tous les budgets.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/le-salon-climatise.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
         <div><h3>3</h3><h5 class="card-title">Transport</h5></div>
        <p class="card-text">Le réseau de transport local offre des options de bus et de taxis pour se déplacer facilement dans la région.</p>
      </div>
    </div>
  </div>
</div>
</section>

<!-- <section class="sect_2">

<div class="mos">

<div>
<h1>La Mosquée de Ziniaré</h1>

<p>Visitez la magnifique mosquée de Ziniaré, un exemple impressionnant de l'architecture islamique traditionnelle. Admirez les détails artistiques et imprégnez-vous de l'atmosphère paisible de ce lieu de culte sacré.</p>

</div>
<div>
<img src="images/Mosquees-de-Bani1.jpg" alt="">
</div>


</div>

</section>
<section class="sect_3">
<h1>Le Parc National de Ziniaré</h1>
<p>Explorez la beauté naturelle du Parc National de Ziniaré. Partez en safari pour observer une grande diversité de faune africaine, notamment des éléphants, des buffles et des antilopes. Profitez également des sentiers de randonnée pour découvrir une végétation luxuriante et des points de vue panoramiques.</p>
<div>
<marquee behavior="" direction="">
<img src="images/ziniare-parc-scaled.jpeg" alt="">
<img src="images/images (1).jpg" alt="">
<img src="images/images (2).jpg" alt="">
<img src="images/IMG-20210117-WA0005.jpg" alt="">
<img src="images/arton79316.jpg" alt="">
<img src="images/img.jpg" alt="">
<img src="images/img_20170131_161037.webp" alt="im">
<img src="images/Parc-animalier-de-Ziniare1.jpg" alt="">
<img src="images/lion.webp" alt="">
<img src="images/photo0jpg.jpg" alt="">
<img src="images/Sans-titre.jpg" alt="">
<img src="images/0.jpg" alt="">
<img src="images/IMG-20210117-WA0005.jpg" alt="">
</marquee>
</div>


</section> -->



<footer>

    <footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Grid container -->
        <div class="container p-4">
          <!-- Section: Images -->
          <section class="">
            <div class="row">
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/7706d9fc210b3c4a7c677352e8fccc7f.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/photos-entree-hotel.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/xpInJx6uAeGe3OLnDUUjh.jpg.pagespeed.ic.B6JIe5J-rO.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/sopatel-silmande-ouagadougou.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/H-tel-Sopatel-Silmand-Ouagadougou-Exterior.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="images/Cataf1.jpg"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Section: Images -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>


</footer>
    
</body>
</html>