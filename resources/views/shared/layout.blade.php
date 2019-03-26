<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Author: Programador Fajuto,
    Illustrator: Programador Fajuto, Category: Blog">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    
@section('scripts')
    @include('shared.messages')
</body>