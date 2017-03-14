@extends('layouts.base')
@section('content')
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--nome do site-->
                    <a class="navbar-brand" href="#page-top"><img id="logo_menu" src="assets/img/logo.png"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('/blog') }}">Voltar</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <section id="blog" class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="title">{{ $p->titulo }}</h1>
                    {!! html_entity_decode($p->mensagem) !!}
                </div>
            </div>
        </div>
    </section>
@endsection