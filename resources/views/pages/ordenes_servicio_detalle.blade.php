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
                                                <strong>P-01023</strong>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Nombre(s):</label><br>
                                                <strong>JOSE JUAN</strong>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Apellido(s):</label><br>
                                                <strong>QUEVEDO LOPEZ</strong>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Fecha de nacimiento:</label><br>
                                                <strong>25/11/1995</strong>
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
                                        <h4 class="card-title">Informacion clinica</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="home-tab" data-toggle="tab"
                                                            data-target="#home" type="button" role="tab"
                                                            aria-controls="home" aria-selected="true">IMAGENOLOGIA</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="profile-tab" data-toggle="tab"
                                                            data-target="#profile" type="button" role="tab"
                                                            aria-controls="profile" aria-selected="false">DENTISTA</button>
                                                    </li>

                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                        aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Estudios solicitados</h4>
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <table
                                                                                    class="table table-striped table-hover table-bordered mt-2">
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
                                                                                                <label>Sin resutados
                                                                                                    reportados</label>
                                                                                                <hr>
                                                                                                <button
                                                                                                    class="btn btn-primary btn-sm mt--4"><i
                                                                                                        class="fas fa-edit"></i>
                                                                                                    Capturar</button>
                                                                                                <button
                                                                                                    class="btn btn-secondary btn-sm mt--4"><i
                                                                                                        class="fas fa-upload"></i>
                                                                                                    Anexar</button>

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
                                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                                        aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Estudios solicitados</h4>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 table-responsive">
                                                                                <table
                                                                                    class="table table-striped table-hover table-bordered mt-2">
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
                                                                                            <td>ORTODONCIA</td>
                                                                                            <td>PRD02024</td>
                                                                                            <td>ALINEADORES TRANSPARENTES
                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="row text-center">
                                                                                                    <div class="col-lg-12">
                                                                                                        <a class="btn btn-success btn-sm"
                                                                                                            href="{{ asset('reportes_pdf/REPORTE_DENTISTA.pdf') }}"><i
                                                                                                                class="fas fa-file-pdf fa-x2"></i>
                                                                                                            Ver reporte</a>
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
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-envelope-open-text"></i> Enviar reporte</button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Visualizar reporte</button>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-print"></i> Imprimir reporte</button>
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
