<nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="../../cinemet/index.php">
                <img src="../../cinemet/asset/img/Logo.png" alt="Logo Cinemet">
            </a>
            <a class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#menu" 
            aria-controls="navbarSupportedContent" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../../cinemet/index.php" class="nav-link font-text text-light">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../cinemet/content/affiche.php" class="nav-link font-text text-light">A L'Affiche</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../cinemet/content/contact.php" class="nav-link font-text text-light">Contact</a>
                    </li>
                </ul>
                <?php

                if(isset($_SESSION['id'])) { 

                    if(isset($_SESSION['Id_role'])) {
                        if($_SESSION['Id_role'] == 1){ ?>
                           <div class="dropdown">
                            <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <?= $_SESSION['pseudo'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../cinemet/content/profil.php">Mon Profil</a></li>
                                <li><a class="dropdown-item" href="../../cinemet/traitement/traitement_logout.php">Déconnexion</a></li>
                                <li><a class="dropdown-item" href="../../cinemet/content/crud.php">Pannel Admin</a></li>
                            </ul>
                            </div>
                        
                                    
                              <?php  } else { ?>
                                    <div class="dropdown">
                            <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <?= $_SESSION['pseudo'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../cinemet/content/profil.php">Mon Profil</a></li>
                                <li><a class="dropdown-item" href="../../cinemet/traitement/traitement_logout.php">Déconnexion</a></li>
                            </ul>
                            </div>
                            <?php }
                    }
                }else { ?>
                    <div class="ms-auto d-flex align-items-center">
                    <a href="../../cinemet/content/login.php" type="button" class="btn btn-black text-light">
                        <i class="fa-regular fa-user"></i>
                        <span class="font-text">Connexion</span>
                    </a>
                     </div>
               <?php }

                ?>
                
            </div>
        </div>
</nav>