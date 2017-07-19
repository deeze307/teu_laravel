@extends('adminlte/theme')
@section('ng','app')
@section('mini',true)
@section('title','TeU - Administracion')
@section('head')
    {!! IAScript('adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! IAScript('adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}
    {!! IAStyle('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! IAStyle('adminlte/plugins/iCheck/minimal/yellow.css') !!}
    {!! IAScript('assets/moment.min.js') !!}
    {!! IAScript('assets/moment.locale.es.js') !!}
    {{--Angular DataTables--}}
    {!! IAScript('assets/angular-datatables/angular-datatables.min.js') !!}
@endsection
@section('body')
    <div ng-controller="empleosController">
        <div class="container">
            <div class="box box-warning col-lg-2">
                <div class="box-header with-border">
                    <h3 class="box-title">Ofertas Laborales</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group has-warning">
                            <label>Titulo</label>
                            <input type="text" class="form-control" ng-model="title" placeholder="Titulo de Oferta Laboral">
                        </div>

                        <!-- textarea -->
                        <div class="form-group has-warning">
                            <label>Descripción</label>
                            <textarea ng-enter="appendEnter()" ng-model="descJob" class="form-control" rows="3" placeholder="Descripción de la Oferta Laboral..."></textarea>
                        </div>
                        <div class="form-group has-warning">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email" ng-model="email">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <div class="input-group has-warning">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" placeholder="Teléfono" ng-model="phone">
                            </div>
                        </div>

                    </form>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkWeb" checked>
                                Visible Web
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkApp" checked>
                                Visible App
                            </label>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <select id="selEmpleoCategorias" ng-model="selected" class="form-control has-warning">
                            <option value="NULL" selected> -- Seleccione Categoría --</option>
                            <option ng-repeat="cat in categories"  value="@{{cat.id}}">@{{cat.categoria_nombre}}</option>
                        </select>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                        <button type="submit" ng-click="addJob()" name="add" id="add-btn" class="btn btn-flat btn-success">Agregar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('iaserver.common.footer')
    {!! IAScript('vendor/teu/management/empleos.js') !!}

@endsection
