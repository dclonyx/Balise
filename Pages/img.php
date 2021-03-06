<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_img</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&ltimg src=""&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>La balise <strong>&ltimg&gt</strong> définit une image dans une page HTML.
            La balise <strong>&ltimg&gt</strong> comporte deux attributs obligatoires: src et alt.
            Remarque: les images ne sont pas insérées techniquement dans une page HTML, les images sont liées à des pages HTML. La balise <strong>&ltimg&gt</strong> crée un espace de maintien pour l'image référencée.
            Conseil: pour lier une image à un autre document, insérez simplement la balise <strong>&ltimg&gt</strong> dans les balises <strong>&lta&gt</strong>
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <img src="https://chat.accesscodeschool.fr/avatar/francoisq?_dc=undefined" alt="No dice" height="42" width="42">
      </div>
    </section>
    
    <footer>
      <a href="i.html">Page précédente</a>
      <a href="input.html">Page suivante</a>
    </footer>
  </body>
</html>