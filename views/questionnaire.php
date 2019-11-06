
<div class="pl-5 pr-5" style="min-height:85vh;padding:3%;background-image:url('img/background2.png');background-size:cover;color:white;">
    
    <div class="pt-2 px-5">
        <h4 id="commemore">1. La fête de Noël commémore la naissance de :</h4>
        <form action="" method="POST">
            <label for="commemore"></label>
            <select class="custom-select" name="commemore">
                <option value="JesusMari" <?php if($_POST['commemore'] == 'JesusMari'){echo 'selected';}else{'';} ?>>Jésus mon mari !</option>
                <option value="Jesus" <?php if($_POST['commemore'] == 'Jesus'){echo 'selected';}else{'';} ?>>Jésus de Nazareth</option>
                <option value="Johnny" <?php if($_POST['commemore'] == 'Johnny'){echo 'selected';}else{'';} ?>>Johnny Hallyday</option>
            </select>
            <button class="btn btn-primary mt-2" type="submit">Valider</button>    
        </form>

            <?php if ($_POST['commemore'] == 'Jesus'): ?>
                <p>Bravo</p>
            <?php elseif ($_POST['commemore'] == 'JesusMari'): ?>
                <p>Euh non...</p>
            <?php elseif ($_POST['commemore'] == 'Johnny'): ?>
                <p>Ah que non !</p>
            <?php endif ?>
    </div>
    

    <div class="pt-5 px-5">
    <h4 id="ferie">2. Le 26 décembre est férié en France.</h4>
    <form action="" method="POST">
        <label for="ferie"></label>
        <select class="custom-select" name="ferie">
            <option value="vrai" <?php if($_POST['ferie'] == 'vrai'){echo 'selected';}else{'';} ?>>Vrai</option>
            <option value="faux" <?php if($_POST['ferie'] == 'faux'){echo 'selected';}else{'';} ?>>Faux</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (isset($_POST['ferie'])): ?>
    <p>Pas tout à fait. C'est un jour férié uniquement dans les départements du Haut-Rhin, du Bas-Rhin et de la Moselle.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="substantif">3. Le substantif Noël est masculin.</h4>
        <form action="#ferie" method="POST">
            <label for="substantif"></label>
            <select class="custom-select" name="substantif">
                <option value="vrai" <?php if($_POST['substantif'] == 'vrai'){echo 'selected';}else{'';} ?>>Vrai</option>
                <option value="faux" <?php if($_POST['substantif'] == 'faux'){echo 'selected';}else{'';} ?>>Faux</option>
            </select>
            <button class="btn btn-primary mt-2" type="submit">Valider</button>
        </form>

<?php if (isset($_POST['substantif'])): ?>
    <p>En fait, Noël est masculin, mais probablement par ellipse de <i>fête de</i>, il est féminin lorsqu'il est employé avec l'article indéfini : <i>la</i>, et sans épithète ni complément.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="rouge">4. Pourquoi le Père-Noël est-il rouge ?</h4>
    <form action="#substantif" method="POST">
        <label for="rouge"></label>
        <select class="custom-select" name="rouge">
            <option value="coca" <?php if($_POST['rouge'] == 'coca'){echo 'selected';}else{'';} ?>>C'est Coca-Cola qui lui a attribué cette couleur après une campagne de pub dans les années 30.</option>
            <option value="moyenAge" <?php if($_POST['rouge'] == 'moyenAge'){echo 'selected';}else{'';} ?>>Il portait déjà cette couleur dès le Moyen-Age.</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if ($_POST['rouge'] == 'coca'): ?>
    <p>Non,<br> en fait, le Père-Noël était déjà rouge bien avant que la marque de soda ne s'en empare.<br> Au Moyen-Age, Saint Nicolas, protecteur des enfants, des veuves et des gens faibles, était représenté vêtu d'une robe carmin.<br> Une couleur qui subsiste lorsque sa légende s’exporte avec les colons aux Etats-Unis, au XIXe siècle, et qu’il devient «Santa Claus». Les illustrateurs américains le représentent alors habillé de rouge et blanc.</p>
