
    <?php
    $title = "Formulaire de Candidature";
    include "header.php" ?>
    <form action="enrg-candidat.php" method="post">
        <div class="frm">
            <fieldset class="infoperso">
                <legend>Information Personnelles :</legend>   
            <div>
                <span>Nom:<input type="text" name=nom placeholder="Entrer votre nom" required></span>
                <span>Prenom:<input type="text" name="pnom" placeholder="Entrer votre prénom" required></span>
            </div>
            <div>
                Date de naissance : <input type="date" name="daten" required>
                Ville : <input type="text" name=ville placeholder="Entrer votre ville" required>
            </div>
            <div>
                CIN: <input type="text" name="cin" placeholder="Entrer votre CIN" required>
                CNE: <input type="text" name="cne" placeholder="Entrer votre CNE" required>
            </div>
            <div>
                Email:<input type="email" name="email" placeholder="Entrer votre email" required>
                N° Tel:<input type="number" name="num" placeholder="Entrer votre numero" required>
            </div>
          
            <div>
                Situation familiale:<select name="situ"><option value="Celibataire" selected>Celibataire</option>
                <option value="Marie">Marié</option></select>
            </div>
          </fieldset>
            <fieldset class="academic">
                <legend>Parcours academique :</legend>
            <div>
                <div>
                    Serie Bac :<select name="serie_bac">
                        <option value="maths" selected>sc maths</option>
                        <option value="physique">sc physique</option>
                        <option value="svt">sc vie et terre</option>
                        <option value="tech">technologies</option>
                    </select>
                    Note Examen national:<input type="number" step="0.01 " name="noten" placeholder="Entrer votre note nationale" required>
                   
                    </select>
                </div>
                <div>
                    Note Examen Regional:<input type="number" step="0.01" name="noter" placeholder="Entrer votre régionale" required>
                 Mention :<select name="mention">
                        <option value="T.Bien">T.Bien</option>
                        <option value="Bien">Bien</option>
                        <option value="A.Bien">A.Bien</option>
                        <option value="Acceptable" selected>Acceptable</option>
                        </select>
                    </div>
            </fieldset>
            <fieldset class="formation">
                <legend>Choix de Formation :</legend>
                <div>
                    Filière : <select name="formation">
                        <option value="Genie Informatique" selected>Genie Informatique</option>
                        <option value="Genie Electrique">Genie Electrique</option>
                        <option value="Industriel"> Industriel</option>
                        <option value="Mecanique"> Mecanique</option>
                        <option value="Mecatronique">Mecatronique </option>
                    </select>
                    Logement: <select name="logement">
                        <option value="OUI">Oui</option>
                        <option value="NON" selected>Non</option>
                    </select>
                </div>               
            </fieldset>
            <button type="submit">Envoyer</button> 
        </div> 
    </form>
<?php include "footer.php" ?>
