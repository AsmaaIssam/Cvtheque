@extends('layouts.application')
@section('title', 'ajouter un projet')


@section('content')


   
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Ajouter un projet</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('modules.projets.store') }}" enctype="multipart/form-data" class="form">
            @csrf
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="Objet">Objet</label>
                <input id="Objet" name="Objet"  type="text" id="first-name-column" class="form-control" placeholder="Objet" >
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="Maitre_d_ouvrage">Maitre d'ouvrage</label>
                <input id="Maitre_d_ouvrage" name="Maitre_d_ouvrage" type="text" id="last-name-column" class="form-control" placeholder="Maitre d'ouvrage" >
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="Année_d_exécution">Année d'exécution</label>
                <input id="Année_d_exécution" name="Année_d_exécution" type="date" id="country-floating" class="form-control"  placeholder="Année d'exécution">
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="Lieu_référence">Budget alloué(DH)</label>
                  <input id="Budget_alloué" name="Budget_alloué" type="number" id="email-id-column" class="form-control"  placeholder="Budget alloué(DH)">
                </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="Lieu_référence">Lieu de référence</label>
                <input id="Lieu_référence" name="Lieu_référence" type="text" id="email-id-column" class="form-control"  placeholder="Lieu de référence">
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="Numéro_marché">Numéro marché</label>
                <input id="Numéro_marché" name="Numéro_marché" type="text" id="email-id-column" class="form-control"  placeholder="Numéro marché">
              </div>
            </div>
            

            {{-- <div class="col-md-6 col-12">
                <div class="form-group">
                  <div class="form-group">
                      <label class="form-label" for="user-role">Role</label>
                      <select id="user-role" name="user-role" class="form-control">
                          @foreach ($roles as $role)
                          <option value={{ $role }}>{{ $role }}</option>
                          @endforeach
                      </select>
                  </div>
                  
                </div>
                
            </div> --}}

             
            <div class="col-md-6 col-12">
                <div class="form-group">
                  
                </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Ajouter</button>
              <button type="reset" class="btn btn-outline-secondary waves-effect">Rénitialiser</button>
              <x-jet-validation-errors class="mb-4" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection