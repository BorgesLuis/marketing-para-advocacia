@extends('layouts.base')
@section('content')

    <section id="main-content">
        <div class="content">
            <div class="col-lg-7">
                @if (session('success'))
                    <div class="col-lg-12">
                        <div class="alert alert-success fade in">
                            {{ session('success') }}<br/>
                        </div>
                    </div>
                @endif

                @if(count($p) == 0)
                    <p>Não há posts para exibir</p>
                @else
                    <h2>Postagens</h2>
                        @foreach($p as $postagem)
                            <div class="row">
                                <h3>{{ $postagem->titulo }}</h3>
                                {{ $postagem->mensagem }}
                            </div>
                        @endforeach
                @endif
            </div>

            <div class="col-lg-5">
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
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required', 'aria-required']) !!}
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

        </div>
    </section>
@endsection
