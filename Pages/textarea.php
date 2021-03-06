<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="utf-8" />
    <title>Balise_textarea</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lttextarea&gt &lt/textarea&gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
      <div id="Definition">
      <h2>Définition :</h2>
         <p>La balise <strong>&lttextarea&gt</strong> définit un contrôle de saisie de texte sur plusieurs lignes.
           <br>Une zone de texte peut contenir un nombre illimité de caractères et le texte est rendu dans une police à largeur fixe (généralement Courier).<br>
          La taille d'une zone de texte peut être spécifiée par les attributs <strong>cols et rows</strong>, ou même mieux. grâce aux propriétés de hauteur et de largeur CSS.</p>
     	</div>
      <div id="Example">
        <h2>Exemple :</h2>
        En écrivant cela :
      	  <p><strong>&lttextarea rows="4" cols="50"&gt</strong>
              A w3schools.com, vous apprendrez comment faire un site web. Nous proposons des tutoriels gratuits sur toutes les technologies de développement Web.. 
              <strong>&lt/textarea&gt</strong></p>
        On obtient :
        <textarea rows="4" cols="50">
            A w3schools.com, vous apprendrez comment faire un site web. Nous proposons des tutoriels gratuits sur toutes les technologies de développement Web. 
            </textarea>
      </div>
    </section>
    
    <footer>
      <a href="td.html">Page précédente</a>
      <a href="title.html">Page suivante</a>
    </footer>
  </body>
</html>