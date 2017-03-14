@extends('layouts.base')
@section('content')
    <section id="main-content">
        <div class="content">
            <div class="center-block text-center">
                <h1 class="title">{{ $p->titulo }}</h1>
                {{ $p->mensagem }}
            </div>
        </div>
    </section>
@endsection