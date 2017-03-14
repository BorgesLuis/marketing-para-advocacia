@extends('layouts.base')
@section('content')

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!--nome do site-->
                <a class="navbar-brand" href="#page-top"><img id="logo_menu" src="assets/img/logo.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#logo-quem">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#blog">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#saiba-mais">Saiba mais</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="main-content">
        <div class="content">
            <section id="logo-quem" class="row">
                <div>
                    <div><img id="img_topo" src="assets/img/topo.jpg"/></div>
                    <h1>Marketing para Advogados</h1>
                    <h5>Conquiste mais clientes para o seu escritório.</h5><br><br>
                    <p><b>Conhecimento abre portas. E também novas possibilidades de negócios para você e sua
                            empresa.</b></p></br>
                    <p>Você conhece o Marketing de Conteúdo? Está aqui um bom motivo para conhecer: você pode usá-lo
                        para conquistar mais clientes. O Marketing de Conteúdo é uma ferramenta eficaz para atrair
                        pessoas interessadas nos serviços que você oferece.</p><br>
                    <p>Acesse nosso guia completo para entender e, claro, utilizar o Marketing de Conteúdo para gerar
                        negócios.</p>
                </div>
                <div><br>
                    <h1 align="center">Quem Somos</h1>
                    <p>Uma iniciativa para apoiar advogados de todo o Brasil a conquistarem mais clientes por meio do
                        Marketing de Conteúdo.</p>
                </div>
            </section>

            <section id="blog" class="row">
                <h2>Postagens</h2>
                @if(count($p) == 0)
                    <p>Não há posts para exibir</p>
                @else
                    @foreach($p as $post)
                        <div class="col-md-4">
                            <h3>{{ $post->titulo }}</h3>
                            {!! implode(' ', array_slice(explode(' ', html_entity_decode($post->mensagem)), 0, 50)) . '...' !!}
                            <h4><a href="{{ URL::to('post/' . $post->id) }}">Leia mais</a></h4>
                        </div>
                    @endforeach
                @endif
            </section>

            <!-- captura de leads-->
            <section align="middle" id="saiba-mais" class="row">
                <div id="scroll" class="col-md-6">
                    {!! Form::open(['id' => 'form-post', 'action' => 'LeadController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
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
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-  mail corporativo', 'required', 'aria-required']) !!}
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
                            {!! Form::submit('Quero saber mais', ['class' => 'btn btn-primary', 'id' => 'btnCapturaLead']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>

            <div class="container">
                <div class="rodape">
                    <div><font>Fale Conosco</font></div>
                    <img class="btn-social"
                         src="http://www.freeiconspng.com/uploads/social-facebook-button-blue-icon--social-bookmark-iconset--yootheme-6.png">
                    <img class="btn-social"
                         src="http://download.seaicons.com/icons/yootheme/social-bookmark/512/social-linkedin-button-blue-icon.png">
                </div>
            </div>

            <!-- H1 com palavras e frases para busca no google -->
            <h1 style='font-size: 1px; color:#F8F8FF'>Marketing para Advogados, sua solução web para conquistar clientes.</h1>
    </section>
@endsection
