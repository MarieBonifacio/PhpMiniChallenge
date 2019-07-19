<?php include 'inc/header.php' ?>

<main>
<div class="titre"><h1>Récapitulatif</h1></div>
    <div class="reponse">
        Bonjour, merci pour votre message <?php echo htmlspecialchars($_POST['nom']); ?>.
        Voici votre message :"<?php echo htmlspecialchars($_POST['msg']); ?>".
    </div>
</main>

<?php include 'inc/footer.php' ?>