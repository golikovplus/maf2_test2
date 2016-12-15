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

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/styles.css') }}">
</head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('url' => 'api/lead', 'method' => 'post')) !!}
        {!! Form::text('location', 'NewYork') !!}
        {!! Form::text('lead_type', '') !!}
        {!! Form::text('preferences', '2') !!}
        {!! Form::text('price_range', '3') !!}
        {!! Form::text('home_type', '4') !!}
        {!! Form::text('time_frame', '5') !!}
        {!! Form::text('agent_hero', '1') !!}
        {!! Form::text('fullname', 'Yurec') !!}
        {!! Form::text('email', 'example@gmail.com') !!}
        {!! Form::text('phone', '+3806641987323') !!}
        {!! Form::submit('Click Me!') !!}
    {!! Form::close() !!}
    <br><br><br>
    {!! Form::open(array('url' => 'api/testimonial', 'method' => 'post','files' => true)) !!}
        {!! Form::text('fullname', 'George') !!}
        {!! Form::file('image') !!}
        {!! Form::text('address', 'New York') !!}
        {!! Form::text('message', 'I recommend MyAgentFinder!') !!}
        {!! Form::submit('Click Me!') !!}
    {!! Form::close() !!}
</body>
<footer>
    <script src="{{ elixir('js/app.js') }}"></script>
</footer>
</html>
