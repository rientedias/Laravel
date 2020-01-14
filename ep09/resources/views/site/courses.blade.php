@extends('site.master.layout')


@section('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">CURSOS</h1>
            <hr class="my-4">
            <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou
                informação.</p>
        </div>
    </div>
    <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

    <div class="container">
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Primeiro título de featurezinhas. <span class="text-muted">Supreendente, não?!</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Aêêê, moleque! <span class="text-muted">Tá legal ou não tá?</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">E, por último, essa aqui. <span class="text-muted">Xeque-mate!</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
    </div>

    <!-- /FIM DAS FEATUREZINHAS *-* -->
    @endsection
