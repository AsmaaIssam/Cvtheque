@extends('layouts.form-wizard')
@section('title', 'test')

@section('style')

@endsection
 <style>
   .tab{
     display: none;
   }
   .step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: rgb(112, 112, 161);
}
 </style>
@section('content')
  <section id="basic-input">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Ajouter un salarié à ETAFAT</h2>
         {{--  <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Forms</a>
              </li>
              <li class="breadcrumb-item active">Form Wizard
              </li>
            </ol>
          </div> --}}
        </div>
      </div>
    </div>
    <form action="">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body tab">
              <h4 class="card-title" style ="color:rgb(107, 107, 167)">1-Informations de base sur le salarié</h4>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Nom</label>
                <input type="text" name="Nom" id="Nom" class="form-control" placeholder="user"/>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Prénom</label>
                <input type="text" name="Prénom" id="Prénom" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">CIN</label>
                <input type="text" name="CIN" id="CIN" class="form-control" placeholder="Numéro de CIN" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="profil">Profil</label>
                <select name="profil" id="profil" class="select2 w-100">
                  <option value="Externe">Externe</option>
                  <option value="Interne">Interne</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Responsable_hiérarchique">Responsable hiérarchique</label>
                <select name="Responsable_hiérarchique" id="Responsable_hiérarchique" class="select2 w-100">
                  <option value="DG">DG</option>
                  <option value="Attachée de Direction">Attachée de Direction</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Poste">Poste</label>
                <select name="Poste" id="Poste" class="select2 w-100">
                  <option value="DG">chef de projet</option>
                  <option value="Attachée de Direction">ingénieur SIG</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Date_d_embauche">Date d’embauche</label>
                <input type="date" name="Date_d_embauche" id="Date_d_embauche" class="form-control"/>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Département_d_affectation">Département d’affectation</label>
                <select name="Département_d_affectation" id="Département_d_affectation" class="select2 w-100">
                  <option value="DG">DG</option>
                  <option value="DSI">DSI</option>
                  <option value="SUP">SUP</option>
                  <option value="TCA">TCA</option>
                  <option value="TGE">TGE</option>
                  <option value="COP">COP</option>
                  <option value="LAS">LAS</option>
                  <option value="MMS">MMS</option>
                  <option value="DRO">DRO</option>
                  <option value="SIG">SIG</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Numéro_contrat_de_travail">Numéro  du contrat de travail </label>
                <input type="text" name="Numéro_contrat_de_travail" id="Numéro_contrat_de_travail" class="form-control" placeholder="numéro du contrat de travail " />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Type_de_contrat">Type de contrat</label>
                <select name="Type_de_contrat" id="Type_de_contrat" class="select2 w-100">
                  <option value="CDD">CDD</option>
                  <option value="CDI">CDI</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Contrat_du">Contrat du</label>
                <input type="date" name="Contrat_du" id="Contrat_du" class="form-control" placeholder="Contrat du"/>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Contrat_au">Contrat au</label>
                <input type="date" name="Contrat_au" id="Contrat_au" class="form-control" placeholder="Contrat au"/>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="Langues">Langues</label>
                <select class="select2 w-100" name="Langues" id="Langues" multiple>
                  <option value="Français">Français</option>
                  <option value="Arabe">Arabe</option>
                  <option value="Anglais">Anglais</option>
                  <option value="Autre">Autre</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="Niveau">Niveau</label>
                <select name="Niveau" id="Niveau" class="select2 w-100">
                  <option value="Bon">Bon</option>
                  <option value="Moyen">Moyen</option>
                  <option value="Débutant">Débutant</option>
                </select>
              </div>
              
            </div>
          </div>


          <div class="card-body tab">
            <h4 class="card-title" style ="color:rgb(107, 107, 167)">3-Informations supplémentaires</h4>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="form-label" for="Date_de_naissance">Date de naissance</label>
                <input type="date" name="Date_de_naissance" id="Date_de_naissance" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Lieu_de_naissance">Lieu de naissance</label>
                <input type="text" name="Lieu_de_naissance" id="Lieu_de_naissance" class="form-control" placeholder="Lieu de naissance" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Situation_familiale">Stituation familiale</label>
                <input type="text" name="Situation_familiale" id="Situation_familiale" class="form-control" placeholder="Stituation familiale" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Nombre_d_enfants">Nombre d'enfants</label>
                <input type="number" name="Nombre_d_enfants" id="Nombre_d_enfants" class="form-control" placeholder="0" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Nationalité">Nationalité</label>
                <input type="text" name="Nationalité" id="Nationalité" class="form-control" placeholder="Nationalité" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Adresse_1">Adresse 1</label>
                <input type="text" name="Adresse_1" id="Adresse_1" class="form-control" placeholder="Adresse du salarié" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Adresse_2">Adresse 2</label>
                <input type="text" name="Adresse_2" id="Adresse_2" class="form-control" placeholder="Adresse 2 du salarié" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Code_Postal">Code postal</label>
                <input type="number" name="Code_Postal" id="Code_Postal" class="form-control" placeholder="Code postal" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Email">Email</label>
                <input
                  type="email"
                  name="Email"
                  id="Email"
                  class="form-control"
                  placeholder="user@email.com"
                />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Téléphone_fixe">Téléphone fixe</label>
                <input type="number" name="Téléphone_fixe" id="Téléphone_fixe" class="form-control" placeholder="Numéro du téléphone fixe" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="Téléphone_portable">Téléphone protable</label>
                <input type="number" name="Téléphone_portable" id="Téléphone_portable" class="form-control" placeholder="Numéro du téléphone portable" />
              </div>
              
              <div class="form-group col-md-3">
                <label class="form-label" for="Numéro_CNSS">Numéro CNSS</label>
                <input type="number" name="Numéro_CNSS" id="Numéro_CNSS" class="form-control" placeholder="Numéro CNSS" />
              </div>
            </div>
          </div>

          <div class="card-body tab">
            <h4 class="card-title" style ="color:rgb(107, 107, 167)">3-Cursus et formation</h4>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Niveau des études</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Etablissement de formation</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Intitulé de formation</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                  <label class="form-label" for="username">Date de début</label>
                  <input type="date" name="last_name" id="username" class="form-control" placeholder="user" />
                </div>
                <div class="form-group col-md-3">
                  <label class="form-label" for="username">Date de fin</label>
                  <input type="date" name="last_name" id="username" class="form-control" placeholder="user" />
                </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Intitulé diplôme</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Date d'obtention</label>
                <input type="date" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Pays</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="username">Adresse</label>
                <input type="text" name="last_name" id="username" class="form-control" placeholder="user" />
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="diplome">Diplôme de la formation</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name ="diplome" id="diplome" />
                  <label class="custom-file-label" for="customFile">Choisir un fichier</label>
                </div>
              </div>
    
            </div>
          </div>


          <div class="card-body tab">
            <h4 class="card-title" style ="color:rgb(107, 107, 167)">4-Expérience antérieurs à ETAFAT</h4>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="language">Poste</label>
                <select class="select2 w-100" name="post-anterieur">
                  <option>Chef de projet</option>
                  <option>Chef d'équipe</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="username">Société</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Ville</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Pays</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Date de début</label>
                <input type="date" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-3">
                <label class="form-label" for="username">Date de fin</label>
                <input type="date" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="username">Adresse</label>
                <input type="date" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="username">Description</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Numéro CNSS" />
              </div>
              
              
            </div>
          </div>

          
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">
        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
        <span class="align-middle d-sm-inline-block d-none">Previous</span>
      </button>
      <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">
        <span class="align-middle d-sm-inline-block d-none">Next</span>
        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
      </button>
      <button class="btn btn-success" type="submit" id="btnSubmit">
        <span class="align-middle d-sm-inline-block d-none">Submit</span>
      </button>
      <!-- Circles which indicates the steps of the form: -->
    </div>
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
   </div>
  </form>
  </section>  


  <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  
  showTab(currentTab); // Display the current tab

  function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    //document.getElementById("prevBtn").style.display = "none";
    document.getElementById("prevBtn").style.opacity = 0;
    document.getElementById("nextBtn").style.display = "inline";
  } else {
    document.getElementById("prevBtn").style.opacity = 1;
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("btnSubmit").style.display = "inline";
  } else {
    document.getElementById("btnSubmit").style.display = "none";
  }
  fixStepIndicator(n);
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // Otherwise, display the correct tab:
  console.log(currentTab);
  showTab(currentTab);
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
  </script>
@endsection