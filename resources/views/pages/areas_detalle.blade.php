@extends('layouts.app_container')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('areas') }}">Áreas</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('detalle_area') }}">Detalle área</a></li>
                        <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="ni ni-sound-wave text-black"></i> Detalle Área
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-lg">
                                    <div class="card-header">
                                        <i class="fas fa-info-circle"></i> Informacíon del área
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                Código del área:<br>
                                                <strong><i class="far fa-check-square"></i> A-01023</strong>
                                            </div>
                                            <div class="col-lg-12">
                                                Nombre del área:<br>
                                                <strong><i class="far fa-check-square"></i> IMAGENOLOGÍA</strong>
                                            </div>
                                            <div class="col-lg-12">
                                                Responsable del área:<br>
                                                <strong><i class="far fa-check-square"></i> JOSE CARMONA LOPEZ</strong>
                                            </div>
                                            <div class="col-lg-12">
                                                Fecha de creación:<br>
                                                <strong><i class="far fa-check-square"></i> 01/01/2023</strong>
                                            </div>
                                            <div class="col-lg-12">
                                                Estatus:
                                                <strong>
                                                    <span class="badge badge-success">Activo</span>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-secondary btn-sm col"><i class="fas fa-edit"></i> Editar
                                            información</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-lg">
                                    <div class="card-header">
                                        <i class="far fa-check-square"></i> Servicios asociados
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 table-responsive">
                                                <table class="table table-hover table-striped table-flush mt-2"
                                                    id="tabla_servicios">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Servicio</th>
                                                            <th>Estatus</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>RAYOS X</td>
                                                            <td>
                                                                <span class="badge badge-success">Activo</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm"><i
                                                                        class="fas fa-infor-circle">Detalles</i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>TOMOGRAFIAS</td>
                                                            <td>
                                                                <span class="badge badge-success">Activo</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm"><i
                                                                        class="fas fa-infor-circle">Detalles</i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>MASTOGRAFIAS</td>
                                                            <td>
                                                                <span class="badge badge-danger">Inactivo</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm"><i
                                                                        class="fas fa-infor-circle">Detalles</i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-12">
                                                <hr>
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i> Crear servicio</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="card shadow-lg">
                                    <div class="card-header">
                                        <i class="fas fa-th-list"></i> Pruebas / Estudios
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 mt--3">
                                                <small>Filtros de busqueda</small>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label>Servicios:</label>
                                                        <select
                                                            class="form-control form-control-alternative form-control-sm">
                                                            <option value="">Selecciona</option>
                                                            <option value="">RAYOS X</option>
                                                            <option value="">TOMOGRAFIAS</option>
                                                            <option value="">MASTOGRAFIAS</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Código:</label>
                                                        <input class="form-control form-control-sm form-control-alternative"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Prueba / Estudio:</label>
                                                        <input class="form-control form-control-sm form-control-alternative"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Estatus:</label>
                                                        <select
                                                            class="form-control form-control-alternative form-control-sm">
                                                            <option value="">Selecciona</option>
                                                            <option value="">ACTIVO</option>
                                                            <option value="">INACTIVO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mt-3 text-right">
                                                        <button class="btn btn-success btn-sm"><i class="fas fa-search"></i>
                                                            Buscar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <hr>
                                            </div>
                                            <div class="col-lg-12 table-responsive">
                                                <table class="table table-striped table-hover table-bordered mt-2"
                                                    id="tabla_pruebas">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Área</th>
                                                            <th>Servicio</th>
                                                            <th>Prueba / Estudio</th>
                                                            <th>Costo</th>
                                                            <th>Estatus</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>IMAGENOLOGÍA</td>
                                                            <td>RAYOS X</td>
                                                            <td>RX TORAX</td>
                                                            <td>$1,200</td>
                                                            <td>
                                                                <span class="badge badge-success">Activo</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm"><i
                                                                        class="fas fa-infor-circle">Detalles</i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-12">
                                                <hr>
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i> Agregar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="card shadow-lg">
                                    <div class="card-header">
                                        <i class="fas fa-user-md"></i> Medicos tratantes
                                    </div>
                                    <div class="card-body">
                                        <div class="col-lg-12 table-responsive">
                                            <table class="table table-hover table-striped table-bordered mt-2"
                                                id="tabla_medicos">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Especialidad</th>
                                                        <th>Estatus</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>ERIK RAMIREZ</td>
                                                        <td>TECNICO RADIOLOGO</td>
                                                        <td><span class="badge badge-success">Activo</span></td>
                                                        <td><button class="btn btn-info btn-sm">Detalles</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr>
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i> Agregar</button>
                                        </div>
                                    </div>
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
