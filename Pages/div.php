<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8" />
    <title>Div_Balise</title>
    <link rel="stylesheet" href="../Style/style.css">
  </head>
  
  <body>
    <header>
    	<h1>&lt div &gt</h1>
    </header>
    
    <?php
      include '../Php/menu.php';
    ?>
    <section>
        <div id="Definition">
            <h2>Définition :</h2>

                <p>La balise <strong>&ltdiv&gt</strong> permet d'envelopper du contenu sous forme de "block". <br />
                Elle est utile pour la gestion d'un groupe d'éléments précis, elle permet donc d'éviter de modifier le reste de la page.</p>

                <p>Le style du contenu de <code><strong>&ltdiv id="contenu"&gt ... &lt/div&gt</strong></code> pourra être modifié en utilisant l'id "<em>contenu</em>", ce qui évitera d'influencer le contenu des autres div n'ayant pas le même id.</p>
        </div>

        <div id="Example">
            <h2>Exemple :</h2>

              	<p><code>&ltdiv id="contenu"&gt <em>entre ces balises, le contenu de ma div</em> &lt/div&gt</code>
                <br /></p>
        </div>
    </section>
    
    <footer>
        <a href="br.html">Page précédente</a>
        <a href="form.html">Page suivante</a>
    </footer>
  </body>
</html>