<?php elseif ($_POST['rouge'] == 'moyenAge'): ?>
<p>C'est vrai,<br> le Père-Noël était déjà rouge bien avant que la marque de soda ne s'en empare.<br> Au Moyen-Age, Saint Nicolas, protecteur des enfants, des veuves et des gens faibles, était représenté vêtu d'une robe carmin.<br> Une couleur qui subsiste lorsque sa légende s’exporte avec les colons aux Etats-Unis, au XIXe siècle, et qu’il devient «Santa Claus». Les illustrateurs américains le représentent alors habillé de rouge et blanc.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="arbre">5. La tradition d'un arbre décoré nous vient :</h4>
    <form action="#rouge" method="POST">
        <label for="arbre"></label>
        <select class="custom-select" name="arbre">
            <option value="romains" <?php if($_POST['arbre'] == 'romains'){echo 'selected';}else{'';} ?>>Des romains</option>
            <option value="celtes" <?php if($_POST['arbre'] == 'celtes'){echo 'selected';}else{'';} ?>>Des celtes</option>
            <option value="grecs" <?php if($_POST['arbre'] == 'grecs'){echo 'selected';}else{'';} ?>>Des grecs</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['arbre'] == 'romains') || ($_POST['arbre'] == 'grecs')): ?>
    <p>Non,<br> les Celtes (environ 450 après JC) décoraient déjà un arbre, symbole de vie au moment du solstice d'hiver. Les Scandinaves faisaient de même pour la fête de Jul, qui avait lieu à peu près à la même date que Noël.</p>
<?php elseif ($_POST['arbre'] == 'celtes'): ?>
    <p>Tout à fait,<br> les Celtes (environ 450 après JC) décoraient déjà un arbre, symbole de vie au moment du solstice d'hiver. Les Scandinaves faisaient de même pour la fête de Jul, qui avait lieu à peu près à la même date que Noël.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="traduction">6. Laquelle de ces propositions ne signifie pas "Joyeux Noël" ?</h4>
    <form action="#arbre" method="POST">
        <label for="traduction"></label>
        <select class="custom-select" name="traduction">
            <option value="tahitien" <?php if($_POST['traduction'] == 'tahitien'){echo 'selected';}else{'';} ?>>Ia ora'na no te noere (tahitien)</option>
            <option value="normand" <?php if($_POST['traduction'] == 'normand'){echo 'selected';}else{'';} ?>>Bouon Noué (Normand)</option>
            <option value="russe" <?php if($_POST['traduction'] == 'russe'){echo 'selected';}else{'';} ?>>С Рождеством (russe)</option>
            <option value="neerlandais" <?php if($_POST['traduction'] == 'neerlandais'){echo 'selected';}else{'';} ?>>Vrolijk Kerstfeest (néerlandais)</option>
            <option value="indonesien" <?php if($_POST['traduction'] == 'indonesien'){echo 'selected';}else{'';} ?>>Selamat ulang tahun (indonésien)</option>
            <option value="hongrois" <?php if($_POST['traduction'] == 'hongrois'){echo 'selected';}else{'';} ?>>Boldog karácsonyt (hongrois)</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['traduction'] == 'tahitien') || ($_POST['traduction'] == 'normand') || ($_POST['traduction'] == 'russe') || ($_POST['traduction'] == 'neerlandais') || ($_POST['traduction'] == 'hongrois')): ?>
    <p>Non,<br> la bonne réponse était 'Selamat ulang tahun' qui signifie 'Joyeux anniversaire' en indonésien.</p>
<?php elseif ($_POST['traduction'] == 'indonesien'): ?>
    <p>Bravo,<br> cela veut dire 'Joyeux anniversaire'.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="orthodoxe">7. Le Noël orthodoxe a lieu le :</h4>
    <form action="#traduction" method="POST">
        <label for="orthodoxe"></label>
        <select class="custom-select" name="orthodoxe">
            <option value="4" <?php if($_POST['orthodoxe'] == '4'){echo 'selected';}else{'';} ?>>4 janvier</option>
            <option value="7" <?php if($_POST['orthodoxe'] == '7'){echo 'selected';}else{'';} ?>>7 janvier</option>
            <option value="10" <?php if($_POST['orthodoxe'] == '10'){echo 'selected';}else{'';} ?>>10 janvier</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['orthodoxe'] == '4') || ($_POST['orthodoxe'] == '10')): ?>
    <p>Non,<br> la religion orthodoxe suit le calendrier julien et non le calendrier grégorien. Noël est donc fêté avec 13 jours de retard par rapport au Noël catholique, soit le 7 janvier de chaque année, les célébrations débutant le 6 janvier et se prolongeant jusqu'au 9 janvier.</p>
