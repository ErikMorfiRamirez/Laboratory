@extends('layouts.app_container')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    Crear orden de trabajo
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    Paciente
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                        <div class="col-lg-12 mt--3">
                                            <small>Información del paciente</small>
                                        </div>
                                        <div class="col-lg-12">

                                        </div>
                                        
                                   </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <div class="col-lg-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm col" data-toggle="modal" data-target="#modelId">
                                            <i class="fas fa-search"></i> Seleccionar paciente
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Busqueda de pacientes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                Filtros de busqueda
                            </div>
                            <div class="col-lg-12 mt--3">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt--3">
                            <div class="col-lg-3">
                                <small>Codigo paciente</small>
                                <input type="text" placeholder="Código" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-3">
                                <small>Nombre(s) paciente</small>
                                <input type="text" placeholder="Nombre(s)" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-3">
                                <small>Apellido(s) paciente</small>
                                <input type="text" placeholder="Apellido(s)" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-3">
                                <small>Email paciente</small>
                                <input type="text" placeholder="Apellido(s)" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button class="btn btn-success btn-sm"><i class="fas fa-search"></i> Buscar</button>
                            </div>
                            <div class="col-lg-12"><hr></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt--3">
                                Resultados de la busqueda
                            </div>
                            <div class="col-lg-12 table-responsive mt-2">
                                <table class="table table-striped table-bordered table-hover table-dark mt-2" id="tabla_pacientes">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Código</th>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Genero</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PAC0101</td>
                                            <td>ERIK DANIEL</td>
                                            <td>GOMEZ RAMIREZ</td>
                                            <td>25/11/1995</td>
                                            <td>MASCULINO</td>
                                            <td>
                                                <button class="bnt btn-success btn-sm"><i class="fas fa-check"></i> Seleccionar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
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