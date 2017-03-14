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
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <!-- captura de leads-->
    <section id="lead">
        <div class="container big-cta">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <br/>
                    <br/>
                    <br/>
                    <h3>Faça como milhares de empresas: conheça e invista no Marketing de Conteúdo.</h3>


                    <br/>
                    <h4>Um guia completo e gratuito.</h4>
                    <img id="logo_ebook" src="assets/img/ebook_mockup.png"/></a>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h4 class="text-center">Se inscreva para receber conteúdos</h4>
                    <div id="scroll">
                        {!! Form::open(['id' => 'form-post', 'action' => 'LeadController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <input type="hidden" name="ip" id="ip"/>
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
                            <div class="">
                                {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome', 'required', 'aria-required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('sobrenome', 'Sobrenome', ['class' => 'control-label']) !!}
                            <div class="">
                                {!! Form::text('sobrenome', null, ['class' => 'form-control', 'placeholder' => 'Sobrenome', 'required', 'aria-required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email corporativo', ['class' => 'control-label']) !!}
                            <div class="">
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail corporativo', 'required', 'aria-required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('categoria', 'Sou', ['class' => 'control-label']) !!}
                            <div class="">
                                <select class="form-control" id="categoria" name="categoria">
                                    <option value="b2b">Associado</option>
                                    <option value="b2c">Autônomo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                {!! Form::submit('Baixar e-book!', ['class' => 'btn btn-primary', 'id' => 'btnCapturaLead']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection