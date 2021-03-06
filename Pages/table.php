<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_table</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lttable&gt&lt/table&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>Un tableau HTML est défini avec la balise <strong>&lttable&gt</strong>.
            Chaque ligne de table est définie avec la balise <strong>&lttr&gt</strong>. Un en-tête de table est défini avec la balise <strong>&ltth&gt</strong>. Par défaut, les en-têtes de tableau sont en gras et centrés. Une table data / cell est définie avec la balise <strong>&lttd&gt</strong>.
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <table>
            <tr>
              <th>Prénom</th>
              <th>Nom</th> 
              <th>Age</th>
            </tr>
            <tr>
              <td>Fabou</td>
              <td>Ouvrard</td> 
              <td>36</td>
            </tr>
            <tr>
              <td>Jean-Philippe</td>
              <td>Grasse</td> 
              <td>32</td>
            </tr>
          </table>
      </div>
    </section>
    
    <footer>
      <a href="select.html">Page précédente</a>
      <a href="td.html">Page suivante</a>
    </footer>
  </body>
</html>