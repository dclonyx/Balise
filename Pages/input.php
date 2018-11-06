<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_input</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&ltinput type="" name=""&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>L'élément <strong>&ltinput&gt</strong> est l'élément de formulaire le plus important.
            L'élément <strong>&ltinput&gt</strong> peut être affiché de plusieurs manières, en fonction de l'attribut type.
          </p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
      	  <table>
             <tr>
               <th>Type</th>
               <th>Description</th>
             </tr>
             <tr>
               <td>&ltinput type="text"&gt</td>
               <td>Définit un champ de saisie d'une ligne</td>
             </tr>
             <tr>
                <td>&ltinput type="radio"&gt</td>
                <td>Définit un bouton radio (pour sélectionner l'un des nombreux choix)</td>
             </tr>
             <tr>
               <td>&ltinput type="submit"&gt</td>
               <td>Définit un bouton d'envoi (pour soumettre le formulaire)</td>
             </tr>
          </table>
      </div>
    </section>
    
    <footer>
      <a href="img.html">Page précédente</a>
      <a href="li.html">Page suivante</a>
    </footer>
  </body>
</html>