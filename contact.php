<?php
    include '_inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Webdevelopper | Thomas Delsupexhe | Me Contacter</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div>
    <div class="back contact-color">
        <a href="index.html" class=""><i class="fas fa-chevron-left fa-2x"></i></a>
    </div>
    <div class="layer-background layer-background-contact">
        <div class="layer-color contact-bckcolor"></div>
        <div class="layer-text">
            <div class="contact-position">
                <h1>Me <span>Contacter</span></h1>
                <?php
                if(array_key_exists('success', $_SESSION)): ?>
                    <div class="success-php">
                        Votre email a bien été envoyé.
                    </div>
                <?php endif; ?>

                <form action="post_contact.php" method="post" class="form-contact" id="form-contact">
                    <div class="form-name">
                        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []);?>
                        <?= $form->inputText('name', 'Nom');
                        if(array_key_exists('name', $_SESSION['errors'])){
                            echo "<div class=\"error-php\">".$_SESSION['errors']['name']."</div>";
                        }
                        ?>
                    </div>
                    <div class="form-name">
                        <?= $form->inputText('firstname', 'Prénom');
                        if(array_key_exists('firstname', $_SESSION['errors'])){
                            echo "<div class=\"error-php\">".$_SESSION['errors']['firstname']."</div>";
                        }
                        ?>
                    </div>
                    <div class="form-email">
                        <?= $form->inputEmail('email', 'Email');
                        if(array_key_exists('email', $_SESSION['errors'])){
                            echo "<div class=\"error-php\">".$_SESSION['errors']['email']."</div>";
                        }
                        ?>
                    </div>
                    <div class="form-msg">
                        <?= $form->inputTextArea('msg', 'Message');
                        if(array_key_exists('msg', $_SESSION['errors'])){
                            echo "<div class=\"error-php\">".$_SESSION['errors']['msg']."</div>";
                        }
                        ?>
                    </div>

                    <?= $form->buttonSubmit('Envoyer'); ?>
                </form>
                <div class="social-logo infos contact-color" id="social-logo-contact">
                    <a href="https://www.linkedin.com/in/thomas-delsupexhe/" target="_blank" class="infos-item" aria-label="Linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://twitter.com/ThomasDelsu" target="_blank" class="infos-item" aria-label="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a href="tel:+32498362259" class="infos-item" aria-label="+32 498 36 22 59"><i class="fas fa-phone-square fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<!--<script src="js/main.js"></script>-->
<script src="js/jQueryValidate/jquery.validate.js"></script>
<script src="js/jQueryValidate/localization/messages_fr.js"></script>
<script src="js/jQueryValidate/additional-methods.js"></script>
<!--
<script src="js/verifFormContact.js"></script>
-->
</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>