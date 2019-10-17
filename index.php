<?php
$name = null;
$sage = null;

if (isset($_POST['btn_name'])) {
    if (empty($_POST['name'])) {
        $erreur = 'N\'aie pas peur, écris ton nom';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questionnaire</title>
</head>
<body style="min-height:100vh; background-color:#33E9FF;">
    <h3 style="padding-top:5%; text-align:center;">Entre ton nom :</h3>
    <form action="" method="POST" style="text-align:center;">
        <input type="text" name="name" />
        <button type="submit" name="btn_name">Valider</button>
    </form>

<?php if (isset($erreur)): ?>
<p style="text-align:center;"><?= $erreur ?></p>
<?php endif ?>

<?php 

if (!isset($erreur)): ?>
    <?php if (isset($_POST['name'])): ?>
        <?php $name = htmlentities($_POST['name']); ?>
        <p style="text-align:center;">Bonjour <?= $name ?>. As-tu été sage cette année ?</p>
        <br>
        <form action="" method="POST" style="text-align:center;">
            <label for="sage"></label>
            <select name="sage" id="sage">
                <option value="non">non</option>
                <option value="bof">ça dépend des jours</option>
                <option value="oui">oui comme une image</option>
            </select>
            <button type="submit">Valider</button>
        </form>';
    <?php endif?>
    
    <?php if (isset($_POST['sage'])): ?>
        <?php $sage = $_POST['sage']; ?>
        <?php if ($sage == 'non'): ?>
            <p style="text-align:center;">C'est bien ce que je pensais. Voilà ton cadeau :</p>
                <br>
                <div style="text-align:center">
                    <img src="img/chien.jpeg" style="width:300px;"/>
                </div>
                <h1 style="text-align:center;">Joyeux Noël !</h1>
        <?php elseif ($sage == 'bof'): ?>
            <p style="text-align:center;">Mmmouais... J\'apprécie les gens qui disent la vérité. Voilà ton cadeau :</p>
            <br>
            <div style="text-align:center">
                <img src="img/candy.png" style="width:300px;"/>
            </div>
            <h1 style="text-align:center;">Joyeux Noël !</h1>
        <?php else: ?>
            <p style="text-align:center;">C\'est bien mais on peut plus se fier à personne de nos jours. Voilà quand même ton cadeau :</p>
            <br>
            <div style="text-align:center">
                <img src="img/cadeau.png" style="width:300px;"/><br><p>Par contre, y a que la boîte...</p>
            </div>
            <h1 style="text-align:center;">Joyeux Noël !</h1>
        <?php endif ?>
    <?php endif ?>
<?php endif ?>

</body>
</html>