<?php elseif ($_POST['orthodoxe'] == '7'): ?>
    <p>Tout à fait,<br> la religion orthodoxe suit le calendrier julien et non le calendrier grégorien. Noël est donc fêté avec 13 jours de retard par rapport au Noël catholique, soit le 7 janvier de chaque année, les célébrations débutant le 6 janvier et se prolongeant jusqu'au 9 janvier.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="film">8. Dans le film "Le Père-Noël est une ordure", Thierry Lhermitte dit: "Figurez-vous que Thérèse n'est pas moche. Elle n'a pas un physique..." :</h4>
    <form action="#orthodoxe" method="POST">
        <label for="film"></label>
        <select class="custom-select" name="film">
            <option value="gracile" <?php if($_POST['film'] == 'gracile'){echo 'selected';}else{'';} ?>>gracile</option>
            <option value="facile" <?php if($_POST['film'] == 'facile'){echo 'selected';}else{'';} ?>>facile</option>
            <option value="fascine" <?php if($_POST['film'] == 'fascine'){echo 'selected';}else{'';} ?>>qui fascine</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['film'] == 'gracile') || ($_POST['film'] == 'fascine')): ?>
    <p>Et non, Thérèse n'a pas un physique facile.</p>
<?php elseif ($_POST['film'] == 'facile'): ?>
    <p>Bravo,<br> Thérèse n'a effectivement pas un physique facile.</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="tradition">9. En Finlande, la tradition impose d'aller, la veille de Noël :</h4>
    <form action="#tradition" method="POST">
        <label for="#film"></label>
        <select class="custom-select" name="tradition">
            <option value="sauna" <?php if($_POST['tradition'] == 'sauna'){echo 'selected';}else{'';} ?>>au sauna</option>
            <option value="peche" <?php if($_POST['tradition'] == 'peche'){echo 'selected';}else{'';} ?>>à la pêche</option>
            <option value="restaurant" <?php if($_POST['tradition'] == 'restaurant'){echo 'selected';}else{'';} ?>>au restaurant</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['tradition'] == 'peche') || ($_POST['tradition'] == 'restaurant')): ?>
    <p>Non,<br> en Finlande, Noël est la période de fête la plus importante de l’année. C’est avant tout une fête familiale, célébrée sur trois jours. La veille est pratiqué le Sauna de Noël, un rituel obligatoire avant d’attaquer le repas du réveillon. Une bonne manière de transpirer pour mieux manger !</p>
<?php elseif ($_POST['tradition'] == 'sauna'): ?>
    <p>Bravo,<br> en Finlande, Noël est la période de fête la plus importante de l’année. C’est avant tout une fête familiale, célébrée sur trois jours. La veille est pratiqué le Sauna de Noël, un rituel obligatoire avant d’attaquer le repas du réveillon. Une bonne manière de transpirer pour mieux manger !</p>
<?php endif ?>
</div>

    <div class="pt-5 px-5">
    <h4 id="flocon">10. Pour former les flocons de neige, il faut un air pur débarassé de toute poussière:</h4>
    <form action="#tradition" method="POST">
        <label for="flocon"></label>
        <select class="custom-select" name="flocon">
            <option value="vrai" <?php if($_POST['flocon'] == 'vrai'){echo 'selected';}else{'';} ?>>vrai</option>
            <option value="faux" <?php if($_POST['flocon'] == 'faux'){echo 'selected';}else{'';} ?>>faux</option>
        </select>
        <button class="btn btn-primary mt-2" type="submit">Valider</button>
    </form>

<?php if (($_POST['flocon'] == 'vrai')): ?>
    <p>Et non, c'est faux,<br> au départ, c’est un grain de poussière qui se promène dans le ciel. Il va parfois rencontrer des zones très humides. S’il fait assez froid (mais pas trop froid!) dans ces zones très humides, les fines gouttelettes d’eau qui planent autour du grain de poussière vont s’y accrocher, puis de nouvelles gouttelettes vont arriver, et ainsi de suite, pour former un flocon de neige.
<?php elseif ($_POST['flocon'] == 'faux'): ?>
    <p>Bravo,<br> au départ, c’est un grain de poussière qui se promène dans le ciel. Il va parfois rencontrer des zones très humides. S’il fait assez froid (mais pas trop froid!) dans ces zones très humides, les fines gouttelettes d’eau qui planent autour du grain de poussière vont s’y accrocher, puis de nouvelles gouttelettes vont arriver, et ainsi de suite, pour former un flocon de neige.
<?php endif ?>
</div>


</div>