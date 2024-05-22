@extends('layouts.app_container')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ route('pacientes') }}">Ordenes de servicio</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('crear_orden_servicio') }}">Crear orden de servicio</a></li>
                  <!--<li class="breadcrumb-item active" aria-current="page">Icons</li>-->
                </ol>
              </nav>
        </div>
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    Crear orden de trabajo
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-md">
                                <div class="card-header">
                                    <i class="fas fa-info-circle"></i> INFORMACIÓN DEL PACIENTE
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <strong>CÓDIGO:</strong><br> <i class="far fa-check-circle"></i> PAC0101
                                                </div>
                                                <div class="col-lg-4">
                                                    <strong>NOMBRE(S):</strong><br> <i class="far fa-check-circle"></i> ERIK DANIEL
                                                </div>
                                                <div class="col-lg-4">
                                                    <strong>APELLIDO(S):</strong><br> <i class="far fa-check-circle"></i> GOMEZ RAMIREZ
                                                </div>
                                                <div class="col-lg-4">
                                                    <strong>FECHA DE NACIMIENTO:</strong><br> <i class="far fa-check-circle"></i> 25/11/1995
                                                </div>
                                                <div class="col-lg-4">
                                                    <strong>EDAD:</strong><br> <i class="far fa-check-circle"></i> 28
                                                </div>
                                                <div class="col-lg-4">
                                                    <strong>GENERO:</strong><br> <i class="far fa-check-circle"></i> MASCULINO
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                   </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <div class="col-lg-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm col" data-toggle="modal" data-target="#modelId">
                                            <i class="fas fa-hand-pointer"></i> Seleccionar paciente
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-file-medical"></i> ORDEN DE SERVICIO
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-lg-12 mt--3">
                                            <small>Estudios solicitados</small>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 table-responsive">
                                                            <table class="table table-striped table-flush table-hover table-dark text-xs mt-2" id="tabla_ordenes_servicio">
                                                                <thead class="text-center">
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Área</th>
                                                                        <th>Servicio</th>
                                                                        <th>Concepto</th>
                                                                        <th>Costo</th>
                                                                        <th>Opciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="text-center">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>P01023</td>
                                                                        <td>Imagenología</td>
                                                                        <td>Rayos X</td>
                                                                        <td>Rayos X torax vista izquierda</td>
                                                                        <td>$1,200</td>
                                                                        <td>
                                                                            <button class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                                                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>P01023</td>
                                                                        <td>Dentista</td>
                                                                        <td>Edodoncia</td>
                                                                        <td>Tratamiento de Conductos (Endodoncia)</td>
                                                                        <td>$1000</td>
                                                                        <td>
                                                                            <button class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                                                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <hr>
                                                            <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal_pruebas"><i class="fas fa-plus"></i> Agregar Pruebas / Estudios</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-2">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                                <div class="card-body">
                                                    <h4 class="card-title"><i class="fas fa-money-check-alt"></i> Pago</h4>
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <label>Importe:</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <strong>$2,200</strong>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>Descuetos:</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <strong>$0.00</strong>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>Subtotal:</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <strong>$2,200</strong>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>IVA:</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <strong>$250</strong>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>Total:</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <strong>$2,450</strong>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 mt-2">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h4 class="card-title"><i class="fas fa-file-invoice-dollar"></i> Ingresar pago</h4>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <small>Datos para facturación</small>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>RFC</label>
                                                            <input type="text" class="form-control form-control-alternative form-control-sm" placeholder="XAXX010101A"></input>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>Forma de pago</label>
                                                            <select class="form-control form-control-alternative form-control-sm">
                                                                <option value="">Selecciona</option>
                                                                <option value="">Efectivo</option>
                                                                <option value="">Tarjeta de credito</option>
                                                                <option value="">Tarjeta de debito</option>
                                                                <option value="">Transferencia electrónica</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>Uso de CFDI</label>
                                                            <select class="form-control form-control-alternative form-control-sm">
                                                                <option value="">Selecciona</option>
                                                                <option value="">Efectivo</option>
                                                                <option value="">Tarjeta de credito</option>
                                                                <option value="">Tarjeta de debito</option>
                                                                <option value="">Transferencia electrónica</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-lg-12 mt--4">
                                                            <small>Datos del pago</small>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <table class="table table-striped table-bordered table-hover text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Forma de pago</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Opciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Efectivo</td>
                                                                        <td>$1300</td>
                                                                        <td>
                                                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"> </i> </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12 mt-2 text-right">
                                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_pago"><i class="fas fa-plus"></i> Agregar pago</button>
                                                        </div>
                                                        <div class="col-lg-12 mt--3">
                                                            <hr>
                                                        </div>
                                                        <div class="col-lg-4 mt--3">
                                                            <label>Pago: </label>
                                                            <input type="number" placeholder="$0.00" value="1500" readonly class="form-contro form-control-alternative form-control-sm">
                                                        </div>
                                                        <div class="col-lg-4 mt--3 ">
                                                            <label>Saldo: </label>
                                                            <input type="number" placeholder="$0.00" readonly class="form-contro form-control-alternative form-control-sm">
                                                        </div>
                                                        <div class="col-lg-4 mt--3">
                                                            <label>Cambio: </label>
                                                            <input type="text" placeholder="$0.00" value="200" readonly class="form-contro form-control-alternative form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <button class="btn btn-success"><i class="fas fa-file-medical-alt"></i> Generar orden de servicio</button>
                                    <button class="btn btn-secondary"><i class="fas fa-edit"></i> Limpiar formulario</button>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--MODALS -->
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
                                                <button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Seleccionar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Button trigger modal -->
        
        
        <!-- Modal -->
        <div class="modal fade" id="modal_pruebas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Seleccion de Pruebas / Estudios</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 mt--4">
                                <small>Filtros de busqueda</small>
                                <hr>
                            </div>
                        </div>
                        <div class="row mt--3">
                            <div class="col-lg-2">
                                <label>Codigo:</label>
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-3">
                                <label>Área:</label>
                                <select class="form-control form-control-alternative form-control-sm">
                                    <option value="">Selecciona</option>
                                    <option value="">Imagenología</option>
                                    <option value="" selected>Dentista</option>
                                    <option value="">Oftalmología</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Servicio:</label>
                                <select class="form-control form-control-alternative form-control-sm">
                                    <option value="">Selecciona</option>
                                    <option value="">Endodoncia</option>
                                    <option value="">Urgencias Dentales</option>
                                    <option value="">Odontopediatría</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Nombre Prueba / Estudio:</label>
                                <input type="text" class="form-control form-control-sm form-control-alternative">
                            </div>
                            <div class="col-lg-12 text-right mt-2">
                                <button class="btn btn-success btn-sm"><i class="fas fa-search"></i> Buscar</button>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-bordered table-hover table-striped mt-2" id="tabla_pruebas_estudios">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Área</th>
                                            <th>Servicio</th>
                                            <th>Código</th>
                                            <th>Prueba / Estudio</th>
                                            <th>Costo</th>
                                            <th>Opcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>IMAGENOLOGÍA</td>
                                            <td>RAYOS X</td>
                                            <td>P-0121</td>
                                            <td>RX TORAX</td>
                                            <td>$1,300</td>
                                            <td><button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Agregar</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Button trigger modal -->
        
        
        <!-- Modal -->
        <div class="modal fade" id="modal_pago" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Forma de pago:</label>
                                <select class="form-control form-control-alternative form-control-sm">
                                    <option>Selecciona</option>    
                                    <option>Efectivo</option>    
                                    <option>Tarjeta Debito</option>    
                                    <option>Tarjeta Credito</option>    
                                    <option>Transferencia electronica</option>    
                                <select>
                            </div>
                            <div class="col-lg-3">
                                <label>Referencia</label>
                                <input type="text" class="form-control form-control-alternative form-control-sm" placeholder="XXXXXX">
                            </div>
                            <div class="col-lg-3">
                                <label>Monto del pago:</label>
                                <input type="number" min="1" class="form-control form-control-alternative form-control-sm" placeholder="$0.00">
                            </div>
                            <div class="col-lg-2 mt-2">
                                <br>
                                <button class="btn btn-primary btn-sm col"><i class="fas fa-check"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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