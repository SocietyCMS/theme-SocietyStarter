<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('meta')
        <meta name="description" content=""/>
    @show

    <title>@yield('title') | {{ Setting::get('core::site-name') }}</title>

    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">
    {!! Theme::script('build.js') !!}
</head>

<body>

    @include('partials.navigation')

    <div class="site-header">
        <div class="container">
            <h1 class="site-title">@yield('title')</h1>
            <p class="lead site-description">@yield('description')</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>