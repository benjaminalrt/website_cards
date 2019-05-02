<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Undek - Contact</title>
</html>

<body>

    <div id="main">
        <img id="bg" src="../img/bg_1.png" alt="bg">

        <?php include("header.php"); ?>

        <section class="sectc">
            <div id="form_ctc">
                <h1>Formulaire de contact</h1>
                <p>N'hésitez pas à nous contacter via ce super formulaire que notre développeur a concocté!</p>
                <form method="post">
                    <div>
                        <label>Nom:</label>
                        <input type="text" name="ctc_nom" required/>
                        <label>Prénom:</label>
                        <input type="text" name="ctc_prenom" size="21" required/>
                    </div>
                    <div>
                        <label>Adresse e-mail:</label>
                        <input  type="text" name="ctc_email" size="20" required/>
                    </div>
                   <div>
                        <label>Numéro de téléphone:</label>
                        <input type="text" name="ctc_tel" />
                    </div>
                    <label> Votre message:</label>
                    <textarea name="ctc_message" rows="5" required></textarea>
                    <input type="submit" value="Envoyer" />
                </form>
                <?php
                    if (isset($_POST['ctc_message']))
                    {
                        $position_arobase = strpos($_POST['ctc_email'], '@');
                        if($position_arobase === false)
                            echo '<p>Votre email doit comporter un arobase.</p>';
                        else
                        {
                            $retour=mail('benjamin.alrt@gmail.com','Envoi depuis page Contact', $_POST['ctc_message'], 'From : ' . $_POST['ctc_email']);
                            if($retour)
                                echo '<p>Votre message a été envoyé.</p>';
                            else
                                echo '<p>Erreur.</p>';
                        }
                    }
                ?>
                <h2>Merci !</h2>

            </div>

            <div id="ou_ctc">
                <p>ou</p>
            </div>

            <div id="info_ctc">
                <h1>Informations de contact</h1>
            </div>
        </section>

        <?php include("footer.php"); ?>

    </div>

</body>