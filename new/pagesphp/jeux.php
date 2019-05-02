<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Undek - jeux</title>
</html>




<body>

    <div id="main">
        <img id="bg" src="../img/bg_1.png" alt="bg">

        <?php
        include("header.php");
        ?>

        <section class="blablabla">
        <?php
        if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
        {
            echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
        }
        else // Il manque des paramètres, on avertit le visiteur
        {
            echo 'Il faut renseigner un nom et un prénom !';
        }
        ?>

        <p>Resultat de recherche de
        <?php if (isset($_POST['search']))
            {echo $_POST['search'];}
        ?>
        </p>
        </section>

        <?php include("footer.php"); ?>

    </div>

</body>