<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Balise_Select</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>

    <body>

        <header>
            <h1>&ltselect name="" id=""&gt&lt/select&gt</h1>
        </header>

    <?php
      include '../Php/menu.php';
    ?>
        <section>
            <div id="Definition">
                <h2>Définition :</h2>
                <p>La balise <strong>&ltselect&gt</strong> est utilisé pour créer une liste déroulante. <br />
                Les balise situées dans celles-ci permettent de définir une liste d'option</p>
            </div>

            <div id="Example">
                <h2>Exemple :</h2>

                    <label>Langage préféré ?</label>
                    <br />
                    
                    <form>
                        <select name="langage" id="langage">
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="php">PHP</option>
                        <option value="mysql">MySql</option>
                        <option value="js">JavaScript</option>
                        <option value="c">C</option>
                        <option value="cpp">C++</option>
                        <option value="csharp">C#</option>
                        <option value="java">Java</option>
                    </select>

                    <input type="submit" value="Choisir ce langage">
                    </form>
            </div>
        </section>

        <br />

        <footer>
            <a href="pre.html">Page précédente</a>
            <a href="table.html">Page suivante</a>
        </footer>
    </body>
</html>