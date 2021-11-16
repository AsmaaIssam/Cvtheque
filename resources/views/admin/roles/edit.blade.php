@extends('layouts.application')
@section('title', 'modifier')


@section('content')


   
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1 style ="margin-bottom :0; font-size :24px; color:rgb(107, 107, 167)" class="card-title">Ajouter un role</h1>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.roles.update',$role->id) }}" class="form">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="name-column">Nom du role</label>
                <input id="name" name="name"  type="text" id="name" class="form-control" value ="{{$role ->name}}">
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">{{-- demo-inline-spacing --}}
                    <label style ="margin-bottom :0; font-size :16px" class="card-title">Permissions</label>
                      
                        @foreach($permission as $value)
                        {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                      <br/> --}}
                      <div class="custom-control custom-checkbox">
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                      </div>
                      @endforeach
                       
                      
                </div>
            </div>

              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="description-column">Description</label>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-label-group">
                        <textarea class="form-control" id="description" name="description" rows="3" value={{$role ->description}} >{{$role ->description}}</textarea>
                      </div>
                    </div>
                  </div>
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