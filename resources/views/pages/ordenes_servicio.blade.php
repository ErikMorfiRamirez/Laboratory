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
                      <li class="breadcrumb-item"><a href="{{ route('pacientes') }}">Ordenes de servicio</a></li>
                      <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                    </ol>
                  </nav>
            </div>
            <div class="col-lg-12">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <i class="fas fa-clipboard-list"></i> Ordenes de servicio
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mt--4">
                                <small>Filtros de busqueda</small>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-2">
                                <label>Folio orden: </label>
                                <input type="text" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-2">
                                <label>Desde: </label>
                                <input type="date" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-2">
                                <label>Hasta: </label>
                                <input type="date" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-2">
                                <label>Código paciente: </label>
                                <input type="text" class="form-control form-control-alternative form-control-sm">
                            </div>
                            <div class="col-lg-2">
                                <label>Área: </label>
                                <select class="form-control form-control-alternative form-control-sm">
                                    <option value="">Selecciona...</option>
                                    <option value="">Laboratorio</option>
                                    <option value="">Imagenología</option>
                                    <option value="">Dentista</option>
                                    <option value="">Oftalmología</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label>Estatus: </label>
                                <select class="form-control form-control-alternative form-control-sm">
                                    <option value="">Selecciona...</option>
                                    <option value="">Iniciada</option>
                                    <option value="">En proceso</option>
                                    <option value="">Finalizada</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button class="btn btn-info btn-sm"><i class="fas fa-search"></i> Buscar</button>
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Limpiar formulario</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 mt--4">
                                <small>Resultados de la busqueda</small>
                            </div>
                            <div class="col-lg-12 mt-2 table-responsive">
                                <table class="table table-stripped table-hover table-bordered table-flush table-secondary mt-2" id="tabla_ordenes_servicio">
                                    <thead class="thead-ligth">
                                        <tr>
                                            <th>#</th>
                                            <th>Folio</th>
                                            <th>Paciente</th>
                                            <th>Áreas</th>
                                            <th>Fecha</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>A06565</td>
                                            <td>JOSE JUAN QUEVEDO LOPEZ</td>
                                            <td>
                                                <ol>
                                                    <li class="text-xs">Laboratorio</li>
                                                    <li class="text-xs">Imagenologia</li>
                                                    <li class="text-xs">Dentista</li>
                                                </ol>
                                            </td>
                                            <td>15/03/2023 12:32</td>
                                            <td>
                                                <span class="badge badge-success">Finalizada</span>
                                            </td>
                                            <td>
                                                <div class="dropdown open">
                                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                                Opciones
                                                            </button>
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <button class="dropdown-item" href="#"><i class="fas fa-edit"></i> Ver detalles</button>
                                                        <button class="dropdown-item" href="#"><i class="fas fa-file-invoice-dollar"></i> Generar recibo</button>
                                                        <button class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> Generar reporte</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>A06565</td>
                                            <td>JOSE JUAN QUEVEDO LOPEZ</td>
                                            <td>
                                                <ol>
                                                    <li class="text-xs">Laboratorio</li>
                                                    <li class="text-xs">Imagenologia</li>
                                                    <li class="text-xs">Dentista</li>
                                                </ol>
                                            </td>
                                            <td>15/03/2023 12:32</td>
                                            <td>
                                                <span class="badge badge-success">Finalizada</span>
                                            </td>
                                            <td>
                                                <div class="dropdown open">
                                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                                Opciones
                                                            </button>
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <a class="dropdown-item" href="{{ route('ordenes_servicio_detalle') }}"><i class="fas fa-edit"></i> Ver detalles</a>
                                                        <button class="dropdown-item" href="#"><i class="fas fa-file-invoice-dollar"></i> Generar recibo</button>
                                                        <button class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> Generar reporte</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('crear_orden_servicio') }}" class="btn btn-icon btn-success" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-plus fa-1x"></i></span>
                            <span class="btn-inner--text">Crear nueva orden</span>
                        </a>
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