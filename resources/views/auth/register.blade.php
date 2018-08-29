@extends('layouts.esqueleto')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Registro de usuarios</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form method="post" action="{{ url('users/store') }}" class="form-horizontal form-label-left input_mask">
                @csrf
                <div class="col-md-9 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="nombres" name="name" placeholder="Nombre completo">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>


                  <div class="col-md-9 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="mail" name="email" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>

                    <div class="col-md-9 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left" id="mail" name="password" placeholder="Contraseña">
                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                  </div> 
                  <br>
                  <div class="col-md-12 col-xs-12">
                      <h3>Permisos</h3>
                  </div>
                  <div>
                      @foreach($permissions as $permission)
                        <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="checkbox">
                                <label>
                                  <input value="{{ $permission->id }}" type="checkbox" name="permissions[]" class="flat" > {{ $permission->name }}
                                </label>
                              </div>   
                          </div>
                      @endforeach
                  </div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <button type="button" class="btn btn-primary">Cancelar</button>
                       <button class="btn btn-primary" type="reset">Limpiar</button>
                      <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
    </div>
</div>            
@endsection

