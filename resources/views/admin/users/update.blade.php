@extends('layouts.application')
@section('title', 'modifier')


@section('content')


   
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Les données de l'utilisateur</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.users.update',$user->id) }}" class="form">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="first-name-column">Prénom</label>
                <input id="first_name" name="first_name"  type="text" id="first-name-column" class="form-control" value="{{$user->first_name}}" placeholder="{{$user->first_name}}" >
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="last-name-column">Nom de famille</label>
                <input id="last_name" name="last_name" type="text" id="last-name-column" class="form-control" value="{{$user->last_name}}" placeholder="{{$user->last_name}}" >
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="country-floating">S'identifier</label>
                <input id="name" name="name" type="text" id="country-floating" class="form-control"  value="{{$user->name}}" placeholder="{{$user->name}}">
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="email-id-column">E-mail</label>
                  <input id="email" name="email" type="email" id="email-id-column" class="form-control"  value="{{$user->email}}" placeholder="{{$user->email}}">
                </div>
              </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="company-column">Mot de passe</label>
                <input id="password" name="password" type="password" id="company-column" class="form-control" name="company-column" value="{{$user->password}}" placeholder="*********">
              </div>
            </div>

          {{--   <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="company-column">Confirmation du mot de passe</label>
                  <input type="password" id="company-column" class="form-control" name="company-column" placeholder="Mot de passe">
                </div>
            </div> --}}
            
            <div class="col-md-6 col-12">
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
                
            </div>

             <div class="col-md-6 col-12">
                <div class="form-group">
                        <input type="file" class="btn btn-outline-primary mb-1">
                </div>
            </div>
             
            <div class="col-md-6 col-12">
                <div class="form-group">
                  
                </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
              <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
              <x-jet-validation-errors class="mb-4" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection