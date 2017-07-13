@extends('adminlte/theme')
@section('mini',true)
@section('title','TeU - Empleos Categorias')
@section('body')
    <div class="container" ng-controller="empleoCategoriaController">
            <div class="box box-warning col-lg-2">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Categoría de Empleos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group has-warning">
                            <label>Titulo</label>
                            <input type="text" class="form-control" placeholder="Titulo de la Categoría">
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                    <button type="button" name="add" id="add-btn" class="btn btn-flat btn-success">Agregar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
