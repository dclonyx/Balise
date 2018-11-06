<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Balise_&lt link &gt</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>

    <body>
        <header>
            <h1>&lt link &gt</h1>
        </header>

    <?php
      include '../Php/menu.php';
    ?>
        <section>
            <div id="Definition">
                <h2>Définition :</h2>
                    <p>La balise <strong>&lt link &gt</strong> définit un lien entre un document et une ressource externe.<br><br>

                    La balise <strong>&lt link &gt</strong> permet de créer un lien vers des feuilles de style externes.</p>
            </div>

            <div id="Example">
                <h2>Exemple :</h2>
                <code>
                    <ul>
                        <li>&lthead&gt</li>
                            <ul>
                                <li>&ltlink rel="stylesheet" type="text/css" href="theme.css"&gt</li>
                            </ul>
                        <li>&lt/head&gt</li>
                    </ul>
                </code>
            </div>
        </section>

        <footer>
            <a href="li.html">Page précédente</a>
            <a href="meta.html">Page suivante</a>
        </footer>
    </body>
</html>