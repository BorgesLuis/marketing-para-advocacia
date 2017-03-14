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
                <!--div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#banner">Início</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#quem-somos">Quem somos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#lead">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <!-- banner -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="main-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/img/slides/topo.png"/>
                                <div class="flex-caption">
                                    <p>Conquiste mais clientes para o seu negócio</p>
                                    <a href="#lead" class="scrolldown btn btn-theme">Saiba mais</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- frase de efeito -->
    <section id="quem-somos" class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="big-cta">
                        <div class="cta-text">
                            <h2><p>Uma <span>iniciativa para apoiar advogados</span> de todo o Brasil a conquistarem
                                    mais clientes
                                    por meio do Marketing de Conteúdo.</p></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- boxes -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="box-gray aligncenter">
                                    <!--h4>Fully responsive</h4-->
                                    <div class="icon">
                                        <i class="fa fa-handshake-o fa-3x"></i>
                                    </div>
                                    <p>
                                        <b>Conhecimento</b> abre portas. E também novas possibilidades de negócios para
                                        você e sua empresa.
                                    </p>
                                </div>
                                <!--div class="box-bottom">
                                    <a href="#">Learn more</a>
                                </div-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="box-gray aligncenter">
                                    <!--h4>Fully responsive</h4-->
                                    <div class="icon">
                                        <i class="fa fa-rocket fa-3x"></i>
                                    </div>
                                    <p>
                                        O <b>Marketing de Conteúdo</b> é uma ferramenta eficaz para atrair pessoas
                                        interessadas nos serviços que você oferece.
                                    </p>
                                </div>
                                <!--div class="box-bottom">
                                    <a href="#">Learn more</a>
                                </div-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="box-gray aligncenter">
                                    <!--h4>Fully responsive</h4-->
                                    <div class="icon">
                                        <i class="fa fa-book fa-3x"></i>
                                    </div>
                                    <p>
                                        Acesse nosso <b>guia completo</b> para entender e, claro, utilizar o Marketing
                                        de Conteúdo para gerar negócios.
                                    </p>
                                </div>
                                <!--div class="box-bottom">
                                    <a href="#">Learn more</a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video apresentacao -->
    <section id="video-apresentacao" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3">
                    <div class="media">
                        <div class="media-body">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PPeJPRQ00r0"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section id="blog" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if(count($p) == 0)
                        <p>Não há posts para exibir</p>
                    @else
                        @foreach($p as $post)
                            <article>
                                <div class="post-slider">
                                    <div class="post-heading">
                                        <h3><a href="{{ URL::to('post/' . $post->id) }}"><h3>{{ $post->titulo }}</h3>
                                            </a></h3>
                                    </div>
                                    <!-- start flexslider>
                                    <div id="post-slider" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <img src="img/dummies/blog/img1.jpg" alt="" />
                                            </li>
                                            <li>
                                                <img src="img/dummies/blog/img2.jpg" alt="" />
                                            </li>
                                            <li>
                                                <img src="img/dummies/blog/img3.jpg" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                    <end flexslider -->
                                </div>
                                <p>
                                    {!! implode(' ', array_slice(explode(' ', html_entity_decode($post->mensagem)), 0, 50)) . '...' !!}
                                </p>
                                <div class="bottom-article">

                                    <a href="{{ URL::to('post/' . $post->id) }}" class="pull-right">Continue lendo <i
                                                class="icon-angle-right"></i></a>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- lead -->
    <section id="lead" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h4 class="text-center">Se inscreva para que um de nossos especialistas entre em contato</h4>
                    <div id="scroll">
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

    <footer>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; Moderna Theme. All right reserved.</p>
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                                -->
                                <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a
                                        href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="https://facebook.com/MarketingParaAdvocacia/" data-placement="top"
                                   title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://linkedin.com/company-beta/16214273/" data-placement="top"
                                   title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- H1 com palavras e frases para busca no google -->
    <h1 style='font-size: 1px; color:#F8F8FF'>Marketing para Advogados, sua solução web para conquistar clientes.</h1>
@endsection
