
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeu</title>
</head>
<body>

    <h4>La fête de Noël commémore la naissance de :</h4>
    <form action="" method="POST">
        <label for="commemore"></label>
        <select name="commemore">
            <option value="JesusMari">Jésus mon mari !</option>
            <option value="Jesus">Jésus de Nazareth</option>
            <option value="Johnny">Johnny Hallyday</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if ($_POST['commemore'] == 'Jesus'): ?>
    <p>Bravo</p>
<?php elseif ($_POST['commemore'] == 'JesusMari'): ?>
    <p>Euh non...</p>
<?php elseif ($_POST['commemore'] == 'Johnny'): ?>
    <p>Ah que non !</p>
<?php endif ?>

    <h4>Le 26 décembre est férié en France.</h4>
    <form action="" method="POST">
        <label for="ferie"></label>
        <select name="ferie">
            <option value="vrai">Vrai</option>
            <option value="faux">Faux</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if (isset($_POST['ferie'])): ?>
    <p>Pas tout à fait. C'est un jour férié uniquement dans les départements du Haut-Rhin, du Bas-Rhin et de la Moselle.</p>
<?php endif ?>

    <h4>Le substantif Noël est masculin.</h4>
        <form action="" method="POST">
            <label for="substantif"></label>
            <select name="substantif">
                <option value="vrai">Vrai</option>
                <option value="faux">Faux</option>
            </select>
            <button type="submit">Valider</button>
        </form>

<?php if (isset($_POST['substantif'])): ?>
    <p>En fait, Noël est masculin, mais probablement par ellipse de <i>fête de</i>, il est féminin lorsqu'il est employé avec l'article indéfini : <i>la</i>, et sans épithète ni complément.</p>
<?php endif ?>

</body>
</html>