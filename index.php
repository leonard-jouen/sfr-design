<?php

require('./inc/pdo.php');
require('./inc/request.php');
require('./inc/function.php');

$errors = array();
$envoiReussi = false;

if(!empty($_POST['submitted'])){
    $email = cleanXSS('email');
    $message = cleanXSS('message');

    $errors = emailValidation($errors, $email, 'email');
    $errors = textValidation($errors, $message, 'message', 5, 2000);

    if(empty($errors['message']) && checkMessageExist($email, $message) > 0){
        $errors['message'] = 'Vous avez déjà envoyé un message identique';
    }

    if(count($errors) == 0){
        insertMessage($email, $message);
        $envoiReussi = true;
    }
}

include('./inc/header.php');
?>

    <section id="offres">
        <div class="wrap_full">
            <div class="offres_box">
                <h1>Les offres<br />par région</h1>
            </div>
        </div>
    </section>

    <section id="contact_form">
        <div class="wrap_form">
            <?php

            if($envoiReussi){
                ?>
                <div class="success_message">
                    <h2>Message envoyé</h2>
                    <p><a href="./">Retour à la page Contact</a></p>
                </div>
                <?php
            }
            else{
                ?>
                <form action="#contact_form" method="post">
                    <input type="email" name="email" id="email" placeholder="Votre mail" value="<?php recuperationInputValue('email'); ?>">
                    <?php viewError($errors, 'email'); ?>
                    <textarea name="message" id="message" placeholder="Votre message"><?php recuperationInputValue('message'); ?></textarea>
                    <?php viewError($errors, 'message'); ?>
                    <input type="submit" name="submitted" value="Envoyer">
                </form>
                <?php
            }
            ?>
        </div>
    </section>

<?php include ('./inc/footer.php');