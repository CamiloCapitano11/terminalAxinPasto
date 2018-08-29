@extends('layouts.esqueleto')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

          	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3 class="col-md-6 col-sm-4 col-xs-12">Listado de usuarios <small></small></h3>
                    @can('users.create')
                      <a class="col-md-6 col-xs-9" href="{{ route ('users.create') }}" ><button class="btn btn-success pull-right  btn-md"><i class="fa fa-plus-circle fa-lg "></i> Crear usuario</button></a>
                    @endcan 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="tile table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Nombre </th>
                            <th class="column-title">Correo Electronico </th>
                            <th class="column-title">Acciones </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($users as $user)
                            <tr class="even pointer">
                              <td class="">{{ $user->name }}</td>
                              <td class="">{{ $user->email }} </td>
                              <td class="">
                                @can('users.show')
                                  <a href="{{ route ('users.show', $user->id) }}"><button class="btn btn-dark"><i class="fa fa-info-circle"></i></button></a>
                                @endcan
                                @can('users.edit')
                                  <a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                                @endcan
                                @can('users.destroy')
                                  <a href="{{ route ('users.destroy', $user->id) }}"></a><button class="btn btn-danger"><i class="fa fa-trash-o  "></i></button>
                                @endcan
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div  class="col-md-12 col-xs-12 ">
                        <center>{{ $users->render() }}</center> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection