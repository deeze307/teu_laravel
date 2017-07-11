@extends('adminlte/theme')
@section('mini',true)
@section('title','TeU - Administracion')
@section('body')
    <div class="container">
            <div class="box box-warning col-lg-2">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Ofertas Laborales</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group has-warning">
                            <label>Titulo</label>
                            <input type="text" class="form-control" placeholder="Titulo de Oferta Laboral">
                        </div>

                        <!-- textarea -->
                        <div class="form-group has-warning">
                            <label>Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Descripción de la Oferta Laboral..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-success">Agregar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
