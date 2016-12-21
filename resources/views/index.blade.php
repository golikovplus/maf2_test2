<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Agent Finder</title>
    <base href="/">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Angular2 Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <link rel="author" href="https://agentology.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/styles.css') }}">

    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
</head>
<body>

<div id="app">
    <maf-app>Loading ...</maf-app>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACphQIltB8slNccKd7N2YMKjOvZgwYXPE&libraries=places"></script>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
