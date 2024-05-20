@extends('layouts.app_container')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <i class="fas fa-user"></i> Listado de usuarios
                </div>
                <div class="card-body">
                   <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover table-striped table-bordered table-flush text-center" id="tabla_medicos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Tipo</th>
                                        <th>Estatus</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>JOSE LUIS CERVANTEZ</td>
                                        <td>jose_luis@dominio.com</td>
                                        <td>MEDICO</td>
                                        <td>
                                            <span class="badge badge-success">Activo</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Detalles</button>
                                        </td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                   </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Crear usuario</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush