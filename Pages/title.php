<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_title</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lttitle&gt &lt/title&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>la balise <strong>&lttitle&gt</strong> est requise dans tous les documents HTML et définit le titre du document.<br>
            L'élément <strong>&lttitle&gt</strong>:
            <ul>
              <li>définit un titre dans la barre d'outils du navigateur</li>
              <li>fournit un titre pour la page lorsqu'elle est ajoutée aux favoris</li>
              <li>affiche un titre pour la page dans les résultats du moteur de recherche</li>
            </ul>
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <textarea rows="12" cols="50"><!DOCTYPE html>
            <html>
            
            <head>
              <title>HTML Reference</title>
            </head>
            
            <body>
            Le contenu de la page......
            </body>
            
            </html></textarea></p>
      </div>
    </section>
    
    <footer>
      <a href="textarea.html">Page précédente</a>
      <a href="tr.html">Page suivante</a>
    </footer>
  </body>
</html>