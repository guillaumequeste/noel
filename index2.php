
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeu</title>
</head>
<body style="padding:3%;background-image:url('img/background2.png');background-size:cover;color:white;">
    
    <h4>1. La fête de Noël commémore la naissance de :</h4>
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
    

    <div class="p-2">
    <h4>2. Le 26 décembre est férié en France.</h4>
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
</div>

    <div class="p-2">
    <h4>3. Le substantif Noël est masculin.</h4>
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
</div>

    <div class="p-2">
    <h4>4. Pourquoi le Père-Noël est-il rouge ?</h4>
    <form action="" method="POST">
        <label for="rouge"></label>
        <select name="rouge">
            <option value="coca">C'est Coca-Cola qui lui a attribué cette couleur après une campagne de pub dans les années 30.</option>
            <option value="moyenAge">Il portait déjà cette couleur dès le Moyen-Age.</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if ($_POST['rouge'] == 'coca'): ?>
    <p>Non,<br> en fait, le Père-Noël était déjà rouge bien avant que la marque de soda ne s'en empare.<br> Au Moyen-Age, Saint Nicolas, protecteur des enfants, des veuvez et des gens faibles, était représenté vêtu d'une robe carmin.<br> Une couleur qui subsiste lorsque sa légende s’exporte avec les colons aux Etats-Unis, au XIXe siècle, et qu’il devient «Santa Claus». Les illustrateurs américains le représentent alors habillé de rouge et blanc.</p>
<?php elseif ($_POST['rouge'] == 'moyenAge'): ?>
<p>C'est vrai,<br> le Père-Noël était déjà rouge bien avant que la marque de soda ne s'en empare.<br> Au Moyen-Age, Saint Nicolas, protecteur des enfants, des veuvez et des gens faibles, était représenté vêtu d'une robe carmin.<br> Une couleur qui subsiste lorsque sa légende s’exporte avec les colons aux Etats-Unis, au XIXe siècle, et qu’il devient «Santa Claus». Les illustrateurs américains le représentent alors habillé de rouge et blanc.</p>
<?php endif ?>
</div>

    <div class="p-2">
    <h4>5. La tradition d'un arbre décoré nous vient :</h4>
    <form action="" method="POST">
        <label for="arbre"></label>
        <select name="arbre">
            <option value="romains">Des romains</option>
            <option value="celtes">Des celtes</option>
            <option value="grecs">Des grecs</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if (($_POST['arbre'] == 'romains') || ($_POST['arbre'] == 'grecs')): ?>
    <p>Non,<br> les Celtes (environ 450 après JC) décoraient déjà un arbre, symbole de vie au moment du solstice d'hiver. Les Scandinaves faisaient de même pour la fête de Jul, qui avait lieu à peu près à la même date que Noël.</p>
<?php elseif ($_POST['arbre'] == 'celtes'): ?>
    <p>Tout à fait,<br> les Celtes (environ 450 après JC) décoraient déjà un arbre, symbole de vie au moment du solstice d'hiver. Les Scandinaves faisaient de même pour la fête de Jul, qui avait lieu à peu près à la même date que Noël.</p>
<?php endif ?>
</div>

    <div class="p-2">
    <h4>6. Laquelle de ces propositions ne signifie pas "Joyeux Noël" ?</h4>
    <form action="" method="POST">
        <label for="traduction"></label>
        <select name="traduction">
            <option value="tahitien">Ia ora'na no te noere (tahitien)</option>
            <option value="normand">Bouon Noué (Normand)</option>
            <option value="russe">С Рождеством (russe)</option>
            <option value="néerlandais">Vrolijk Kerstfeest (néerlandais)</option>
            <option value="indonesien">Selamat ulang tahun (indonésien)</option>
            <option value="hongrois">Boldog karácsonyt (hongrois)</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if (($_POST['traduction'] == 'tahitien') || ($_POST['traduction'] == 'normand') || ($_POST['traduction'] == 'russe') || ($_POST['traduction'] == 'néerlandais') || ($_POST['traduction'] == 'hongrois')): ?>
    <p>Non,<br> la bonne réponse était 'Selamat ulang tahun' qui signifie 'Joyeux anniversaire' en indonésien.</p>
<?php elseif ($_POST['traduction'] == 'indonesien'): ?>
    <p>Bravo,<br> cela veut dire 'Joyeux anniversaire'.</p>
<?php endif ?>
</div>

    <div class="p-2">
    <h4>7. Le Noël orthodoxe a lieu le :</h4>
    <form action="" method="POST">
        <label for="orthodoxe"></label>
        <select name="orthodoxe" class="form-control">
            <option value="4">4 janvier</option>
            <option value="7">7 janvier</option>
            <option value="10">10 janvier/option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php if (($_POST['orthodoxe'] == '4') || ($_POST['orthodoxe'] == '10')): ?>
    <p>Non,<br> la religion orthodoxe suit le calendrier julien et non le calendrier grégorien. Noël est donc fêté avec 13 jours de retard par rapport au Noël catholique, soit le 7 janvier de chaque année, les célébrations débutant le 6 janvier et se prolongeant jusqu'au 9 janvier.</p>
<?php elseif ($_POST['orthodoxe'] == '7'): ?>
    <p>Tout à fait,<br> la religion orthodoxe suit le calendrier julien et non le calendrier grégorien. Noël est donc fêté avec 13 jours de retard par rapport au Noël catholique, soit le 7 janvier de chaque année, les célébrations débutant le 6 janvier et se prolongeant jusqu'au 9 janvier.</p>
<?php endif ?>
</div>

</body>
</html>