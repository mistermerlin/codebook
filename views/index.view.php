<?php $title = "Accueil "; ?>



<?php require("partials/_header.php"); ?>

    <div class="container">
      
      <div class="jumbotron" style="padding: 10px">
  <h1 class="display-3"><?php echo  WEBSITE_NAME ."??" ; ?></h1>
    <p style="font-size: 20px;font-family: roboto">
      <?php echo  WEBSITE_NAME  ; ?> est un reseau social pour developpeurs.<br>
      Et qui dit developpeursndit egalement code source.<br>
      Grace à cette plateforme vous avez la possibilité de tissez des liens d'amitiés avec d'autres developpeurs, echangés des codes sources, recevoir de l'aide si vous rencontrez des problemes sur l'un de vous projets et bien plus encore.<br>
      Alors n'hesitez plus rejoingnez nous maintenant en cliquant sur le lien suivant.

    </p>
    <a class="btn btn-primary btn-lg" href="register.php" role="button">Inscrivez vous maintenant</a>
  </p>
</div>

    </div>

    


<?php 
  require("partials/_footer.php");

 ?>