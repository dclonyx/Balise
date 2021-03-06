<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Balise_meta</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>

    <body>

        <header>
            <h1>&ltmeta charset="utf-8"&gt</h1>
        </header>

    <?php
      include '../Php/menu.php';
    ?>
        <section>
            <div id="Definition">
                <h2>Définition :</h2>

                <p>L'élément <strong>&ltmeta&gt</strong> permet de définir un encodage pour la page internet.</p>
                <p>Il permet de lire les caractères spéciaux tels que des lettres accentuées.</p>
                <p>L'encodage universelle est <strong>"UTF-8".</strong></p>
                <p>Il est important de savoir qu'elle est toujours enfants de l'élément &lthead&gt.</p>
            </div>

            <div id="Example">
                <h2>Exemple :</h2>

                    <p>Les caractères suivant peuvent être interprêté de manière différente selon le navigateur et l'encodage.</p>

                    <ul>
                        <li>À</li>
                        <li>ã</li>
                        <li>û</li>
                        <li>Ü</li>
                        <li>ï</li>
                        <li>@</li>
                        <li>ñ</li>
                    </ul>            
            </div>
        </section>

        <footer>
            <a href="link.html">Page précédente</a>
            <a href="p.html">Page suivante</a>
        </footer>
    </body>
</html>