<nav class="navbar navbar-expand-lg navbar-dark bg-dark perso_size20">
  <!-- BOUTON: qui apparait quand on réduit la fenêtre -->
  <!-- Burger MENU -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Dropdown liste: L'asso    pour l'association -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle perso_ColorMenuRose" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          L'asso.
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item perso_ColorMenuRose" href="../globals/association.php">Qui sommes-nous ?</a>
          <a class="dropdown-item perso_ColorMenuRose" href="../globals/partenaire.php">Partenaires</a>
        </div>
      </li>
      <!-- Dropdown liste: Pensionnaires -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle perso_ColorMenuOrange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pensionnaires
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">          
          <a class="dropdown-item perso_ColorMenuOrange" href="../Globals/pensionnaire.php">Ils cherchent une famille</a>
          <a class="dropdown-item perso_ColorMenuOrange" href="#">Famille d'Accueil Longue Durée</a>
          <a class="dropdown-item perso_ColorMenuOrange" href="#">Les anciens</a>
        </div>
      </li>
      <!-- Dropdown liste: Actus -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle perso_ColorMenuVert" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actus
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item perso_ColorMenuVert" href="../Globals/actus.php">Nouvelles des adoptés</a>
          <a class="dropdown-item perso_ColorMenuVert" href="#">Evénements</a>
          <a class="dropdown-item perso_ColorMenuVert" href="#">Nos actions au quotidien</a>          
        </div>
      </li>
      <!-- Dropdown liste: Conseils -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle perso_ColorMenuRouge" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Conseils
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item perso_ColorMenuRouge" href="../Articles/temperatures.php">Températures</a>
          <a class="dropdown-item perso_ColorMenuRouge" href="../Articles/chocolat.php">Le chocolat</a>
          <a class="dropdown-item perso_ColorMenuRouge" href="../Articles/plantes.php">Les plantes toxiques</a>
          <a class="dropdown-item perso_ColorMenuRouge" href="../Articles/sterilisation.php">Stérilisations</a>
          <a class="dropdown-item perso_ColorMenuRouge" href="../Articles/educateur.php">Educateur canin</a>
        </div>
      </li>
      <!-- Dropdown liste: Contacts -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle perso_ColorMenuBleuCiel" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contacts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item perso_ColorMenuBleuCiel" href="../Contact/contact.php">Contact</a>
          <a class="dropdown-item perso_ColorMenuBleuCiel" href="../Contact/don.php">Don</a>
          <a class="dropdown-item perso_ColorMenuBleuCiel" href="../Contact/mentions.php">Mentions légales</a>
        </div>
      </li>

      <!-- Dropdown liste: Demo avec séparation****** -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Demo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
        
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

      <!-- A propos -->
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">A propos</a>
      </li>

    </ul>
  </div>
</nav>