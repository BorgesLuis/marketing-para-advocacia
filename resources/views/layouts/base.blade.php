<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta tags para facilitar SEO -->
    <meta name="keywords" content="Marketing, Conteudo, advogados, advocacia, escritorio, busca, clientes, comunicacao, judicial, melhor, relacionamento, direito, trabalhista, penal, ">
    <meta name="description" content="Marketing para Advogados, aumente sua clientela de clientes com um Marketing de conteúdo online, transformamos seu excritírio de advocacia em uma referência de mercado, criando um relacionamento com seus clientes colocando seu escritório em um lugar privilegiado na mente deles.">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="revisit-after" content="1">
    <meta name="robots" content="ALL">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="author" content="Marketing para Advogados">
    <meta name="language" content="pt-br">
    <meta name="doc-class" content="Completed">
    <meta name="city" content="Belo Horizonte">
    <meta name="country" content="Brazil">
    <meta name="classification" content="Internet">
    <meta name="owner" content="contato@marketingparaadvogados.com">

    @include('layouts.styles')
</head>

<body id="page-top">
    <section id="container" class="fundo">
        @yield('content')
    </section>

    @include('layouts.scripts')

    <script>
    </script>
</body>

</html>