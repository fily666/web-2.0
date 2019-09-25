@extends('layouts.abb')

@section('content')

<div class="row">
    <div class="container-fluid">

        <div class="panel panel-primary">
            <div class="panel-heading">
                Formulario
            </div>
            <div class="panel-body">

                <div class="col-lg-12">

                    <form method="POST" action="{{ route('guardar_form') }}">
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="col-lg-12">
                            <label for="focusedInput">Nombre</label>
                            <input class="form-control" id="focusedInput" type="text" name="name" required>
                        </div>

                        <div class="col-lg-6">
                            <label for="focusedInput">Tipo de documento de identidad</label>
                            <select class="form-control" id="focusedInput" name="identificacion" required>
                                <option value="">--- Seleccione  ---</option>
                                <option value="CC">Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cédula de Extranjería</option>
                                <option value="PS">Pasaporte</option>
                                <option value="DNI">Documento Nacional de Identificación</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label for="focusedInput">N". Identificacion</label>
                            <input class="form-control" id="focusedInput" type="number" name="number" required>
                        </div>

                        <div class="col-lg-6">
                            <label for="focusedInput">Sexo</label>
                            <div class="">
                               <input  id="focusedInput" type="radio" name="sexo" value="hombre" required>Hombre
                               <input  id="focusedInput" type="radio" name="sexo" value="mujer" required>Mujer 
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label for="focusedInput">Fecha de nacimiento</label>
                            <input class="form-control" id="focusedInput" type="date" name="fecha" required>
                        </div>

                        <div class="col-lg-12">
                            <label for="focusedInput">E-mail</label>
                            <input class="form-control" id="focusedInput" type="email" name="email" required>
                        </div>

                        <div class="col-lg-12">
                            <label for="focusedInput">Novedades</label>
                            <textarea class="form-control" id="focusedInput" type="text" name="novedades" required></textarea>
                        </div>


                        <div>
                            <div class="col-lg-12">

                                <button class="button">Crear</button>
                                <a href='formilarioshome.php' class="button">Regresar</a>

                            </div>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>
</div>



@endsection
