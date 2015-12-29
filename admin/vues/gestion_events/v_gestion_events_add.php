<link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css">

<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
  <div class="span12">
    <!-- BEGIN THEME CUSTOMIZER-->
    <div id="theme-change" class="hidden-phone">
      <i class="icon-cogs"></i>
      <span class="settings">
        <span class="text">Theme Color:</span>
        <span class="colors">
          <span class="color-default" data-style="default"></span>
          <span class="color-green" data-style="green"></span>
          <span class="color-gray" data-style="gray"></span>
          <span class="color-purple" data-style="purple"></span>
          <span class="color-red" data-style="red"></span>
        </span>
      </span>
    </div>
    <!-- END THEME CUSTOMIZER-->
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
      Ajouter un Évènement
    </h3>



    <ul class="breadcrumb">
      <li>
        <a href="index.php">Tableau de bord</a>
        <span class="divider">/</span>
      </li>

      <li class="active">
        Gestion des Évènements
      </li>
      <li class="pull-right search-wrap">
        <form action="search_result.html" class="hidden-phone">
          <div class="input-append search-input-area">
            <input class="" id="appendedInputButton" type="text">
            <button class="btn" type="button"><i class="icon-search"></i> </button>
          </div>
        </form>
      </li>
    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
  </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN EDITABLE TABLE widget-->
<div class="row-fluid">
  <div class="span6">
    <!-- BEGIN EXAMPLE TABLE widget-->
    <div class="widget purple ">
      <div class="widget-title">
        <h4><i class="icon-reorder"></i> Formulaire d'ajout d'un nouvel événement</h4>
        <span class="tools">
          <a href="javascript:;" class="icon-chevron-down"></a>
          <a href="javascript:;" class="icon-remove"></a>
        </span>
      </div>

      <!-- contenu de mon module -->
      <div class="widget-body">


        <div class="frm_ajout_event">
          <form method="post" action="#" id="contactform">

            <div class="center">
              <h3 class="titreblock">Informations Générales </h3>

              <div class="controls">
                <div class="input-prepend">
                  <span class="add-on">Nom</span><input required="required" class=" " type="text" placeholder="...">
                </div>
              </div>

            </div>
            <h3>Description de l'événement : </h3>
            <p> *Sera affiché dans la page de l'événement concerné</p>
            <textarea id="event_description" name="descriptioncontent" style=" height: 100%; width: 100%;"></textarea>
            <br>
            <h3>Description courte  : </h3>
            <p> *Sera affiché dans la description de la Liste des Évènements</p>
            <div class="control-group">
              <div class="controls">
                <textarea class="input-xlarge" rows="3"></textarea>
              </div>
            </div>





            <!--<h4>Client : </h4>
            <select data-live-search="true" title="Choisissez un client..." class="selectpicker hidden">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
          </select>
          <br><br>-->






          <h3>Domaine d'activité : </h3>
          <select data-live-search="true" name="domaine_activite" title="Choisissez..." class="selectpicker">

            <?php
            $domaines_activites = $connexion->gets_without_option("Domaines_Activites");


            foreach ($domaines_activites as $undom) {
              echo "
              <option value=\"".$undom['id_domaine']."\">".$undom['nom_domaine']."</option>

              ";
            }
            ?>


          </select>
          <hr>

          <h3 class="center">Les thèmes concernés : </h3>

          <div class="control-group">

            <!-- On récupère tout les thèmes existants -->
            <?php
            $themes_all = $connexion->gets_without_option("Themes");


            foreach ($themes_all as $theme) {
              echo "
              <label class=\"btn btn-info btn-option\">
              <input type=\"checkbox\" name=\"themes[]\" value=\"".$theme['id_theme']."\" >".$theme['nom_theme']."
              </label>
              ";
            }
            ?>

          </div>


          <hr>





          <div class="control-group center">
            <label class="control-label"><h3>Newsletter (image) : </h3></label>
            <div class="controls">
              <div data-provides="fileupload" class="fileupload fileupload-new">
                <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                  <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                </div>
                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                <div>
                  <span class="btn btn-file"><span class="fileupload-new">Choisir une image</span>
                  <span class="fileupload-exists">Modifier</span>
                  <input type="file" class="default"></span>
                  <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Enlever</a>
                </div>
              </div>

            </div>
          </div>

          <hr>
          <h3 class="titreblock center">Dates effectives de l'événement : </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th><h3 class="center">Début</h3></th>
                <th><h3 class="center">Fin</h3></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="control-group ">
                  <label class="control-label">Date de début </label>

                  <div class="controls">
                    <input id="dp1" type="text" name="date_debut_ev" value="<?php echo date("j-n-Y");  ?>" size="16" class="m-ctrl-medium">
                  </div>


                </div></td>
                <td>  <div class="control-group">
                  <label class="control-label">Date de Fin </label>

                  <div class="controls">
                    <input id="dp2" type="text" name="date_fin_ev" value="<?php echo date("j-n-Y");  ?>" size="16" class="m-ctrl-medium">
                  </div>
                </div></td>

              </tr>
              <tr>
                <td><div class="control-group ">
                  <label class="control-label">Heure de début</label>

                  <div class="controls">
                    <div class="input-append bootstrap-timepicker">
                      <input id="timepicker1" type="text" class="input-small">
                      <span class="add-on"> <i class="icon-time"></i></span>
                    </div>
                  </div>
                </div></td>
                <td><div class="control-group ">
                  <label class="control-label">Heure de Fin</label>

                  <div class="controls">
                    <div class="input-append bootstrap-timepicker">
                      <input id="timepicker2" type="text" class="input-small">
                      <span class="add-on"> <i class="icon-time"></i></span>
                    </div>
                  </div>
                </div></td>

              </tr>

            </tbody>
          </table>



          <hr>
          <h3 class="titreblock center">Informations pour les Résérvations : </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th><h3 class="center">Ouverture</h3></th>
                <th><h3 class="center">Fermeture</h3></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="control-group ">
                  <label class="control-label">Date d'ouverture </label>

                  <div class="controls">
                    <input id="dp3" type="text" name="date_debut_res" value="<?php echo date("j-n-Y");  ?>" size="16" class="m-ctrl-medium">
                  </div>


                </div></td>
                <td>  <div class="control-group">
                  <label class="control-label">Date de fermeture </label>

                  <div class="controls">
                    <input id="dp4" type="text" name="date_fin_res" value="<?php echo date("j-n-Y");  ?>" size="16" class="m-ctrl-medium">
                  </div>
                </div></td>

              </tr>
              <tr>
                <td><div class="control-group ">
                  <label class="control-label">Heure d'ouverture</label>

                  <div class="controls">
                    <div class="input-append bootstrap-timepicker">
                      <input id="timepicker3" type="text" class="input-small">
                      <span class="add-on"> <i class="icon-time"></i></span>
                    </div>
                  </div>
                </div></td>
                <td><div class="control-group ">
                  <label class="control-label">Heure de fermeture</label>

                  <div class="controls">
                    <div class="input-append bootstrap-timepicker">
                      <input id="timepicker4" type="text" class="input-small">
                      <span class="add-on"> <i class="icon-time"></i></span>
                    </div>
                  </div>
                </div></td>

              </tr>

            </tbody>
          </table>






          <div class="control-group center ">
            <label class="control-label">Nombre d'entrées maximum</label>

            <div class="controls">
              <div class="input-prepend">
                <input name="nb_entrees" type="number" class="input-small">
                <span class="add-on"> <i class="icon-ticket"></i></span>
              </div>
            </div>
          </div>




          <h3 class="titreblock center">Prix des Entrées </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Type</th>
                <th>Prix (<i class="icon-euro"></i>) </th>

              </tr>
            </thead>
            <tbody>
              <tr>

                <td><h4>Particuliers</h4></td>
                <td>  <div class="control-group">

                  <div class="controls">
                    <input  type="number" step="0.01" name="prix_particulier" value="20.00" size="16" class="m-ctrl-medium">
                  </div>
                </div></td>

              </tr>
              <tr>

                <td><h4>Entreprises</h4></td>
                <td>  <div class="control-group">

                  <div class="controls">
                    <input  type="number" step="0.01" name="prix_particulier" value="20.00" size="16" class="m-ctrl-medium">
                  </div>
                </div></td>

              </tr>
              <tr>

                <td><h4>Comités d'entreprises</h4></td>
                <td>  <div class="control-group">

                  <div class="controls">
                    <input  type="number" step="0.01" name="prix_particulier" value="20.00" size="16" class="m-ctrl-medium">
                  </div>
                </div></td>

              </tr>


            </tbody>
          </table>

          <h3 class="titreblock center"> Images associées à l'événement</h3>
          <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="control-group ">
          <div class="controls">
            <div data-provides="fileupload" class="fileupload fileupload-new">
              <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
              </div>
              <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
              <div>
                <span class="btn btn-file"><span class="fileupload-new">Choisir une image</span>
                <span class="fileupload-exists">Modifier</span>
                <input type="file" class="default"></span>
                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Enlever</a>
              </div>
            </div>

          </div>
        </div></td>
        <td><div class="control-group">
          <div class="controls">
            <div data-provides="fileupload" class="fileupload fileupload-new">
              <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
              </div>
              <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
              <div>
                <span class="btn btn-file"><span class="fileupload-new">Choisir une image</span>
                <span class="fileupload-exists">Modifier</span>
                <input type="file" class="default"></span>
                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Enlever</a>
              </div>
            </div>

          </div>
        </div></td>
      </tr>
      <tr>
        <td><div class="control-group ">
          <div class="controls">
            <div data-provides="fileupload" class="fileupload fileupload-new">
              <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
              </div>
              <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
              <div>
                <span class="btn btn-file"><span class="fileupload-new">Choisir une image</span>
                <span class="fileupload-exists">Modifier</span>
                <input type="file" class="default"></span>
                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Enlever</a>
              </div>
            </div>

          </div>
        </div></td>
        <td><div class="control-group">
          <div class="controls">
            <div data-provides="fileupload" class="fileupload fileupload-new">
              <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
              </div>
              <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
              <div>
                <span class="btn btn-file"><span class="fileupload-new">Choisir une image</span>
                <span class="fileupload-exists">Modifier</span>
                <input type="file" class="default"></span>
                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Enlever</a>
              </div>
            </div>

          </div>
        </div></td>
      </tr>
    </tbody>
  </table>









          <button type="submit" name="submit" id="submitButton" title="Click here to submit your message!" class="btn btn-success pull-right">Enregistrer</button>
          <br>
        </form>

      </div>
      <!-- FIN DU FORMULAIRE -->





    </div>
    <!-- FIN DU contenu de mon module -->





  </div>
</div>

<!-- CELUI CI SE TROUVE DANS UNE SPAN 6 AUSSI -->
<?php include ('vues/gestion_events/v_gestion_events_themes.php'); ?>


<!-- END ROW FLUID-->
</div>



<script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
<script src="assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js" ></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript">


tinymce.init({
  selector: "#event_description",
  language: "fr_FR"
});
</script>

<script type="text/javascript">
$(document).ready(function () {
  // debugger;
  window.prettyPrint && prettyPrint();
  $("#dp1,#dp2,#dp3,#dp4").datepicker({

    format: 'dd-mm-yyyy'
  });



  $('#timepicker1,#timepicker2,#timepicker3,#timepicker4').timepicker({
    minuteStep: 1,
    template: 'modal',
    showSeconds: true,
    showMeridian: false
  });

});

</script>
