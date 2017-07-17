@extends('adminlte.theme')
@section('ng','app')
@section('mini',true)
@section('title','TeU - Empleos Categorias')
@section('body')
    <div class="container" ng-controller="empleosController">
         <div class="col-lg-6">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Categoría de Empleos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group has-warning">
                            <label>Titulo</label>
                            <input type="text" class="form-control" ng-model="titleCategory" placeholder="Titulo de la Categoría">
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                    <button type="button" name="add" id="add-btn" ng-click="addCategory()" class="btn btn-flat btn-success">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('iaserver.common.footer')
    {!! IAScript('vendor/teu/management/empleos.js') !!}
@endsection
