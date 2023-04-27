<?php
require("inc_connexion.php");
$credit = 0;
$t = time();
$datom =  date("d-m-Y", $t);
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <form action='' method='get'>
                <div class="row">
                    <div class="col-lg-6">

                        <label for="selectSm" class=" form-control-label">Select Village</label>
                        <select name="selectvillage" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">--Select Village--</option>
                            <?php
                            $req = "select * from communaut ";
                            $res = $idcon->query($req);
                            $resobj = $res->fetchALL(PDO::FETCH_OBJ);
                            foreach ($resobj as $key => $val) {
                                echo "<option value=" . $val->Village . ">" . $val->Village . "</option>?>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="NomVillage" class="control-label mb-1">taper le Numéro Contrat </label>
                            <input id="NomVillage" name="Ncontrat" type="text" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="form-actions form-group">
                            <input type="submit" name="Recherche" class="btn btn-success btn-sm" value="Recherche">
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="row m-t-30">
        <div class="col-md-12">
           
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-header">paye facture</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">facture</h3>
                        </div>
                        <hr>
                        <form action="" method="post">
                        <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nome Adherent</label>
                                <input id="cc-pament" name="" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $credit; ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">numéro de contrat  </label>
                                <input id="cc-pament" name="" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $credit; ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">consomation trimestre</label>
                                <input id="cc-pament" name="" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $credit; ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">village</label>
                                <input id="cc-pament" name="" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $credit; ?>" readonly="readonly">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">montant payer</label>
                                <input id="3" name="montant" type=" number" class="form-control cc-name valid">
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">date de aujourd'hui </label>
                                <input id="DATE" name="date" type="text" value=" <?php echo $datom; ?>" class="form-control cc-name valid" readonly="readonly">
                            </div>
                            <div>
                                <button id="payment-button" type="submit" name="py" class="btn btn-lg btn-info btn-block">
                                    PYY
                                </button>
                            </div>
                            <?php
                            if (isset($_POST['py'])) {
                                $req3 = "INSERT INTO `facture` (`N_fac`, `PrixFact`, `dernire_datePayment`, `consomation`, `N_contrat`, `Id_pret`, `village`) VALUES (NULL, '', '', '', '', NULL, '')";
                                $res3 = $idcon->query($req3);
                                $resobj3 = $res3->fetchALL(PDO::FETCH_OBJ);
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>