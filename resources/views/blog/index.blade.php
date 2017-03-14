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
                        <li><a href="{{ URL::to('/') }}">Voltar</a></li>
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

@endsection