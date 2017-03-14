@extends('layouts.base')
@section('content')

    <section id="main-content">
        <div class="content">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}<br/>
                </div>
            @endforeach

            <div class="row">
                <h2>Postagens
                    <span class="">
                        <a class="btn btn-primary" href="{{ URL::to('/post/create') }}" title="Criar nova postagem">Criar nova postagem</a>
                        <a class="btn btn-danger" href="{{ URL::to('/logout') }}">Sair</a>
                    </span>
                </h2>
            </div>

            <!--postagens-->
            <div class="row">
                @if(count($p) == 0)
                    <p>Não há posts para exibir</p>
                @else
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>Título</th>
                            <th>Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($p as $postagem)
                            <tr>
                                <td>{{ $postagem->titulo }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{ url('/post/' . $postagem->id ) }}"
                                           title="Visualizar">Visualizar</a>
                                        <a class="btn btn-info" href="{{ url('/post/' . $postagem->id . '/edit') }}"
                                           title="Editar">Editar</a>
                                        {{ Form::open(['action' => ['PostController@destroy', $postagem->id], 'method' => 'delete']) }}
                                        <button class="btn btn-danger" type="submit">Deletar</button>
                                        {{ Form::close() }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <!--leads-->
            <div class="row">
                @if(count($l) == 0)
                    <p>Não há leads cadastrados</p>
                @else
                    <h2>Leads registrados até o momento: {{ count($l) }}</h2>
                    <h4>Pontos B2B: {{ 2*$countB2B }} | Pontos B2C: {{ $countB2C }}</h4>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Categoria</th>
                            <th>IP</th>
                            <th>Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($l as $lead)
                            <tr>
                                <td>{{ $lead->nome . ' ' . $lead->sobrenome}}</td>
                                <td>{{ $lead->email }}</td>
                                <td>{{ strtoupper($lead->categoria) }}</td>
                                <td>{{ $lead->ip }}</td>
                                <td>
                                    {{ Form::open(['action' => ['LeadController@destroy', $lead->id], 'method' => 'delete']) }}
                                    <button class="btn btn-danger" type="submit">Deletar</button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>

@endsection