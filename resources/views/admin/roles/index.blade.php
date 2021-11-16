@extends('layouts.application')

@section('title', 'Gestion des utilisateurs')

@section('content')
    
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- users list start -->
        <section class="app-user-list">
            <!-- users filter start -->
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <div style="padding-top:1%;padding-bottom:1%"> 
                        <div class="dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1">
                            <div class="mr-1">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <input style="margin-top: 3.5%" type="search" class="form-control" placeholder="rechercher" aria-controls="DataTables_Table_0">
                                </div>
                            </div>
                            <div class="dt-buttons btn-group flex-wrap">
                                <a role="bottom" class="btn add-new btn-primary mt-50" href="{{ route('admin.roles.create') }}">
                                    <span>Ajouter un role</span>
                                </a> 
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                  <tr>
                                  <th scope="row">{{$role->id}}</th>
                                  <td>{{$role->name}}</td>
                                  <td>{{$role->description}}</td>
                                  <td><button class="btn btn-sm btn-primary">
                                    <a role ="button" style="color:white" class="align-middle" href="{{ route('admin.roles.edit',$role->id) }}">{{ __('Modifier') }}</a>
                                  </button>
                                  <button type ="button" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{$role->id}}').submit()">
                                  <span class="align-middle">Supprimer</span>
                                  </button>

                                  <form id="delete-user-form-{{$role->id}}" action="{{ route('admin.roles.destroy',$role->id) }}" method="POST" style="display:none">
                                      @csrf
                                      @method("DELETE")
                                  </form>
                                  </td>
                                  </tr> 
                              @endforeach
                        </tbody>
                    </table>
                    
                </div>
               
            </div>
            <!-- list section end -->
            <div style="padding-bottom:1%;"> 
                <div class="dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1">
                    {{ $roles -> links()}}
                </div>
            </div>
        </section>
        <!-- users list ends -->
     
    </div>
</div>


@endsection



