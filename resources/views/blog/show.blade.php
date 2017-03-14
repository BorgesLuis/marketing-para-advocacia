@extends('layouts.base')
@section('content')
    <section id="main-content">
        <div class="content">
            <div class="center-block text-center">
                <h1 class="title">{{ $p->titulo }}</h1>
                {!! html_entity_decode($p->mensagem) !!}
            </div>
        </div>
    </section>
@endsection