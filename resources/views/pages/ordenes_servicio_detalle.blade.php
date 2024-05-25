@extends('layouts.app_container')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ORDEN DE SERVICIO A08585</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Paciente</h4>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label>Código:</label><br>
                                            <strong><i class="fas fa-check-circle"></i> P-01023</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Nombre(s):</label><br>
                                            <strong><i class="fas fa-check-circle"></i> JOSE JUAN</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Apellido(s):</label><br>
                                            <strong><i class="fas fa-check-circle"></i> QUEVEDO LOPEZ</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Fecha de nacimiento:</label><br>
                                            <strong><i class="fas fa-check-circle"></i> 25/11/1995</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Resultados e informes por área</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="nav-wrapper">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-prescription"></i> Imagenología</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-tooth"></i> Dentista</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="far fa-eye"></i> Oftalmologia</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fas fa-prescription-bottle"></i> Laboratorio</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="card shadow-sm">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Estudios solicitados</h4>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 table-responsive">
                                                                                    <table class="table table-striped table-hover table-bordered mt-2">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>#</th>
                                                                                                <th>Folio orden</th>
                                                                                                <th>Área</th>
                                                                                                <th>Servicio</th>
                                                                                                <th>Código</th>
                                                                                                <th>Prueba / Estudio</th>
                                                                                                <th>Resultado(s)</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>A08585</td>
                                                                                                <td>IMAGENOLOGÍA</td>
                                                                                                <td>RAYOS X</td>
                                                                                                <td>PR02023</td>
                                                                                                <td>RX TORAX</td>
                                                                                                <td>
                                                                                                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Capturar</button>
                                                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-upload"></i> Anexar</button>
        
                                                                                                </td>
                                                                                            </tr> 
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mt-2">
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-envelope"></i> Enviar por correo</button>
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-print"></i> Imprimir resultados</button>
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-file-pdf"></i> Generar PDF</button>


                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="card shadow-sm">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Estudios solicitados</h4>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 table-responsive">
                                                                                    <table class="table table-striped table-hover table-bordered mt-2">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>#</th>
                                                                                                <th>Folio orden</th>
                                                                                                <th>Área</th>
                                                                                                <th>Servicio</th>
                                                                                                <th>Código</th>
                                                                                                <th>Prueba / Estudio</th>
                                                                                                <th>Resultado(s)</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>A08585</td>
                                                                                                <td>DENTISTA</td>
                                                                                                <td>RAYOS X</td>
                                                                                                <td>PR02023</td>
                                                                                                <td>RX TORAX</td>
                                                                                                <td>
                                                                                                    <a class="btn btn-success btn-sm" href="{{ asset('pdf/REPORTE DE RESULTADOS DENTALES.pdf') }}"><i class="fas fa-eye"></i> * Ver reporte</a>
                                                                                                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Capturar</button>
                                                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-upload"></i> Anexar</button>
        
                                                                                                </td>
                                                                                            </tr> 
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mt-2">
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-envelope"></i> Enviar por correo</button>
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-print"></i> Imprimir resultados</button>
                                                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-file-pdf"></i> Generar PDF</button>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                                            <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                                <button class="btn btn-info btn-sm"><i class="fas fa-envelope"></i> Enviar todo por correo</button>
                                                <button class="btn btn-info btn-sm"><i class="fas fa-print"></i> Imprimir resultados</button>
                                                <button class="btn btn-info btn-sm"><i class="fas fa-file-pdf"></i> Generar reporte PDF</button>
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
</div>
    

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush