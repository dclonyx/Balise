<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_head</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lthead&gt&lt/head&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
        <p>L'élément <strong>&lthead&gt</strong> est un conteneur pour tous les éléments de tête.
          L'élément <strong>&lthead&gt</strong> peut inclure un titre pour le document, les scripts, les styles, les méta-informations, etc.
          Les éléments suivants peuvent figurer dans l'élément <strong>&lthead&gt</strong>:
        </p>
        <ul>
          <li><strong>&lttitle&gt</strong> (cet élément est requis dans un document HTML)</li>
          <li><strong>&ltstyle&gt</strong></li>
          <li><strong>&ltbase&gt</strong></li>
          <li><strong>&ltlink&gt</strong></li>
          <li><strong>&ltmeta&gt</strong></li>
          <li><strong>&ltscript&gt</strong></li>
          <li><strong>&ltnoscript&gt</strong></li>
        </ul>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <p>cette page contient un header avec une balise meta et un titre Balise_head(d'où le nom d'onglet)</p>
      </div>
    </section>
    
    <footer>
      <a href="H.html">Page précédente</a>
      <a href="header.html">Page suivante</a>
    </footer>
  </body>
</html>