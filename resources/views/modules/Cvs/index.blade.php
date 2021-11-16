@extends('layouts.application')
@section('title', 'tableau de bord')


@section('content')


   
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1 style ="margin-bottom :0; font-size :24px; color:rgb(107, 107, 167)" class="card-title">Affichage des cv</h1>
      </div>
      <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" style="height: 30px">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

        @foreach($salaries as $salarie)
        <div class="container-fluid">
            <img src="{{ asset('images/avatars/'.$salarie->Photo_d_identité) }}" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </div>


@endsection