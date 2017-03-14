@extends('layouts.base')
@section('content')

    <section id="main-content">
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    {!! Form::open(['id' => 'form-post', 'action' => 'AdminController@doLogin', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}<br/>
                        </div>
                    @endforeach

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                        <div class="">
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required', 'aria-required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                        <div class="">
                            {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('Entrar', array('class' => 'btn btn-primary')) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>


@endsection