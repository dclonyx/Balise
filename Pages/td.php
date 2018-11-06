<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_td</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lttd&gt&lt/td&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>La balise <strong>&lttd&gt</strong> définit une cellule standard dans un tableau HTML.
            Un tableau HTML a deux types de cellules:
          </p>
          <ul>
            <li>Cellules d'en-tête - contient les informations d'en-tête (créées avec l'élément <strong>&ltth&gt</strong>)</li>
            <li>Cellules standard - contient des données (créées avec l'élément <strong>&lttd&gt</strong>)</li>
          </ul>
          <p>Le texte des éléments <strong>&ltth&gt</strong> est en gras et centré par défaut.
             Le texte dans les éléments <strong>&lttd&gt</strong> est normal et aligné à gauche par défaut.
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
          <strong>&lttable&gt</strong><br>
            <strong>&lttr&gt</strong><br>
              <strong>&lttd&gt</strong>Cellule 1<strong>&lt/td&gt</strong><br>
              <strong>&lttd&gt</strong>Cellule 2<strong>&lt/td&gt</strong><br>
            <strong>&lt/tr&gt</strong><br>
          <strong>&lt/table&gt</strong><br>
          <p>cela donne :</p><br>
      	  <table>
            <tr>
              <td>Cellule 1 / </td>
              <td>Cellule 2</td>
            </tr>
          </table>
      </div>
    </section>
    
    <footer>
      <a href="table.html">Page précédente</a>
      <a href="textarea.html">Page suivante</a>
    </footer>
  </body>
</html>