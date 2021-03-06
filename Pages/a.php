<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_a</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lta href=""&gt&lt/a&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
        <p>La balise <strong>&lta&gt</strong> définit un lien hypertexte, utilisé pour relier une page à une autre.
            L'attribut le plus important de l'élément <strong>&lta&gt</strong> est l'attribut href, qui indique la destination du lien.
            Par défaut, les liens apparaîtront comme suit dans tous les navigateurs:
        </p>
        <ul>
          <li>Un lien non visité est souligné et bleu</li>
          <li>Un lien visité est souligné et violet</li>
          <li>Un lien actif est souligné et rouge</li>
        </ul>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <p>un lien vers la w3school :</p>
          <a href="https://www.w3schools.com">Visit W3Schools.com!</a>
      </div>
    </section>
    
    <footer>
      <a href="!.html">Page précédente</a>
      <a href="b.html">Page suivante</a>
    </footer>
  </body>
</html>