@extends('layouts.abb')

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Noticias nuevas
            </div>
            <div class="panel-body">


                <form method="POST" action="{{ route('prueba23') }}">


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">




                    <div class="col-lg-12">
                        <div class="col-lg-9">

                            <label for="focusedInput">Titulo de la Noticia del dia </label>
                            <input class="form-control" id="focusedInput" type="text" name="titulo" required>
                        </div>

                    </div>


                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label for="focusedInput">Periodista </label>
                            <input class="form-control" id="focusedInput" type="text" name="periodista" required>
                        </div>


                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label for="focusedInput">Lugar </label>
                            <input class="form-control" id="focusedInput" type="text" name="lugar" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="focusedInput">Persona entevistada </label>
                            <input class="form-control" id="focusedInput" type="text" name="persona" required>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label for="focusedInput">Material utilizado </label>
                            <input class="form-control" id="focusedInput" type="text" name="material" required>
                        </div>


                    </div>
                    <div class="col-lg-12">

                        <div class="col-lg-6">
                            <label for="focusedInput">Email</label>
                            <input class="form-control" id= "focusedInput" name="email" type="email" require>
                        </div>
                        <div class="col-lg-6">
                            <label for="focusedInput">adjuntar noticia</label>
                            <input class= "form-control"  id="focusedInput" type="file" name="adjunto" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <label for="focusedInput">Observaciones</label>
                        <textarea class="form-control" id="focusedInput" type="text" name="observaciones" required></textarea>
                    </div>

                    <div class="col-lg-12">
                        <div class="container-fluid">
                        
                            <button class="button">Crear</button>
                            <a href='formilarioshome.php' class="button">Regresar</a>
                        </div>
                    </div>

            </div>

        </div>














    </div>














    </form>









</div>

</div>
</div>
</div>





@endsection