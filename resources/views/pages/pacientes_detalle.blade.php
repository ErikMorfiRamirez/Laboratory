@extends('layouts.app_container')

@section('content')
<div class="container-fluid">
    <div class="header-body">
        <!-- Card stats -->
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="{{ route('pacientes') }}">Pacientes</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('pacientes_detalle') }}">Detalles del paciente</a></li>
                      <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                    </ol>
                  </nav>
            </div>
        </div>
        @include('layouts.headers.cards_paciente')
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <i class="fas fa-clipboard-list text-info"></i> Información del paciente
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3><i class="fas fa-notes-medical"></i> Demograficos del paciente</h3>
                                    </div>
                                    <div class="card-body mt--2">
                                        <div class="row text-sm">
                                            <div class="col-lg-12">
                                                <strong>NOMBRE(S): </strong>
                                                <br><i class="fas fa-check-circle"></i> LUIS JAVIER
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>APELLIDO(S): </strong>
                                                <br><i class="fas fa-check-circle"></i> SOLIS ARREDONDO
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>FECHA DE NACIMIENTO: </strong>
                                                <br><i class="fas fa-check-circle"></i> 25/11/1995
                                            </div>
                                            <div class="col-lg-6">
                                                <strong>EDAD: </strong>
                                                <br><i class="fas fa-check-circle"></i> 28
                                            </div>
                                            <div class="col-lg-6">
                                                <strong>GENERO: </strong>
                                                <br><i class="fas fa-check-circle"></i> MASCULINO
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>EMAIL: </strong>
                                                <br><i class="fas fa-check-circle"></i> JAVIER_SOLIS@EJEMPLO.COM
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>TELÉFONO: </strong>
                                                <br><i class="fas fa-check-circle"></i> 5526263535
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>EXPEDIENTE: </strong>
                                                <br><i class="fas fa-check-circle"></i><a href="#"> A585896</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-icon btn-secondary col" type="button">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                            <span class="btn-inner--text">Editar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt--">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3><i class="fas fa-briefcase-medical"></i> Ordenes de trabajo asociadas</h3>    
                                    </div>    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 table-responsive">
                                                <table class="table table-striped table-hover table-bordered table-flush table-ligth mt-2" id="tabla_ordenes_asociadas">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Folio</th>
                                                            <th>Fecha</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>A000212</td>
                                                            <td>15/02/2024 12:31:24</td>
                                                            <td><span class="badge badge-success">Finalizada</span></td>
                                                            <td>
                                                                <div class="dropdown open">
                                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                                Opciones
                                                                            </button>
                                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                        <a href="" class="dropdown-item"><i class="fas fa-info-circle"></i> Ver detalles</a>
                                                                        <a href="" class="dropdown-item"><i class="fas fa-file-invoice-dollar"></i> Genera recibo</a>
                                                                        <a href="" class="dropdown-item"><i class="fas fa-file-pdf"></i> Genera reporte</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-icon btn-primary" type="button" href="{{ route('crear_orden_servicio') }}">
                            <span class="btn-inner--icon"><i class="fas fa-notes-medical"></i></span>
                            <span class="btn-inner--text">* Crear orden de servicio</span>
                        </a>
                        <button class="btn btn-icon btn-success" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-file-invoice-dollar"></i></span>
                            <span class="btn-inner--text">Crear presupuesto</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3><i class="fas fa-folder-open"></i> Archivos del paciente</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-xl-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3>Identificación</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <i class="fas fa-file fa-2x"></i>
                                        </div>
                                        <div class="col-lg-8 text-sm mt--2">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    Archivo: Ine.pdf
                                                </div>
                                                <div class="col-lg-12">
                                                    Subida: 12/02/2024
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="card-footer text-center">
                                    <button class="btn btn-icon btn-primary btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Ver archivo">
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i> </span>
                                    </button>
                                    <button class="btn btn-icon btn-warning btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Editar archivo">
                                        <span class="btn-inner--icon"><i class="fas fa-edit"></i> </span>
                                    </button>
                                    <button class="btn btn-icon btn-secondary btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Descargar archivo">
                                        <span class="btn-inner--icon"><i class="fas fa-download"></i> </span>
                                    </button>
                                    <button class="btn btn-icon btn-danger btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar archivo">
                                        <span class="btn-inner--icon"><i class="fas fa-trash"></i> </span>
                                    </button>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-secondary" data-toggle="modal" data-target="#modelId"><i class="fa fa-plus-circle" aria-hidden="true"></i> * Cargar archivo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cargar archivo...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Nombre para el archivo:</label>
                        <input type="text" class="form-control form-control-sm form-control-alternative">
                    </div>
                    <div class="col-lg-6">
                        <label>Selecciona el archivo</label>
                        <input type="file" class="form-control form-control-alternative form-control-sm" name="" id="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cargar</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush