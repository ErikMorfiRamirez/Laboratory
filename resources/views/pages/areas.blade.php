@extends('layouts.app_container')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ route('areas') }}">Áreas</a></li>
                  <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                </ol>
              </nav>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="ni ni-sound-wave text-black"></i> Areas
                </div>
                <div class="card-body">
                    <h4 class="card-title">Listado de areas</h4>
                    <div class="row">
                        <div class="col-lg-12 table-responsive">
                            <table class="table table-bordered table-striped table-hover table-flush table-dark mt-2" id="tabla_medicos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Código</th>
                                        <th>Nombre área</th>
                                        <th>Responsable</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>A-0123</td>
                                        <td>IMAGENOLOGÍA</td>
                                        <td>JOSE CARMONA GONZALES</td>
                                        <td>
                                            <a href="{{ route('detalle_area') }}" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> * Ver detalles</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Registrar área</button>
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