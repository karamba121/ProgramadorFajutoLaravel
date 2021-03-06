<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Author: Programador Fajuto,
    Illustrator: Programador Fajuto, Category: Blog">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/default.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }}</title>
</head>

<body class="carregando">
    @include('shared.header')

    <main>
        <div id="content">
            @yield('content')
        </div>
    </main>
    @include('shared.menu')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    
@section('scripts')
    @include('shared.messages')
</body>