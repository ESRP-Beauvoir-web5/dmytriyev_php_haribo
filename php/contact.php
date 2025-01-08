<?php
include("header.php");
var_dump($_POST);
?>
<form class="col-8 mx-auto py-5" action="index.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit d'autre.</div>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Votre Nom et Prenom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom et Prenom" name="nom">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Objet de votre message</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Objet" name="objet">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ecrivez votre message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Je ne suis pas un robot</label>
    </div>
    <button type="submit" class="btn btn-primary">Nous contacter</button>
</form>
<?php
include("footer.php");