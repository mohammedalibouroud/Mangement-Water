<div class="main-content">
    <?php
    $nom = $prenom = $adresse = $mail = $tele = $cin = $Ncontrat = $Ncompteur = $Village = $cindoc = $pvInstalation = $pvContrat = $pvDemande = "";
    $nomerr = $prenomerr = $adresseerr = $mailerr = $teleerr = $cinerr = $Ncontraterr = $Ncompteurerr = $Villageerr = $cindocerr = $pvInstalationerr = $pvContraterr = $pvDemandeerr = "";
    //Validation champ Nom	

    ?>
    <form action='' method='post'>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Ajouter Adhérent</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="nom" class=" form-control-label">Nom </label>
                            <input type="text" id="1" name="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prenom" class=" form-control-label">prenom *</label>
                            <input type="text" id="prenom" name="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="adress" class=" form-control-label">l'adresse *</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="mail" class=" form-control-label">E-mail </label>
                            <input type="text" id="mail" name="mail" class="form-control">
                        </div>
                        <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="telephon" class=" form-control-label">Telephone *</label>
                                    <input type="text" id="" name="tele" class="form-control">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="cin" class=" form-control-label">CIN *</label>
                                    <input type="text" id="CIN" name="CIN" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Ajouter contrat</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="Ncontrat" class=" form-control-label">numéro de contrat *</label>
                            <input type="text" id="Ncontrat" name="Ncontrat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">numéro de compteur eau *</label>
                            <input type="text" id="Ncompteur" name="Ncompteur" class="form-control">
                        </div>
                        <label for="selectSm" class=" form-control-label"> Village</label>
                        <select name="selectvillage" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">--Select Village--</option>
                            
                            <?php require("inc_connexion.php");
                            $req = "select * from communaut ";
                            $res = $idcon->query($req);
                            $resobj = $res->fetchALL(PDO::FETCH_OBJ);
                            foreach ($resobj as $key => $val) {
                                echo "<option value=" . $val->Village . ">" . $val->Village . "</option>?>";
                            }
                           
                            ?>

                        </select>
                        <div class="form-group">
                            <div class="col-8">
                                <label for="CINPN">CIN</label>
                                <input type="file" id="CINpng" name="CINpng" accept="image/png, image/jpeg">
                            </div>
                            <div class="form-group">
                                <div class="col-8">
                                    <label for="pvinstall">PV instalation *</label>
                                    <input type="file" id="pvInstalation" name="pvInstalation" accept="image/png, image/jpeg">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-8">
                                    <label for="pccontart">PV cotrat *</label>
                                    <input type="file" id="pvContrat" name="pvContrat" accept="image/png, image/jpeg">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-8">
                                    <label for="pccontart">PV Demande </label>
                                    <input type="file" id="pvcon" name="pvDemande" accept="image/png, image/jpeg">
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <input type="submit" name="Ajouter" class="btn btn-success btn-sm" value="Ajouter">

                            </div>

                        </div>
                        <?php
                        if (isset($_POST['Ajouter'])) {
                            $cin = $_POST['CIN'];
                            $nom = $_POST['nom'];
                            $prenom = $_POST['prenom'];
                            $adresse = $_POST['adresse'];
                            $tele = $_POST['tele'];
                            $mail = $_POST['mail'];
                            $Ncompteur = $_POST['Ncompteur'];
                            $Ncontrat = $_POST['Ncontrat'];
                            $village = $_POST['selectvillage'];
                            $pvContrat = $_POST['pvContrat'];
                            $pvDemande = $_POST['pvDemande'];
                            $pvInstalation = $_POST['pvInstalation'];
                            $CINpng = $_POST['CINpng'];
                            $req = "INSERT into adherent (CIN,N_Co,Nom,Prenom,Adresse,Tele,Emal,pvDemande,pvContrat,pvInstalation,Ncompteur,village,CINpng) Values('$cin','$Ncontrat','$nom','$prenom','$adresse','$tele','$mail','$pvDemande','$pvContrat','$pvInstalation','$Ncompteur','$village','$CINpng')";
                            $rst = $idcon->exec($req);
                            if ($rst) {
                                echo "Adherent bien ajouter";
                            } else {
                                echo "lkhraaaa";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>