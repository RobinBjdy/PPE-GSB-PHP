
<div class="row">
    <div class="col-md-4">
        <form action="index.php?uc=ValiderFicheDeFrais&action=ValiderFicheDeFrais" method="post" role="form">
            <div class="form-group">
                <label for="lstVisiteur" accesskey="n">Visiteur : </label>
                <select id="lstVisiteur" name="lstVisiteur" class="form-control">
                    <?php
                    if ($_SESSION['date']) {

                        foreach ($lesVisiteur as $unVisiteur) {
                            $idvisi = $unVisiteur['nomvisiteur'];
                            if ($selectedValue == $idvisi) {
                                ?><option selected value="<?php echo $unVisiteur['nomvisiteur'] ?>"><?php echo $unVisiteur['nomvisiteur'] ?></option>               
                            <?php } else { ?> <option value="<?php echo $idvisi ?>"><?php echo $idvisi ?></option> <?php
                            }
                        }
                    } else {
                        $lesVisiteur = $pdo->getVisiteurFromMois($_SESSION['date']);
                        $selectedValue = $lesVisiteur[0];
                        foreach ($lesVisiteur as $unVisiteur) {
                            $idvisi = $unVisiteur['visiteur'];
                            if ($selectedValue == $idvisi) {
                                ?><option selected value="<?php echo $unVisiteur['nomvisiteur'] ?>"><?php echo $unVisiteur['nomvisiteur'] ?></option>               
                            <?php } else { ?> <option value="<?php echo $idvisi ?>"><?php echo $idvisi ?></option> <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <?php if ($action == 'selectionnerVisiteur' || $action == 'ValiderFicheDeFrais' || $action == 'CorrigerNbJustificatifs' || $action == 'CorrigerFraisForfait' || $action == 'CorrigerElemHorsForfait') { ?>
                <input id="okVisiteur" type="submit" value="Valider" class="btn btn-success" 
                       role="button">
                   <?php } ?>

        </form>
    </div>   
</div> </br>

