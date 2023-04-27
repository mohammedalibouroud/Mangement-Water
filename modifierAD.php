<div class="main-content">
    <div class="row form-group">

        <div class="col-12 col-md-5">
            <form action='' method='post'>
                <label for="selectSm" class=" form-control-label">Select Village</label>
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
                <div class="form-actions form-group">
                    <input type="submit" name="Recherche" class="btn btn-success btn-sm" value="Recherche">
                </div>
            </form>
        </div>
    </div>

    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="card-header">
                <strong>tableau Adhérent</strong>

            </div>
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>CIN </th>
                            <th>Numéro Contrat</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Tele</th>
                            <th>Village</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['Recherche'])) {
                            $nvillage = $_POST['selectvillage'];
                            $req = "select * from adherent WHERE village='" . $nvillage . "'";
                            $res = $idcon->query($req);
                            $resobj = $res->fetchALL(PDO::FETCH_OBJ);
                            foreach ($resobj as $key => $val) {
                                echo "<tr>";
                                echo "<td>" . $val->CIN . "</td>";
                                echo "<td>" . $val->N_Co . "</td>";
                                echo "<td>" . $val->Nom . "</td>";
                                echo "<td>" . $val->Prenom . "</td>";
                                echo "<td>" . $val->Tele . "</td>";
                                echo "<td>" . $val->village . "</td>";
                                echo "<td align='center'>
                                                   <a href='?page=afficher&id=" . $val->CIN . "'> <i class='fa fa-eye'></i>  </a>
                                                    <a href='?page=afficher&id=" . $val->CIN . "'> <i class='fa fa-pencil-square-o'></i> </a>
                                                   <a href='?page=afficher&id=" . $val->CIN . "'> <i class='fa fa-archive'> </i></a></td>";



                                echo "</tr>";
                            }
                        }
 

                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>