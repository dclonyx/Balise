<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_form</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&ltform&gt&lt/form&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>L'élément HTML <strong>&ltform&gt</strong> définit un formulaire utilisé pour collecter les entrées de l'utilisateur avec des éléments de formulaire.
            Les éléments de formulaire sont différents types d'éléments de saisie, tels que les champs de texte, les cases à cocher, les boutons radio, les boutons d'envoi, etc.
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <form action="/action_page.php">
            Prénom:<br>
            <input type="text" name="firstname" value="Edains">
            <br>
            Nom:<br>
            <input type="text" name="lastname" value="Vignolle">
            <br><br>
            <input type="submit" value="Submit">
          </form> 
      </div>
    </section>
    
    <footer>
      <a href="div.html">Page précédente</a>
      <a href="H.html">Page suivante</a>
    </footer>
  </body>
</html>