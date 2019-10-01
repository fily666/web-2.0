@extends('layouts.abb') \\

@section('content') \\

<div class="row">
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Localización
            </div>
            <div class="panel-body">

                <div>


                    <div class="col-lg-12">
                        <div class="col-lg-6">

                            <form method="POST" action="{{ route('guardado_localizacions') }}">


                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="focusedInput">Titulo </label>
                                    <input class="form-control" id="focusedInput" type="text" name="titulo" required>
                                </div>


                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="focusedInput">Direccion </label>
                                        <input class="form-control" id="focusedInput" type="text" name="direccion" required>
                                    </div>

                                </div>


                                <div class="col-lg-12">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="focusedInput">Telefono </label>
                                            <input class="form-control" id="focusedInput" type="number" name="telefono" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="focusedInput">correo </label>
                                            <input class="form-control" id="focusedInput" name="correo" type="email" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="focusedInput">Encargado </label>
                                            <input class="form-control" id="focusedInput" type="text" name="encargado" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <label for="focusedInput">Cargo </label>
                                        <select class="form-control" id="focusedInput" name="cargo" required>
                                            <option value="">--- Seleccione ---</option>
                                            <option value="SP">Soporte</option>
                                            <option value="DG">Diseño Grafico</option>
                                            <option value="CM">Community Manger</option>
                                            <option value="CC">Call Center</option>
                                            <option value="TH">Talento Humano</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="focusedInput">Latitud </label>
                                            <input class="form-control" id="focusedInput" type="text" name="latitud" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="focusedInput">Longitud </label>
                                            <input class="form-control" id="focusedInput" type="text" name="longitud" required>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <button class="button">Crear</button>
                                    <a href='formilarioshome.php' class="button">Regresar</a>

                                </div>
                            </form>

                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>





    @endsection