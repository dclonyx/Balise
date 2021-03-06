<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_&lt header &gt</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lt header &gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>L'élément <strong>&lt header &gt</strong> représente un conteneur pour un contenu d'introduction ou un ensemble de liens de navigation.<br><br>

          
          Un élément <strong>&lt header &gt</strong> contient typiquement :
          <ul>
          <li>un ou plusieurs éléments d'en-tête (<strong>&lt h1 &gt</strong> - <strong>&lt h6 &gt</strong>)</li>
          <li>logo ou icône</li>
          <li>information sur l'auteur</li>
          <li>Vous pouvez avoir plusieurs éléments <strong>&lt header &gt</strong> dans un document</li>         
          </ul>
          <p>Remarque : Une balise <strong>&lt header &gt</strong> ne peut pas être placée dans un élément <strong>&lt footer &gt</strong>, <strong>&lt adresse &gt</strong> ou un autre élément <strong>&lt header &gt</strong>.</p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
              <strong>&lt header &gt</strong>
                <h1>Rubrique la plus importante ici </h1>
                <h3>Rubrique la moins importante ici </h3>
                <p>Quelques informations supplémentaires ici </p>
              <strong>&lt header &gt</strong>
      </div>
    </section>
    <footer>
      <a href="head.html">Page précédente</a>
      <a href="hr.html">Page suivante</a>
    </footer>
  </body>
</html>