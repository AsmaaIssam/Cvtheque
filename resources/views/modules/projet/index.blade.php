
@extends('layouts.application')

@section('title', 'Gestion des projets')

@section('content')
    
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- projetss list start -->
        <section class="app-user-list">
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
                                <a role="bottom" class="btn add-new btn-primary mt-50" href="{{ route('modules.projets.create') }}">
                                    <span>nouveau projet</span>
                                </a> 
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Objet</th>
                                <th>Maitre d'ouvrage</th>
                                <th>Année d'exécution</th> 
                                <th>Budget alloué(DH)</th>
                                <th>Lieu de  référence</th>
                                <th>Document de référence</th>
                                <th>Numéro du marché</th>
                                <th>Opérations</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projets as $projet)
                                  <tr>
                                  {{-- <th scope="row">{{$projet->id}}</th> --}}
                                  <td>{{$projet->Objet}}</td>
                                  <td>{{$projet->Maitre_d_ouvrage}}</td>
                                  <td>{{$projet->Année_d_exécution}}</td>
                                  <td>{{$projet->Budget_alloué}}</td>
                                  <td>{{$projet->Lieu_référence}}</td>
                                  <td>{{$projet->Document_référence}}</td>
                                  <td>{{$projet->Numéro_marché}}</td>
                                
                                  <td><button class="btn btn-sm btn-primary">
                                    <a role ="button" style="color:white" class="align-middle" href="{{ route('admin.users.edit',$projet->id) }}">{{ __('M') }}</a>
                                  </button>
                                  <button type ="button" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{$projet->id}}').submit()">
                                  <span class="align-middle">S</span>
                                  </button>

                                  <form id="delete-user-form-{{$projet->id}}" action="{{ route('modules.projets.destroy',$projet->id) }}" method="POST" style="display:none">
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
                    {{ $projets -> links()}}
                </div>
            </div>
        </section>
        <!-- users list ends -->
     
    </div>
</div>


@endsection



