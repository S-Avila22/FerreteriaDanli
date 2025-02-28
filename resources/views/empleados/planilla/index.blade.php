@extends("theme.$theme.layout")

@section('titulo')
    Ingreso
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/planilla/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Hora Entrada</h3>
            </div>
            <div class="card-body">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Time picker:</label>
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection