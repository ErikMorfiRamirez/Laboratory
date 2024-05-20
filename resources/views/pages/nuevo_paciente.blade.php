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
                      <li class="breadcrumb-item"><a href="{{ route('nuevo_paciente') }}">Nuevo paciente</a></li>
                      <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                    </ol>
                  </nav>
            </div>
            <div class="col-lg-12">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                               <i class="fas fa-heart text-danger"></i> Crear nuevo paciente
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mt--2">
                                <label>Completa el formulario para registrar al paciente.</label>
                            </div>
                            <div class="col-lg-12">
                                <small>Datos personales</small>
                            </div>
                        </div>
                        <div class="row mt-2">
                            
                            <div class="col-lg-3">
                                Nombre(s):
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Apellido(s):
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Genero:
                                <select class="form-control form-control-sm form-control-alternative">
                                    <option value="">Selecciona un genero...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                Fecha de nacimiento:
                                <input type="date" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Teléfono:
                                <input type="tel" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Correo:
                                <input type="email" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Teléfono representante:
                                <input type="tel" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Correo representante:
                                <input type="email" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-12"><hr></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt--4">
                                    <small>Dirección del paciente</small>
                                </div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-lg-3">
                                Código postal:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-12">

                            </div>
                            <div class="col-lg-3">
                                Ciudad:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Municipio:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Colonia:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Calle:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Numero exterior:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                Numero interior:
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-6">
                                Observaciones:
                                <textarea class="form-control form-control-sm form-control-alternative" cols="1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-icon btn-success" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-save fa-1x"></i></span>
                            <span class="btn-inner--text">Guardar registro</span>
                        </button>
                        <button class="btn btn-icon btn-secondary" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                            <span class="btn-inner--text">Limpiar formulario</span>
                        </button>
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