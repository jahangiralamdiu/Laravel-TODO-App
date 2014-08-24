<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>My To-Do App</title>
    <meta name="viewport" content="width=device-width">
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/bootstrap-theme.css') }}
    <style>
        #wrapper {width:960px;max-width:100%;margin:auto}
        .inline {display:inline}
        .error {color:red}
    </style>
</head>
<body>
<div id='wrapper'>
    <header>
        <h1>I am Jahangir and this is my To-Do App</h1>
    </header>
    <div id="content">
        @if (Session::has('message'))
        <div class="flash alert">
            <p>{{ Session::get('message') }}</p>
        </div>
        @endif

        @yield('main')
    </div>
</div>
</body>
</html>