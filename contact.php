<?php include 'inc/header.php' ?>

<main>
<div class="titre"><h1>Contact</h1></div>

<div class=formulaire>

    <form action="action.php" method="post">
        <label for="name">Votre nom : <input type="text" name="nom" /></p>
        <label for = "mail">Adresse mail : <input type="text" name="mail" /></p>
        <label for="msg">Votre message: <input class="message" type="text" name="msg" /></p>
        <button type="submit" value="OK">Envoyer</p>
    </form> 
</div>
</main>

<?php include 'inc/footer.php' ?>