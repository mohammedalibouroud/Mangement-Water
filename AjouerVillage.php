             <div class="main-content">
                 <div class="row">
                     <div class="col-lg-8">
                         <div class="card">
                             <div class="card-header">Ajouter village</div>
                             <div class="card-body">
                                 <div class="card-title">
                                     <h3 class="text-center title-2">Ajouter village</h3>
                                 </div>
                                 <hr>
                                 <form action='' method='post'>
                                     <div class="form-group">
                                         <label for="NomVillage" class="control-label mb-1">taper le nom de village</label>
                                         <input id="NomVillage" name="nomvillage" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                     </div>

                                     <div>
                                         <button id="payment-button" type="submit" name="btnAjoutervillage" class="btn btn-lg btn-info btn-block">
                                             <i class="btn btn-primary"></i>&nbsp;
                                             <span id="validerVillage">valider</span>

                                         </button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                             <div class="au-card-inner">
                                 <div class="table-responsive">
                                     <table class="table table-top-countries">
                                         <tbody>
                                             <?php
                                                require("inc_connexion.php");
                                                $req = "select Village,Totalpayment from communaut";
                                                $res = $idcon->query($req);
                                                $resobj = $res->fetchALL(PDO::FETCH_OBJ);
                                                foreach ($resobj as $key => $val) {
                                                    echo "<tr>";
                                                    echo "<td class='bcolor'>" . $val->Village . "</td>";
                                                    echo "<td>" . $val->Totalpayment . "</td>";
                                                    echo "<tr>";
                                                }
                                                ?>
                                         </tbody>
                                     </table>
                                     <?php
                                        if (isset($_POST['btnAjoutervillage'])) {
                                            $nomevillage = $_POST['nomvillage'];
                                            $req2 = "insert into communaut (idCo, NoCommunaut,Village,Totalpayment) VALUES (NULL, 'Azzaba', '$nomevillage', NULL)";
                                            $rest = $idcon->exec($req2);
                                        }
                                        $res->closeCursor();
                                        $idcon = NULL;
                                        ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>