@extends('layouts.base')
@section('content')

    <section id="main-content">
        <div class="content">
            <div class="row">
                <!-- DEFINE SE O METODO DO FORMULARIO E POST OU PATCH -->
            @if(Request::is('*/create')) <!-- CREATE -->
            {!! Form::open(['id' => 'form-post', 'action' => 'PostController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            @elseif(Request::is('*/edit')) <!-- EDIT -->
            {!! Form::model($p, ['method' => 'PATCH', 'route' => ['post.update', $p->id], 'class' => 'form-horizontal'] ) !!}
            @endif
            <!-->

                <div class="row">
                    <div class="form-group">
                        {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
                        <div class="">
                            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required', 'aria-required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('mensagem', 'Mensagem', ['class' => 'control-label']) !!}
                        <div class="">
                            {!! Form::textarea('mensagem', null, ['class' => 'form-control', 'placeholder' => 'Mensagem', 'required', 'aria-required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('Salvar', array('class' => 'btn btn-primary')) !!}
                            <a href="{!! url()->previous() !!}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection