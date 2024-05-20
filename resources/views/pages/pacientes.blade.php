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
                      <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                    </ol>
                  </nav>
            </div>
            <div class="col-lg-12">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                               <i class="fas fa-heart text-danger"></i> Listado de pacientes
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mt--2">
                                <small class="title">Filtros de busqueda</small>
                            </div>
                        </div>
                        <div class="row mt-2">                    
                            <div class="col-lg-2">
                                <span for="codigo">Folio orden</span>
                                <input type="text" id="codigo_paciente" name="codigo_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-2">
                                <span for="codigo">Código paciente</span>
                                <input type="text" id="codigo_paciente" name="codigo_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-2">
                                <span for="codigo">Código tutor</span>
                                <input type="text" id="codigo_paciente" name="codigo_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Nombre(s) de paciente</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Apellido(s) de paciente</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Email de paciente</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Email de tutor</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Teléfono paciente</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <span for="codigo">Teléfono tutor</span>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button class="btn btn-icon btn-success btn-sm" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                                    <span class="btn-inner--text">Buscar</span>
                                </button>  
                                <a class="btn btn-icon btn-info btn-sm" type="button" href="{{ route('nuevo_paciente') }}">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Nuevo paciente</span>
                                </a>   
                                <button class="btn btn-icon btn-secondary btn-sm" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                    <span class="btn-inner--text">Limpiar formulario</span>
                                </button>                               
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt--4">
                                <small>Resultados de la busqueda</small>
                            </div>
                            <div class="col-lg-12 table-responsive mt-2" >
                                <table class="table  mt-1 table-dark table-flush table-bordered table-hover table-striped " id="tabla_pacientes">
                                    <thead class="text-center text-sm">
                                        <tr class="">
                                            <th>#</th>
                                            <th>Código</th>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Genero</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Email</th>
                                            <th>Télefono</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tex-center text-sm">
                                            <td>1</td>
                                            <td>P12524-A</td>
                                            <td>LUIS JAVIER</td>
                                            <td>SOLIS ARREDONDO</td>
                                            <td>MASCULINO</td>
                                            <td>25/11/1995</td>
                                            <td>LUISJAVIER@EJEMPLO.COM</td>
                                            <td>5525256363</td>
                                            <td>
                                                <div class="dropdown open">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                               Opciones...
                                                            </button>
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <a href="{{ route('pacientes_detalle') }}" class="dropdown-item"><i class="fas fa-info-circle"></i> Ver detalles</a>
                                                        <button class="dropdown-item" href="#"><i class="fas fa-stethoscope"></i> Generar orden</button>
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
</div>
    

    @endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush