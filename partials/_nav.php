<?php 

 ?>

     <body>
   
       <div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><?php echo  WEBSITE_NAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><button type="button" class="btn btn-outline-secondary">Accueil</button></a>
          </li>
          <li class="nav-item active">
            <?php if(is_logged_in()): ?>
              
                <a class="nav-link" href="profile.php?id=<?= get_session('user_id') ?>">
                  <button type="button" class="btn btn-outline-secondary">Mon Profil</button></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="share_code.php">
              <button type="button" class="btn btn-outline-secondary">Partager</button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <button type="button" class="btn btn-outline-secondary">Deconnexion</button>
            </a>
          </li>
          <?php else: ?>
           <li class="nav-item">
            <a class="nav-link" href="login.php"><button type="button" class="btn btn-outline-secondary">Connexion</button></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="register.php"><button type="button" class="btn btn-outline-secondary">Inscription</button></a>
          </li>
          <?php endif; ?>
        </ul>
        
      </div>
    </nav>
    </div>

