<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_tr</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lttr&gt&lt/tr&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>La balise <strong>&lttr&gt</strong> définit une ligne dans un tableau HTML.
            Un élément <strong>&lttr&gt</strong> contient un ou plusieurs éléments <strong>&ltth&gt</strong> ou <strong>&lttd&gt</strong>.</p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <p><strong>&lttable&gt</strong><br>
              <strong>&lttr&gt</strong><br>
                <strong>&ltth&gt</strong>Mois<strong>&lt/th&gt</strong><br>
                <strong>&ltth&gt</strong>Economiser<strong>&lt/th&gt</strong><br>
              <strong>&lt/tr&gt</strong><br>
              <strong>&lttr&gt</strong><br>
                <strong>&lttd&gt</strong>Janvier<strong>&lt/td&gt</strong><br>
                <strong>&lttd&gt</strong>100euros<strong>&lt/td&gt</strong><br>
              <strong>&lt/tr&gt</strong><br>
            <strong>&lt/table&gt</strong><br>
          </p><br>
          <p>Cela donne : </p><br>
          <table>
            <tr>
              <th>Mois</th>
              <th>Economiser</th>
            </tr>
            <tr>
              <td>Janvier</td>
              <td>100euros</td>
            </tr>
          </table>
      </div>
    </section>
    
    <footer>
      <a href="title.html">Page précédente</a>
      <a href="u.html">Page suivante</a>
    </footer>
  </body>
</html>