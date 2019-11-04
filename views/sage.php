<?php
$name = null;
$sage = null;

if (isset($_POST['btn_name'])) {
    if (empty($_POST['name'])) {
        $erreur = 'N\'aie pas peur, écris ton nom';
    }
}
?>

<div style="height:85vh; background-image:url('img/background.png');background-size:cover;background-attachment:fixed;background-position:center center;">
    <h3 style="padding-top:5%; text-align:center;color:white;">Entre ton nom :</h3>
    <form action="" method="POST" style="text-align:center;">
        <input type="text" name="name" />
        <button type="submit" name="btn_name">Valider</button>
    </form>

<?php if (isset($erreur)): ?>
<p style="text-align:center;color:white;"><?= $erreur ?></p>
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
            <p style="text-align:center;color:white;">C'est bien ce que je pensais. Voilà ton cadeau :</p>
                <br>
                <div style="text-align:center">
                    <img src="img/chien.jpeg" style="width:300px;"/>
                </div>
                <h1 style="text-align:center;color:white;">Joyeux Noël !</h1>
        <?php elseif ($sage == 'bof'): ?>
            <p style="text-align:center;color:white;">Mmmouais... J'apprécie les gens qui disent la vérité. Voilà ton cadeau :</p>
            <br>
            <div style="text-align:center">
                <img src="img/candy.png" style="width:300px;"/>
            </div>
            <h1 style="text-align:center;color:white;">Joyeux Noël !</h1>
        <?php else: ?>
            <p style="text-align:center;color:white;">C'est bien mais on peut plus se fier à personne de nos jours. Voilà quand même ton cadeau :</p>
            <br>
            <div style="text-align:center">
                <img src="img/cadeau.png" style="width:250px;"/><br><p style="color:white;">Par contre, y a que la boîte...</p>
            </div>
            <h1 style="text-align:center;color:white;">Joyeux Noël !</h1>
        <?php endif ?>
    <?php endif ?>
<?php endif ?>

</div>